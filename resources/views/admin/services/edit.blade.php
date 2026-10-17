@extends('core::layouts.app')

@section('title', 'Edit service - Admin')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit service</h1>
        <form method="POST" action="{{ route('admin.services.update', $service) }}">
            @csrf
            @method('PUT')
            @include('admin.services._form')
        </form>
    </div>
</div>
@endsection
