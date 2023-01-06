<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <livewire:styles>
    </head>

    <body class="flex flex-col max-w-5xl min-h-screen px-4 mx-auto font-sans antialiased">
        <header class="flex items-center justify-between mt-8">
            <a href="/" class="text-fuchsia-800 inline-flex font-bold text-xl outline-none hover:text-slate-500 focus:text-slate-500">
                joshbenham
            </a>

            <div class="space-x-8">
                @include('layouts.navigation')
            </div>
        </header>
        <main class="flex-grow pb-16">
            @if (isset($header))
                <h1 class="my-8 text-4xl font-bold tracking-tighter md:leading-tight md:text-5xl md:w-8/12 text-slate-900">
                    {{ $header }}
                </h1>
            @endif

            {{ $slot }}
        </main>

        <livewire:scripts>
    </body>
</html>
