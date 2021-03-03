@props([
    'current' => 'theme-light.css',
    'alt' => 'theme-dark.css'
])

@php
    $preferred = request()->cookie('preferred-theme');
    $current = manifest_get($current, 'assets-manifest.json')->toHtml();
    $alt = manifest_get($alt, 'assets-manifest.json')->toHtml();

    if ($preferred && $current !== $preferred) {
        [$current, $alt] = [$alt, $current];
    }
@endphp

<link rel="stylesheet" href="{{ $current }}" id="stylesheet-theme" data-alt="{{ $alt }}">
