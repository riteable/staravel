@props(['default', 'alt', 'preferred'])

@php
    if ($preferred && $default !== $preferred) {
        [$default, $alt] = [$alt, $default];
    }
@endphp

<link rel="stylesheet" href="{{ $default }}" id="stylesheet-theme" data-alt="{{ $alt }}">
