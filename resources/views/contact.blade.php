@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Contact List</h1>

    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/3 px-4 py-2">Name</th>
                <th class="w-1/3 px-4 py-2">Email</th>
                <th class="w-1/3 px-4 py-2">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contacts)
                <tr>
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td class="center">{{ $contacts['name'] }}</td>
                    <td class="center">{{ $contacts['email'] }}</td>
                    <td class="center">{{ $contacts['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
