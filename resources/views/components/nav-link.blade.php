@props(['name', 'link' => '/'])


<x-link-field class="py-2 font-bold text-sm mt-1">
    <a class="flex items-center w-full h-full gap-x-1" href={{ $link }}>
        <img src="{{ Vite::asset('resources/images/'.$name.'.svg') }}" class="px-2">
        {{ $name }}
     </a>
    </x-link-field>