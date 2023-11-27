<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @auth
        <div class="flex relative w-screen h-screen">
            <x-menu-sidebar/>
            <div class="w-full">
                <x-characters/>
                <x-inventory/>
                <x-combat-view/>
                <x-dungeons/>
                <x-task-list/>
                <x-upgrades/>
                <x-coming-soon/>
                <x-achievements/>
                <x-settings/>
            </div>
        </div>
        @endauth
        <script src="{{ url('/js/main.js') }}"></script>
        <script src="{{ url('/js/character.js') }}"></script>
        <script src="{{ url('/js/enemy.js') }}"></script>
        <script src="{{ url('/js/experienceController.js') }}"></script>
        <script src="{{ url('/js/combatController.js') }}"></script>
    </body>
</html>