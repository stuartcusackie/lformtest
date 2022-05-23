<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}">
        <script src="{{ mix('js/site.js') }}" defer></script>
        @livewireStyles
    </head>
    <body id="body" class='font-sans antialiased bg-white text-gray-600 break-words xl:text-lg 2xl:text-xl overflow-x-hidden'>
        <main class="">
            <livewire:form handle="test_form" />
        </main>
        @livewireScripts
    </body>
</html>
