@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">REGISTER</h2>
        <form action="/" method="get">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama:</label>
                <input type="text" id="name" name="name" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" class="border rounded w-full py-2 px-3" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded w-full">Register</button>
        </form>
    </div>
@endsection
