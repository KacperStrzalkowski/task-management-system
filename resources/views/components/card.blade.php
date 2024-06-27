@props(['size' => 'base', 'title'])
@php
    $classes = "flex flex-col px-3 py-2 text-black bg-white rounded-xl flex-grow-1 hover:scale-[1.01] transition-transform delay-100 ";

    if($size == 'large'){
        $classes .= "min-w-4xl w-4xl basis-3/5";
    }
    else{
        $classes .= "min-w-xl w-xl basis-1/3";
    }
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    <h1 class="text-2xl font-bold">{{ $title }}</h1>
    <x-divider />
    <div>
        {{ $slot }}
    </div>
</div>