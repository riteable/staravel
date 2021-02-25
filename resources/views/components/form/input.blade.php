@props([
    'hasErrors' => false,
    'disabled' => false
])

@if ($hasErrors)
    @php $attributes = $attributes->merge(['class' => 'is-danger']) @endphp
@endif

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'input']) }}>
