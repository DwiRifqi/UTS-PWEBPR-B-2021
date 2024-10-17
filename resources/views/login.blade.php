@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Login</h1>

    <form action="{{ url('/contact') }}" method="GET" class="max-w-md bg-white p-6 rounded shadow-md">
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required class="mt-1 p-2 w-full border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password:</label>
            <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border border-gray-300 rounded">
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Login
        </button>
    </form>
@endsection
