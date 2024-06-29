@props(['label', 'name'])

<div class="mt-3 flex flex-col basis-1">
@if ($label)
<x-forms.label :$name :$label />
@endif

<div>
    {{ $slot }}

    <x-forms.error :error="$errors->first($name)" />
</div>

</div>