@props([
    'name' => null,
    'size' => 16
])

@php
    $attributes = $attributes->merge(['class' => "icon-{$size}"])
@endphp

<span {{ $attributes->merge(['class' => 'icon']) }}>
    @svg($name)
</span>
