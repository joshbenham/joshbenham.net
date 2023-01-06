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
    <header class="sm:flex items-center justify-between mt-4 sm:mt-8 text-center sm:text-left">
        <a href="/" class="text-fuchsia-800 inline-flex font-bold text-xl outline-none hover:text-slate-500 focus:text-slate-500 mb-4 sm:mb-0 ">
            joshbenham
        </a>

        <div class="space-x-4 sm:space-x-8 flex justify-evenly sm:block">
            <a href="/" class="{{ request()->routeIs('home') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">About</a>
            <a href="/resume" class="{{ request()->routeIs('resume') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Resume</a>
            <a href="/uses" class="{{ request()->routeIs('uses') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Uses</a>
            <a href="/goals" class="{{ request()->routeIs('goals') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Goals</a>
            <a href="/contact" class="{{ request()->routeIs('contact') ? 'text-fuchsia-800' : 'text-slate-500' }} inline-flex font-bold outline-none hover:text-fuchsia-800 focus:text-fuchsia-800">Contact</a>
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
