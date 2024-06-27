<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body class="flex h-screen bg-black/10 gap-x-6 font-poppins">
    <nav class="flex flex-col justify-between flex-shrink-0 min-h-screen py-3 pl-3 pr-6 rounded-br-lg bg-nav w-80 max-w-80 font-poppins text-white/70">
        <div >
            @auth 
            <div class="mt-2 ml-2">
                <img src="https://placehold.co/48">
            </div>
            <div class="flex flex-col mt-8">

            <x-nav-link name="Dashboard" link="/" :active="request()->is('/')" />
            <x-nav-link name="Teams" link="/teams" :active="request()->is('teams')" />
            <x-nav-link name="Projects" link="/" :active="request()->is('projects')" />
            <x-nav-link name="Calendar" link="/" :active="request()->is('calendar')" />
            <x-nav-link name="Reports" link="/" :active="request()->is('reports')" />
            
            </div>
            <div class="flex flex-col mt-12 gap-y-1">
                <h6 class="pl-3 mb-2 text-xs">Your teams</h6>

                <x-team-link>Team 1</x-team-link>
                <x-team-link>Team 1</x-team-link>
                <x-team-link>Deam 1</x-team-link>

            </div>
        </div>

        <div class="py-3 pl-3">
            <x-forms.form method="POST" action="/logout">
                @method('delete')
                <x-forms.button type="submit">Logout</x-forms.button>

            </x-forms.form>
        </div>
        @endauth
    </nav>
    {{ $slot }}
</body>
</html>