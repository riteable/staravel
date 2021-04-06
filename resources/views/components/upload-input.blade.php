@props([
    'id',
    'name',
    'text' => __('Click here or drag & drop a file.'),
    'accept' => null,
    'model' => null
])

<div x-data="components.uploadInput()">
    <div
        @click="browse('{{ $id }}')"
        {{ $attributes->merge(['class' => 'upload is-large']) }}
    >
        <div>
            {{ $text }}
        </div>

        <x-form.input
            id="{{ $id }}"
            type="file"
            name="{{ $name }}"
            class="is-hidden"
            accept="{{ $accept }}"
            @change="{{ $model }} = Array.from($event.target.files)"
        />
    </div>
</div>
