@extends('core::layouts.app')

@section('title', 'Admin - AIA Platform')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h1 class="text-3xl font-bold text-gray-900">Admin</h1>
            <p class="text-gray-600 mt-2">Manage what the public site shows.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 mb-8">
            @foreach ([['Services', $stats['services']], ['Active services', $stats['activeServices']], ['Team members', $stats['team']], ['Pricing plans', $stats['plans']], ['Blog posts', $stats['posts']]] as [$label, $value])
                <div class="bg-white rounded-2xl shadow p-6">
                    <div class="text-sm text-gray-500">{{ $label }}</div>
                    <div class="text-3xl font-bold text-gray-900">{{ $value }}</div>
                </div>
            @endforeach
        </div>

        <div class="grid gap-6 lg:grid-cols-2">
            <section class="bg-white rounded-2xl shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-900">Services</h2>
                    <a href="{{ route('admin.services.index') }}" class="text-indigo-600 font-semibold">Manage</a>
                </div>
                <ul class="divide-y">
                    @forelse ($latestServices as $service)
                        <li class="py-3 flex justify-between"><span>{{ $service->title }}</span><span class="text-sm text-gray-500">{{ $service->is_active ? 'Active' : 'Hidden' }}</span></li>
                    @empty
                        <li class="py-3 text-gray-500">No services yet.</li>
                    @endforelse
                </ul>
            </section>

            <section class="bg-white rounded-2xl shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-900">Team</h2>
                    <a href="{{ route('admin.team-members.index') }}" class="text-indigo-600 font-semibold">Manage</a>
                </div>
                <ul class="divide-y">
                    @forelse ($latestMembers as $member)
                        <li class="py-3 flex justify-between"><span>{{ $member->name }}</span><span class="text-sm text-gray-500">{{ $member->position }}</span></li>
                    @empty
                        <li class="py-3 text-gray-500">No team members yet.</li>
                    @endforelse
                </ul>
            </section>
        </div>
    </div>
</div>
@endsection
