@props(['type' => 'info'])

@php

    switch ($type) {
        case 'info':
            $classes = 'bg-blue-100 border-l-4 border-blue-500 text-blue-700';
            break;
        case 'danger':
            $classes = 'bg-red-100 border-l-4 border-red-500 text-red-700';
            break;
        default:
            $classes = 'bg-blue-100 border-l-4 border-blue-500 text-blue-700';
            break;
    }
@endphp


<div class="{{ $classes }} p-4" role="alert">
    <h1 class="font-bold">{{ $title }}</h1>
    {{ $slot }}
  </div>
