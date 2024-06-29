<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <nav class="flex justify-between min-w-full bg-nav px-36 py-6 text-white/75 items-center">
        <div>
            <h1 class="font-bold text-lg">Team Management System<h1>
        </div>
        <div>
            <x-button-link href="/register">Sign Up</x-button-link>
            <x-button-link href="/login">Sign In</x-button-link>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>