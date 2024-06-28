@props(['title'])

<div class="flex flex-col w-3/12 px-2 py-3 rounded-md bg-nav font-poppins transition-transform cursor-pointer delay-100 hover:scale-[101%]">
    <h1 class="text-lg font-bold text-white/90">{{ $title }}</h1>
    <x-divider />
    <ul class="pl-6 list-square text-white/60">
        {{ $slot }}
    </ul>
</div>