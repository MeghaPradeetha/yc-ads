<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Y C Ads')</title>
        <meta name="description" content="@yield('description', 'Y C Ads is a premier advertising agency specializing in print media and promotional items to drive measurable growth.')">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-foreground bg-background">
        <div class="min-h-screen flex flex-col">
            <x-header />

            <main class="flex-grow">
                @yield('content')
            </main>

            <x-footer />
        </div>
    </body>
</html>
