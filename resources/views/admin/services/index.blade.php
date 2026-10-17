@extends('core::layouts.app')

@section('title', 'Services - Admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Services</h1>
                <a href="{{ route('admin.dashboard') }}" class="text-indigo-600">Back to admin</a>
            </div>
            <a href="{{ route('admin.services.create') }}" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-semibold">New service</a>
        </div>

        @if (session('status'))
            <div class="mb-6 rounded-xl bg-emerald-50 text-emerald-800 p-4" role="status">{{ session('status') }}</div>
        @endif

        <div class="bg-white rounded-2xl shadow overflow-x-auto">
            <table class="w-full text-left">
                <thead class="text-sm text-gray-500 border-b">
                    <tr><th class="p-4">Title</th><th class="p-4">Price</th><th class="p-4">Order</th><th class="p-4">Status</th><th class="p-4"></th></tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr class="border-b last:border-0">
                            <td class="p-4 font-semibold">{{ $service->title }}</td>
                            <td class="p-4">{{ $service->price ? '$'.number_format($service->price, 2).' '.$service->price_period : '—' }}</td>
                            <td class="p-4">{{ $service->sort_order }}</td>
                            <td class="p-4">{{ $service->is_active ? 'Active' : 'Hidden' }}</td>
                            <td class="p-4 text-right whitespace-nowrap">
                                <a class="text-indigo-600 font-semibold" href="{{ route('admin.services.edit', $service) }}">Edit</a>
                                <form class="inline" method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Delete this service?')">
                                    @csrf @method('DELETE')
                                    <button class="ms-4 text-red-600 font-semibold" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td class="p-8 text-center text-gray-500" colspan="5">No services yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
