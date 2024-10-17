@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="flex justify-center text-3xl font-bold">Contact List</h1>
    <div class="w-screen max-w-full p-2">
        <div class="flex items-center justify-center">
            <table class="bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2 text-center border border-gray-300">Name</th>
                        <th class="px-4 py-2 text-center border border-gray-300">Email</th>
                        <th class="px-4 py-2 text-center border border-gray-300">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td class="text-center border border-gray-300 px-4 py-2">{{ $contact['name'] }}</td>
                            <td class="text-center border border-gray-300 px-4 py-2">{{ $contact['email'] }}</td>
                            <td class="text-center border border-gray-300 px-4 py-2">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
