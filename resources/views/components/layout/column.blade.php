@props([
    'context' => null
])

@if ($context === 'list')
    @php
        $attributes = $attributes->merge(['class' => 'col-xs-12 col-sm-6 col-md-4 col-3'])
    @endphp
@endif

<div {{ $attributes->merge(['class' => 'column']) }}>
    {{ $slot }}
</div>
