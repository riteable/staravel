@props(['light', 'dark', 'current'])

<link rel="stylesheet" href="{{ ${$current} }}" data-light="{{ $light }}" data-dark="{{ $dark }}" {{ $attributes }}>
