<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login - {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100">

    <div class="min-h-screen flex items-center justify-center p-4">

        <div class="flex max-w-4xl w-full bg-white shadow-2xl rounded-xl overflow-hidden">

            <div class="w-1/2 bg-blue-900 text-white p-12 flex-col justify-between hidden md:flex">
                <div>
                    <h1 class="text-3xl font-bold">Selamat Datang di SIPUSTA</h1>
                    <p class="mt-2 text-blue-200">Silakan login untuk melanjutkan ke sistem.</p>
                </div>

                <div class="flex-grow flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-48 h-48 text-blue-700 opacity-50">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18c-2.305 0-4.408.867-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>

            </div>

            <div class="w-full md:w-1/2 p-12 bg-gray-200">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Login</h1>
                <p class="text-sm text-gray-600 mb-6">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-orange-500 font-semibold hover:underline">
                        Register
                    </a>
                </p>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Username or Email
                        </label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                               class="mt-1 block w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="relative">
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                   class="mt-1 block w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-600">remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900 font-semibold hover:underline">
                                forgot password?
                            </a>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-gray-400 rounded-md shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Login
                        </button>
                    </div>

                    </form>
            </div>
        </div>

    </div>
</body>
</html>
