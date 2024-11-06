@props(['name' => '', 'icon' => ''])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'p-4 bg-blue-500 rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-900 focus:bg-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    <div class = "justify-center items-center gap-2 inline-flex">
        <div class = "relative">{{$icon}}</div>
        <div class = "font-semibold text-white">{{$name}}</div>
    </div>
</button>
