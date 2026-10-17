@extends('core::layouts.app')

@section('title', 'Team - Admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Team</h1>
                <a href="{{ route('admin.dashboard') }}" class="text-indigo-600">Back to admin</a>
            </div>
            <a href="{{ route('admin.team-members.create') }}" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-semibold">Add a member</a>
        </div>

        @if (session('status'))
            <div class="mb-6 rounded-xl bg-emerald-50 text-emerald-800 p-4" role="status">{{ session('status') }}</div>
        @endif

        <div class="bg-white rounded-2xl shadow overflow-x-auto">
            <table class="w-full text-left">
                <thead class="text-sm text-gray-500 border-b">
                    <tr><th class="p-4">Name</th><th class="p-4">Position</th><th class="p-4">Leadership</th><th class="p-4">Status</th><th class="p-4"></th></tr>
                </thead>
                <tbody>
                    @forelse ($members as $member)
                        <tr class="border-b last:border-0">
                            <td class="p-4 font-semibold">{{ $member->name }}</td>
                            <td class="p-4">{{ $member->position }}</td>
                            <td class="p-4">{{ $member->is_leadership ? 'Yes' : 'No' }}</td>
                            <td class="p-4">{{ $member->is_active ? 'Active' : 'Hidden' }}</td>
                            <td class="p-4 text-right whitespace-nowrap">
                                <a class="text-indigo-600 font-semibold" href="{{ route('admin.team-members.edit', $member) }}">Edit</a>
                                <form class="inline" method="POST" action="{{ route('admin.team-members.destroy', $member) }}" onsubmit="return confirm('Remove this team member?')">
                                    @csrf @method('DELETE')
                                    <button class="ms-4 text-red-600 font-semibold" type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td class="p-8 text-center text-gray-500" colspan="5">No team members yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
