@props(['type'])

@php
    $color = match($type) {
        'success' => 'bg-green-100 text-green-700',
        'error' => 'bg-red-100 text-red-700',
        default => 'bg-blue-100 text-blue-700',
    };
@endphp

<div class="m-2 p-4 rounded text-sm {{ $color }}">
    type: {{ $type }}
    <i class="fa-solid fa-dog"></i>
</div>
