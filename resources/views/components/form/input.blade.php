@props([
    'hasErrors' => false,
    'disabled' => false
])

@if ($hasErrors)
    @php $attributes = $attributes->merge(['class' => 'is-error']) @endphp
@endif

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'form-input']) }}>
