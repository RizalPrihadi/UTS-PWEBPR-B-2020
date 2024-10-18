@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <div class="pt-20">
        <h2 class="text-2xl text-center font-bold mb-4">List Kontak Karyawan</h2>
        <table class="table-auto w-full border-collapse border border-gray-400 mb-16">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 bg-blue-500 text-white text-center">No</th>
                    <th class="border border-gray-300 px-4 py-2 bg-blue-500 text-white">Nama Karyawan</th>
                    <th class="border border-gray-300 px-4 py-2 bg-blue-500 text-white">Email</th>
                    <th class="border border-gray-300 px-4 py-2 bg-blue-500 text-white">No. Telepon</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $contact['name'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $contact['email'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $contact['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
