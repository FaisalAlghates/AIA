@php($service = $service ?? null)
@if ($errors->any())
    <div class="mb-6 rounded-xl bg-red-50 text-red-800 p-4" role="alert">
        <ul class="list-disc ms-5">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif
<div class="bg-white rounded-2xl shadow p-8 grid gap-6 max-w-3xl">
    <div>
        <label for="title" class="block font-semibold mb-1">Title</label>
        <input id="title" name="title" required maxlength="255" value="{{ old('title', $service?->title) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
    </div>
    <div>
        <label for="short_description" class="block font-semibold mb-1">Short description</label>
        <input id="short_description" name="short_description" maxlength="500" value="{{ old('short_description', $service?->short_description) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
    </div>
    <div>
        <label for="description" class="block font-semibold mb-1">Description</label>
        <textarea id="description" name="description" rows="4" required class="w-full rounded-xl border border-gray-300 px-4 py-3">{{ old('description', $service?->description) }}</textarea>
    </div>
    <div>
        <label for="features" class="block font-semibold mb-1">Features (one per line)</label>
        <textarea id="features" name="features" rows="4" class="w-full rounded-xl border border-gray-300 px-4 py-3">{{ old('features', implode("\n", (array) $service?->features)) }}</textarea>
    </div>
    <div class="grid gap-6 sm:grid-cols-3">
        <div>
            <label for="icon" class="block font-semibold mb-1">Icon name</label>
            <input id="icon" name="icon" maxlength="100" value="{{ old('icon', $service?->icon) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
        <div>
            <label for="color_from" class="block font-semibold mb-1">Gradient from</label>
            <input id="color_from" name="color_from" type="color" value="{{ old('color_from', $service?->color_from ?: '#3B82F6') }}" class="h-12 w-full rounded-xl border border-gray-300" />
        </div>
        <div>
            <label for="color_to" class="block font-semibold mb-1">Gradient to</label>
            <input id="color_to" name="color_to" type="color" value="{{ old('color_to', $service?->color_to ?: '#8B5CF6') }}" class="h-12 w-full rounded-xl border border-gray-300" />
        </div>
    </div>
    <div class="grid gap-6 sm:grid-cols-3">
        <div>
            <label for="price" class="block font-semibold mb-1">Price (USD)</label>
            <input id="price" name="price" type="number" min="0" step="0.01" value="{{ old('price', $service?->price) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
        <div>
            <label for="price_period" class="block font-semibold mb-1">Per</label>
            <input id="price_period" name="price_period" maxlength="50" placeholder="month" value="{{ old('price_period', $service?->price_period) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
        <div>
            <label for="sort_order" class="block font-semibold mb-1">Order</label>
            <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $service?->sort_order ?? 0) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
    </div>
    <label class="flex items-center gap-3">
        <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $service?->is_active ?? true)) class="w-5 h-5" />
        <span class="font-semibold">Show on the public site</span>
    </label>
    <div class="flex gap-3">
        <button type="submit" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold">Save</button>
        <a href="{{ route('admin.services.index') }}" class="px-6 py-3 rounded-xl border border-gray-300">Cancel</a>
    </div>
</div>
