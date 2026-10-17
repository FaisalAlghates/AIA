@php($member = $member ?? null)
@if ($errors->any())
    <div class="mb-6 rounded-xl bg-red-50 text-red-800 p-4" role="alert">
        <ul class="list-disc ms-5">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif
<div class="bg-white rounded-2xl shadow p-8 grid gap-6 max-w-3xl">
    <div class="grid gap-6 sm:grid-cols-2">
        <div>
            <label for="name" class="block font-semibold mb-1">Name</label>
            <input id="name" name="name" required maxlength="255" value="{{ old('name', $member?->name) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
        <div>
            <label for="position" class="block font-semibold mb-1">Position</label>
            <input id="position" name="position" required maxlength="255" value="{{ old('position', $member?->position) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
    </div>
    <div>
        <label for="bio" class="block font-semibold mb-1">Bio</label>
        <textarea id="bio" name="bio" rows="4" required class="w-full rounded-xl border border-gray-300 px-4 py-3">{{ old('bio', $member?->bio) }}</textarea>
    </div>
    <div>
        <label for="skills" class="block font-semibold mb-1">Skills (comma separated)</label>
        <input id="skills" name="skills" value="{{ old('skills', implode(', ', (array) $member?->skills)) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
    </div>
    <div class="grid gap-6 sm:grid-cols-3">
        <div>
            <label for="color_from" class="block font-semibold mb-1">Avatar gradient from</label>
            <input id="color_from" name="color_from" type="color" value="{{ old('color_from', $member?->color_from ?: '#3B82F6') }}" class="h-12 w-full rounded-xl border border-gray-300" />
        </div>
        <div>
            <label for="color_to" class="block font-semibold mb-1">Avatar gradient to</label>
            <input id="color_to" name="color_to" type="color" value="{{ old('color_to', $member?->color_to ?: '#8B5CF6') }}" class="h-12 w-full rounded-xl border border-gray-300" />
        </div>
        <div>
            <label for="sort_order" class="block font-semibold mb-1">Order</label>
            <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $member?->sort_order ?? 0) }}" class="w-full rounded-xl border border-gray-300 px-4 py-3" />
        </div>
    </div>
    <label class="flex items-center gap-3">
        <input type="checkbox" name="is_leadership" value="1" @checked(old('is_leadership', $member?->is_leadership ?? false)) class="w-5 h-5" />
        <span class="font-semibold">Part of the leadership team</span>
    </label>
    <label class="flex items-center gap-3">
        <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $member?->is_active ?? true)) class="w-5 h-5" />
        <span class="font-semibold">Show on the public site</span>
    </label>
    <div class="flex gap-3">
        <button type="submit" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold">Save</button>
        <a href="{{ route('admin.team-members.index') }}" class="px-6 py-3 rounded-xl border border-gray-300">Cancel</a>
    </div>
</div>
