@props(['field', 'bag'])

<div class="form-input-hint">
    @if (empty($bag))
        {{ $errors->first($field) }}
    @else
        {{ $errors->{$bag}->first($field) }}
    @endif
</div>
