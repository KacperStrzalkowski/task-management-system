
<x-link-field class="gap-x-3 pl-3 py-1">
    <div class="px-2 py-1 text-2xs font-bold border border-white/15 rounded-lg bg-white/10">{{ substr($slot, 0, 1) }}</div>                
    <a href="#" class="font-bold text-sm">{{ $slot }}</a>
</x-link-field>