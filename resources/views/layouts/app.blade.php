@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: false }"
    x-bind:class="{ 'dark': darkMode === true }" x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-79TJBG4Q06"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-79TJBG4Q06');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Exclusive Distributor of TICA Products and Authorized Dealer in the Philippines">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="teamasiacorporation.com">
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="@yield('meta_type')">
    <meta property="og:locale" content="en">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('meta_image')">
    <meta property="og:image:alt" content="@yield('meta_title')">
    {{-- <meta property="fb:app_id" content="487677117179781" /> --}}

    <meta name="twitter:site" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('meta_title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('meta_image')">
    {{-- <meta name="twitter:image" content="{{ asset('/Meta.png') }}"> --}}
    <meta name="twitter:card" content="summary">

    <title>{{ isset($title) ? $title : '' }}</title>

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
