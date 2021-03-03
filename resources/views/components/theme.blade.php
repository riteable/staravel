@props(['default', 'preferred'])

@php
    $theme = $default;

    if ($preferred && $theme !== $preferred) {
        $theme = $preferred;
    }
@endphp

<link rel="stylesheet" href="{{ $theme }}" {{ $attributes }}>
