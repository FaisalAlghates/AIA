<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function index()
    {
        return view('admin.services.index', ['services' => Service::orderBy('sort_order')->orderBy('title')->get()]);
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $service = Service::create($this->data($request));

        return redirect()->route('admin.services.index')->with('status', "Service “{$service->title}” created.");
    }

    public function show(Service $service)
    {
        return redirect()->route('admin.services.edit', $service);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', ['service' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        $service->update($this->data($request, $service));

        return redirect()->route('admin.services.index')->with('status', "Service “{$service->title}” updated.");
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')->with('status', 'Service deleted.');
    }

    /** Validates the form and shapes it for the model: features come in one per line, the slug follows the title. */
    private function data(Request $request, ?Service $service = null): array
    {
        $v = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:100',
            'color_from' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
            'color_to' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
            'features' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'price_period' => 'nullable|string|max:50',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $slug = Str::slug($v['title']);
        $taken = Service::where('slug', $slug)->when($service, fn ($q) => $q->where('id', '!=', $service->id))->exists();

        return array_merge($v, [
            'slug' => $taken ? $slug.'-'.Str::lower(Str::random(4)) : $slug,
            'features' => array_values(array_filter(array_map('trim', preg_split('/\R/', (string) ($v['features'] ?? ''))))),
            'is_active' => $request->boolean('is_active'),
            'sort_order' => (int) ($v['sort_order'] ?? 0),
        ]);
    }
}
