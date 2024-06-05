<!-- @props(['name']) -->

@php
$classes = 'py-2 px-4 bg-blue-400 shadow uppercase duration-500 text-white hover:bg-blue-500 '
@endphp

<button {{ $attributes->class([$classes])}}>
    {{slot}}
</button>