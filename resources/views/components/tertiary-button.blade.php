@props(['name' => 'button', 'icon' => ''])

<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center p-4 bg-white border border-[#04326B] rounded-md tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    <div class = "justify-center items-center gap-2 inline-flex">
        <div class = "relative">{{$icon}}</div>
        <div class = "font-semibold text-[#04326B]">{{$name}}</div>
    </div>
</button>
