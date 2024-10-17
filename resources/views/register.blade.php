@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="max-w-md bg-white p-6 rounded shadow-md">
            <h1 class="text-3xl font-bold mb-6 text-center">Register</h1>

            <form action="{{ url('/login') }}" method="GET" class="w-full">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required class="mt-1 p-2 w-full border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required class="mt-1 p-2 w-full border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border border-gray-300 rounded">
                </div>
                <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Register
                </button>
            </form>
        </div>
    </div>
@endsection
