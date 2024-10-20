@props(['active', 'icons' => '', 'navpage' => '', 'badge' => ''])

@php
    $sidebarBg = '#a8d0f0'; // Inactive link background color (matching the sidebar)
    $activeBg = '#fff6e9';  // Active background color when clicked
    $hoverBg = '#dcdcdc';   // Hover background color

    $classes =
        ($active ?? false)
            ? 'w-[300px] h-11 px-4 py-4 rounded justify-start items-center gap-1 inline-flex bg-[' . $activeBg . '] text-[#200e3a] font-semibold'
            : 'w-[300px] h-11 px-4 py-4 rounded justify-start items-center gap-1 inline-flex bg-[' . $sidebarBg . '] hover:bg-[' . $hoverBg .']';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <div class="py-3 grow shrink basis-0 h-9 justify-start items-start gap-3 flex">
        <div class="w-5 h-5 relative">{{ $icons }}</div>
        <div class="grow shrink basis-0 text-sm leading-tight">{{ $navpage }}</div>
        @if($badge)
        <div class="px-2 bg-[#eaeaea] rounded-[10px] inline-flex">
            <div class="text-xs font-medium">{{ $badge }}</div>
        </div>
        @endif
    </div>
</a>
