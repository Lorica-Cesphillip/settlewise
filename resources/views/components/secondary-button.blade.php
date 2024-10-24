@props(['name' => 'button', 'icon' => ''])

<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-black border border-gray-300 rounded-md tracking-widest shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    <div class = "justify-center items-center gap-2 inline-flex">
        <div class = "relative">{{$icon}}</div>
        <div class = "font-semibold text-white">{{$name}}</div>
    </div>
</button>
