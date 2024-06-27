<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body class="h-screen">
    <nav class="bg-nav min-h-screen max-w-80 flex flex-col justify-between pl-3 pr-6 py-3 rounded-br-lg font-poppins text-white/70">
        <div >
            @auth 
            <div class="mt-2 ml-2">
                <img src="https://placehold.co/48">
            </div>
            <div class="flex flex-col mt-8">

            <x-nav-link name="Dashboard" link="/" />
            <x-nav-link name="Teams" link="/" />
            <x-nav-link name="Projects" link="/" />
            <x-nav-link name="Calendar" link="/" />
            <x-nav-link name="Reports" link="/" />
            
            </div>
            <div class="flex flex-col mt-12 gap-y-1">
                <h6 class="pl-3 text-xs mb-2">Your teams</h6>

                <x-team-link>Team 1</x-team-link>
                <x-team-link>Team 1</x-team-link>
                <x-team-link>Deam 1</x-team-link>

            </div>
        </div>

        <div>
            <x-nav-link name="Settings" link="/" />
        </div>
        @endauth
    </nav>
</body>
</html>