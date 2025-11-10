<aside class="fixed top-0 left-0 z-40 w-64 h-screen bg-blue-900 text-white">
    <div class="flex items-center justify-center h-20 bg-orange-500">
        <div class="flex items-center">
            <span class="pl-2 text-xl font-semibold ">Sistem Informasi Perpustakaan</span>
        </div>
    </div>

    <nav class="mt-4">

        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center px-6 py-4 text-lg font-semibold
                  {{ Route::is('admin.dashboard*') ? 'bg-orange-500' : 'hover:bg-orange-500 hover:bg-opacity-75' }}">
            Dashboard
        </a>
<br>

        <a href="{{ route('admin.user.index') }}"
           class="flex items-center px-6 py-4 text-lg font-semibold
                  {{ Route::is('admin.user.*') ? 'bg-orange-500' : 'hover:bg-orange-500 hover:bg-opacity-75' }}">
            User
        </a>
<br>
        <a href="{{ route('admin.buku.index') }}"
           class="flex items-center px-6 py-4 text-lg font-semibold
                  {{ Route::is('admin.buku.*') ? 'bg-orange-500' : 'hover:bg-orange-500 hover:bg-opacity-75' }}">
            Data Buku
        </a>

    </nav>
    </aside>
