@props(['title'])
<!DOCTYPE html>
<html 
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{ darkMode: false }"
    x-bind:class="{'dark' : darkMode === true}"
    x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TAC') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@marcreichel/alpine-typewriter/dist/alpine-typewriter.min.js" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        
        <div class="bg-gray-100 dark:bg-gray-600">
            

            <livewire:layout.navigation />
            <div class="min-h-screen">
            @yield('hero')

            <!-- Page Content -->
            <main class="max-w-[1366px] mx-auto p-6 ">
                {{ $slot }}
            </main>

            </div>
            <livewire:layout.footer-navigation />
            
        </div>
        
    </body>
</html>
