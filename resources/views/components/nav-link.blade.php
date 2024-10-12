@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
<!--<div class="self-stretch px-4 py-3 rounded justify-start items-center gap-1 inline-flex">
    <div class="grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
        <div class="w-5 h-5 relative"></div>
        <div class="grow shrink basis-0 text-[#200e3a] text-sm font-normal font-['Inter'] leading-tight">Incoming Documents</div>
    </div>
    <div class="px-2 bg-[#bbe2ec] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
        <div class="justify-center items-center gap-0.5 inline-flex">
            <div class="text-center text-[#200e3a] text-xs font-medium font-['Inter'] leading-[17.40px]">5</div>
        </div>
    </div>
</div>-->
