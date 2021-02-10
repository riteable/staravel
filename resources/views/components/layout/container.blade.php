@props([
    'size' => 'xl',
    'padding' => '5'
])

@php
    $attributes = $attributes->merge(['class' => "grid-{$size} py-{$padding}"])
@endphp

<div {{ $attributes->merge(['class' => 'container']) }}>
    {{ $slot }}
</div>
