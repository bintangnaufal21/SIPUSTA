@extends('layouts.LayoutAdmin')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen User</h1>

        <a href="#" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 font-semibold shadow-md">
            + Tambah User
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100 border-b-2 border-gray-200">
                <tr>
                    <th class="p-4 text-left text-sm font-semibold text-gray-600">No</th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-600">Nama</th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-600">Email</th>
                    <th class="p-4 text-left text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="p-4 text-gray-700">{{ $loop->iteration }}</td>

                        <td class="p-4 text-gray-700">{{ $user->name }}</td>

                        <td class="p-4 text-gray-700">{{ $user->email }}</td>

                        <td class="p-4 flex space-x-2">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded-md text-sm hover:bg-yellow-600">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600">Hapus</a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4" class="p-4 text-center text-gray-500">
                            Data user belum tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
