@props(['name', 'link' => '/'])


<x-link-field class="gap-x-1 py-2 font-bold text-sm mt-1">
    <img src="{{ Vite::asset('resources/images/'.$name.'.svg') }}" class="px-2">
    <a href={{ $link }}>
        {{ $name }}
     </a>
    </x-link-field>