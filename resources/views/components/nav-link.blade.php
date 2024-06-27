@props(['name', 'link' => '/', 'active' => false])


<x-link-field class="py-2 mt-1 text-sm font-bold {{ $active ? 'bg-black/25 text-white' : '' }}">
    <a class="flex items-center w-full h-full gap-x-1" href={{ $link }}>
        <img src="{{ Vite::asset('resources/images/'.$name.'.svg') }}" class="px-2">
        {{ $name }}
     </a>
</x-link-field>