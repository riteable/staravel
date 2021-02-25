@props([
    'field' => null,
    'bag' => null,
    'type' => 'is-danger'
])

@php
    $attributes = $attributes->merge(['class' => $type])
@endphp

<p {{ $attributes->merge(['class' => 'help']) }}>
    @if (empty($bag))
        {{ $errors->first($field) }}
    @else
        {{ $errors->{$bag}->first($field) }}
    @endif
</p>
