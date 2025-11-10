{{-- Memberitahu Blade untuk menggunakan layout utama Anda --}}
@extends('layouts.LayoutAdmin')

{{-- Mengisi bagian @yield('content') di layout --}}
@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">BUKU JEMBATAN ILMU</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        {{-- CARD BUKU BARU --}}
        <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col items-center"> {{-- Tambahkan flex flex-col items-center di sini --}}
            <div class="w-full p-2 bg-blue-900 text-white text-center"> {{-- p-2 lebih kecil dari p-3 --}}
                <h2 class="text-base font-semibold">BUKU BARU</h2> {{-- text-base lebih kecil dari text-lg --}}
            </div>
            <div class="p-4 flex flex-col items-center justify-center flex-grow"> {{-- p-4 lebih kecil dari p-5, tambahkan flex-grow --}}
                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1618233304l/57816828.jpg"
                    alt="Iblis tidak Pernah Mati" class="w-32 h-48 object-contain rounded-md shadow-md mb-2">
                {{-- w-32 h-48 lebih kecil --}}
                <p class="text-gray-700 text-sm font-medium">Iblis tidak Pernah Mati</p> {{-- text-sm lebih kecil --}}
            </div>
        </div>

        {{-- CARD BEST SELLER --}}
        <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col items-center">
            <div class="w-full p-2 bg-blue-900 text-white text-center">
                <h2 class="text-base font-semibold">BEST SELLER</h2>
            </div>
            <div class="p-4 flex flex-col items-center justify-center flex-grow">
                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1618233304l/57816828.jpg"
                    alt="Iblis tidak Pernah Mati" class="w-32 h-48 object-contain rounded-md shadow-md mb-2">
                <p class="text-gray-700 text-sm font-medium">Iblis tidak Pernah Mati</p>
            </div>
        </div>

        {{-- CARD REKOMENDASI --}}
        <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col items-center">
            <div class="w-full p-2 bg-blue-900 text-white text-center">
                <h2 class="text-base font-semibold">REKOMENDASI</h2>
            </div>
            <div class="p-4 flex flex-col items-center justify-center flex-grow">
                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1618233304l/57816828.jpg"
                    alt="Iblis tidak Pernah Mati" class="w-32 h-48 object-contain rounded-md shadow-md mb-2">
                <p class="text-gray-700 text-sm font-medium">Iblis tidak Pernah Mati</p>
            </div>
        </div>
    </div>

    {{-- Bagian informasi Operasional, Lokasi, Kontak tetap sama --}}
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">

            <div class="flex items-start space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-blue-900 mt-1 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-1">Operasional Hour</h3>
                    <p class="text-gray-600">Senin - Kamis: 08:00 - 18:00 WIB</p>
                    <p class="text-gray-600">Jum'at : 13:00 - 18:00 WIB</p>
                </div>
            </div>

            <div class="flex items-start space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-blue-900 mt-1 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-1">Location</h3>
                    <p class="text-gray-600">Jln. Syiah Kuala, Aceh, Banda Aceh</p>
                </div>
            </div>

            <div class="flex items-start space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-blue-900 mt-1 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.078l-4.108-1.538a1.125 1.125 0 00-1.29.287l-2.43 2.43a1.125 1.125 0 01-1.61 0L5.13 14.12a1.125 1.125 0 010-1.61l2.43-2.43a1.125 1.125 0 00.287-1.29l-1.538-4.108A1.125 1.125 0 007.627 3.627H6.25A2.25 2.25 0 004 5.875v.875z" />
                </svg>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-1">Contact</h3>
                    <p class="text-gray-600">+62 812 3456 7890</p>
                    <p class="text-gray-600">text@test.com</p>
                </div>
            </div>

        </div>
    </div>
@endsection
