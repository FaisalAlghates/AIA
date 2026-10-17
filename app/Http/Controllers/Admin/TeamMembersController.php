<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamMembersController extends Controller
{
    public function index()
    {
        return view('admin.team-members.index', ['members' => TeamMember::orderBy('sort_order')->orderBy('name')->get()]);
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        $member = TeamMember::create($this->data($request));

        return redirect()->route('admin.team-members.index')->with('status', "{$member->name} added to the team.");
    }

    public function show(TeamMember $teamMember)
    {
        return redirect()->route('admin.team-members.edit', $teamMember);
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', ['member' => $teamMember]);
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $teamMember->update($this->data($request));

        return redirect()->route('admin.team-members.index')->with('status', "{$teamMember->name} updated.");
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();

        return redirect()->route('admin.team-members.index')->with('status', 'Team member removed.');
    }

    /** Validates the form and shapes it for the model: skills are comma separated, initials come from the name. */
    private function data(Request $request): array
    {
        $v = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'color_from' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
            'color_to' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
            'skills' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $initials = Str::of($v['name'])->explode(' ')->filter()->take(2)->map(fn ($w) => Str::upper(Str::substr($w, 0, 1)))->implode('');

        return array_merge($v, [
            'initials' => $initials ?: '?',
            'skills' => array_values(array_filter(array_map('trim', explode(',', (string) ($v['skills'] ?? ''))))),
            'is_leadership' => $request->boolean('is_leadership'),
            'is_active' => $request->boolean('is_active'),
            'sort_order' => (int) ($v['sort_order'] ?? 0),
        ]);
    }
}
