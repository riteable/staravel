@props(['field'])

@error($field)
    <div class="form-input-hint">
        {{ $message }}
    </div>
@enderror
