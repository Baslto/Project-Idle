<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Project Idle</title>
</head>
<body class="bg-[url('register-background.png')] bg-cover">
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="flex flex-col items-center justify-center rounded-2xl w-[800px] h-[500px] bg-slate-700 text-white relative">
            <h1 class="font-semibold text-3xl underline self-center">Login</h1>
            <div>
                <form action="/login" method="post" class="space-y-2">
                    @csrf
                    <div class="flex flex-col text-xl">
                        <label for="name">Benutzername:</label>
                        <input type="text" id="name" name="name" class="text-black">
                    </div>
                    <div class="flex flex-col text-xl">
                        <label for="password">Passwort:</label>
                        <input type="password" id="password" name="password" class="text-black">
                    </div>
                    <div class="absolute bottom-6 right-8">
                        <button type="submit" class="rounded-md font-semibold bg-green-500 hover:bg-green-400 cursor-pointer py-2 px-8">Login</button>
                    </div>
                </form>
                @if (session('message'))
                    <div class="text-red">{{ session('message') }}</div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>