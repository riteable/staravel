@props([
    'padding' => 6
])

@php
    $attributes = $attributes->merge(['class' => "py-{$padding}"]);
@endphp

<div {{ $attributes->merge(['class' => 'container']) }}>
    {{ $slot }}
</div>
