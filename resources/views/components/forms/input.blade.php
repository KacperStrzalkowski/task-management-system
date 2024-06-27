@props(['label', 'name', 'type', 'placeholder'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'px-5 py-1 w-1/3 text-start border border-black rounded-md mb-3',
        'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}/>
</x-forms.field>