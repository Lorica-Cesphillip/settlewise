@props(['active'])

@php
$classes = ($active ?? false)
            ? 'grow shrink basis-0 text-[#200e3a] text-sm font-normal leading-tight'
            : 'grow shrink basis-0 text-[#200e3a] text-sm font-normal leading-tight';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
