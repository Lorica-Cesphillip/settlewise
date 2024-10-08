<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome - SettleWise</title>

        <link rel="stylesheet" href="./css/app.css">

        @vite('resources/css/app.css')
    </head>
    <body>
        <img src = {{URL::asset('images/capitol.jpg')}} alt = "Albay Provincial Capitol" class = "w-full h-full absolute">
        <div class="px-[360px] py-[50px] justify-center items-center inline-flex">
            <div class="w-[1200px] h-[800px] relative">
                <div class="w-[1200px] h-[800px] left-0 top-0 absolute bg-white"></div>
                    <div class="w-[1005px] h-[699px] left-[97px] top-[51px] absolute">
                        <div class="w-[967.57px] h-[37px] left-[16px] top-[339px] absolute text-center text-black text-xl font-bold leading-normal">Mission</div>
                        <div class="w-[965.14px] left-[19px] top-[392px] absolute text-center text-black text-base font-normal leading-[25px]">APHSO commits to archieve an inclusive and sustainable development of communicaties/ settlements by planning, implementing and supervising the Human Settlement (HS) program in Albay upholding ethics of governance - transparency, accountability, participation, non-dicriminition, responsiveness and poverty allevation. <br/><br/>“People’s welfare is Our primary concern.”</div>
                        <div class="w-[968px] h-[23px] left-[21px] top-[552px] absolute text-center text-black text-xl font-bold leading-normal">Vision</div>
                        <div class="w-[968px] h-[23px] left-[21px] top-[586px] absolute text-center text-black text-base font-normal leading-normal">Humanized Settlement Communication</div>
                        <div class="w-[1005px] h-[57px] left-0 top-[256px] absolute text-center text-black text-5xl font-bold leading-[30px]">DOCUMENT MANAGEMENT SYSTEM</div>
                        <div class="w-[1005px] h-[30px] left-0 top-[226px] absolute text-center text-black text-2xl font-normal leading-[30px]">Welcome to the Albay Provincial Human Settlement Office</div>
                        <div class="h-14 left-[414px] top-[643px] absolute flex-col justify-start items-start inline-flex">
                        <div class="px-6 py-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                        <a href = "{{route('login')}}" class="text-center text-white text-base font-semibold leading-normal">Let’s Get Started</a>
                        </div>
                    </div>
                    </div>
                    <img class="w-[200px] h-[200px] left-[405px] top-0 absolute" src="{{URL::asset('images/pga-logo.png')}}" />
                </div>
            </div>
        </div>
    </body>
</html>
