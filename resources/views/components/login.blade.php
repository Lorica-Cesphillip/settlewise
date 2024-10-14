<img src = {{URL::asset('images/capitol.jpg')}} alt = "Albay Provincial Capitol" class = "w-full h-full absolute">
<div class="relative">
    <div class="w-[1200px] h-[650px] left-[360px] top-[130px] absolute">
        <div class="w-[1200px] h-[650px] left-0 top-0 absolute bg-white"></div>
        <div class="w-[650px] h-[0px] left-[600px] top-0 absolute origin-top-left rotate-90 border border-[#d0d0d0]"></div>
    </div>
    <div class="h-[383px] left-[469px] top-[250px] absolute">
        @include('layouts.mission_vision')
    </div>
    <div class="w-[523px] h-[427px] left-[995px] top-[250px] absolute">
        {{$slot}}
    </div>
</div>
