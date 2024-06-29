@props(['size' => 'base'])
@php
    $classes = "flex flex-col px-3 py-2 text-black bg-white rounded-xl flex-grow-1 ";

    if($size == 'large'){
        $classes .= "min-w-3/5 w-3/5 hover:scale-[1.01] transition-transform delay-100";
    }
    else if($size == 'base'){
        $classes .= "min-w-1/3 w-1/3 hover:scale-[1.01] transition-transform delay-100";
    }
    else if($size == 'full'){
        $classes .= "min-w-full w-full min-h-full";
    }
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    <h1 class="flex justify-between text-2xl font-bold items-center">{{ $title }}</h1>
    <x-divider />
    <div class="{{ $size == 'full' ? 'flex flex-row gap-x-3' : '' }}">
        {{ $content }}
    </div>
</div>