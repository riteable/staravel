@props([
    'context' => null
])

@if ($context === 'list')
    @php
        $attributes = $attributes->merge(['class' => 'is-full is-half is-one-third is-one-quarter'])
    @endphp
@endif

<div {{ $attributes->merge(['class' => 'column']) }}>
    {{ $slot }}
</div>
