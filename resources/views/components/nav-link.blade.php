@props(['name', 'link' => '/'])

<div class="flex gap-x-1 items-center py-2 rounded-lg font-bold text-sm mt-1  hover:bg-black/25  hover:text-white">
    <img src="{{ Vite::asset('resources/images/'.$name.'.svg') }}" class="px-2">
    <a href={{ $link }}>
        {{ $name }}
     </a>
</div>