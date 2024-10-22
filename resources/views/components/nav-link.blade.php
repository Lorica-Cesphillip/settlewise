@props(['active', 'icons' => '', 'navpage' => '', 'badge' => ''])

@php
    $sidebarBg = '#94D0F8';  // Default background color
    $activeBg = '#fff6e9';   // Active background color
    $hoverBg = '#dcdcdc';    // Hover background color
@endphp

<a {{ $attributes->merge([
    'class' => 'w-[300px] h-11 px-4 py-4 rounded justify-start items-center gap-1 inline-flex font-semibold text-[#200e3a] hover:bg-[#fff6e9]',
    'style' => $active ? "background-color: $activeBg;" : "background-color: $sidebarBg;",
]) }}>
    <div class="py-3 grow shrink basis-0 justify-start items-start gap-3 flex">
        <div class="w-5 h-5">{{ $icons }}</div>
        <div class="grow shrink basis-0 text-sm leading-tight">{{ $navpage }}</div>
        @if($badge)
        <div class="px-2 bg-[#eaeaea] rounded-[10px] inline-flex">
            <div class="text-xs font-medium">{{ $badge }}</div>
        </div>
        @endif
    </div>
</a>
