@props(['active', 'icons' => '', 'navpage' => '', 'badge' => ''])

@php
$classes = ($active ?? false)
            ? 'px-5 py-3 rounded justify-start items-center gap-1 inline-flex grow shrink basis-0 text-[#200e3a] text-sm font-normal leading-tight text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out gap-3'
            : 'px-5 py-3 rounded justify-start bg-[#fff6e9] items-center gap-1 inline-flex grow shrink basis-0 text-[#200e3a] text-sm font-normal leading-tight text-gray-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out gap-3';
@endphp

<a class = "{{ $attributes->merge(['class' => $classes]) }}">
    <div class="py-3 grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
        <div class="w-5 h-5 relative">{{$icons}}</div>
        <div class="grow shrink basis-0 text-[#200e3a] text-sm font-medium leading-tight">{{$navpage}}</div>
        <div class="px-2 bg-[#eaeaea] rounded-[10px] flex-col justify-end items-center gap-2 right-0 inline-flex">
            <div class="justify-center items-center gap-0.5 inline-flex">
                <div class="text-center text-[#200e3a] text-xs font-medium">{{$badge}}</div>
            </div>
        </div>
    </div>
</a>
