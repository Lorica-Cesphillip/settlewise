<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="w-[452px] h-[69px] left-[75px] top-0 absolute text-black text-[32px] font-bold  leading-[46.40px]">
        Main Menu</div>
    <div class="w-[50px] h-[50px] left-0 top-[9px] absolute flex-col justify-start items-start inline-flex"></div>
    </div>
    <div class="w-[527px] left-[1329px] top-[103px] absolute">
        <div class="w-[452px] h-[69px] left-[75px] top-0 absolute text-right text-black text-2xl font-normal  leading-[34.80px]"
             x-data = "appFooterComponent()"
             x-init = "init()"
        >
            Today is: <span x-text = "getTime()"></span>
        </div>
        <div class="w-[50px] h-[50px] left-0 top-[9px] absolute flex-col justify-start items-start inline-flex"></div>
    </div>
    <div class="w-[450px] h-[400px] left-[372px] top-[231px] absolute">
        <div class="w-[450px] h-[400px] left-0 top-0 absolute bg-white rounded-xl shadow border border-black"></div>
        <div
            class="w-[272px] h-[23px] left-[136px] top-[172px] absolute text-black text-[13px] font-normal  leading-[16.90px]">
            -</div>
        <div
            class="w-[272px] h-[23px] left-[136px] top-[149px] absolute text-black text-[13px] font-normal  leading-[16.90px]">
            All APHSO Employees</div>
        <div
            class="w-[272px] h-[23px] left-[136px] top-[126px] absolute text-black text-[13px] font-normal  leading-[16.90px]">
            Office of the Sangguniang Bayan</div>
        <div
            class="w-[272px] h-[23px] left-[136px] top-[103px] absolute text-black text-[13px] font-normal  leading-[16.90px]">
            May 27, 2024, 1:00 pm</div>
        <div
            class="w-[272px] h-[23px] left-[136px] top-[80px] absolute text-black text-[13px] font-normal  leading-[16.90px]">
            PGA Annual Meeting</div>
        <div
            class="w-[100px] h-[23px] left-[36px] top-[172px] absolute text-black text-[13px] font-bold  leading-[16.90px]">
            NOTES:</div>
        <div
            class="w-[100px] h-[23px] left-[36px] top-[149px] absolute text-black text-[13px] font-bold  leading-[16.90px]">
            WHO:</div>
        <div
            class="w-[100px] h-[23px] left-[36px] top-[341px] absolute text-black text-[13px] font-bold  leading-[16.90px]">
            PROOF:</div>
        <div
            class="w-[100px] h-[23px] left-[36px] top-[126px] absolute text-black text-[13px] font-bold  leading-[16.90px]">
            WHERE:</div>
        <div
            class="w-[100px] h-[23px] left-[36px] top-[103px] absolute text-black text-[13px] font-bold  leading-[16.90px]">
            WHEN:</div>
        <div
            class="w-[285px] h-[42px] left-[83px] top-[23px] absolute text-center text-black text-2xl font-bold  leading-[31.20px]">
            ANNOUNCEMENTS</div>
        <div
            class="w-[100px] h-[23px] left-[36px] top-[80px] absolute text-black text-[13px] font-bold  leading-[16.90px]">
            WHAT: </div>
        <div
            class="w-[227px] h-9 px-4 py-2 left-[136px] top-[332px] absolute bg-[#211c6a] rounded-lg flex-col justify-center items-center gap-2.5 inline-flex">
            <div class="justify-center items-center gap-2 inline-flex">
                <div class="text-center text-white text-sm font-semibold  leading-tight">VIEW DOCUMENT
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-[285px] h-[42px] left-[372px] top-[653px] absolute text-black text-2xl font-bold  leading-[31.20px]">
        OTHER LINKS:</div>
    <div class="w-[1000px] h-[533px] left-[856px] top-[231px] absolute">
        <div class="w-[1000px] h-[533px] left-0 top-0 absolute bg-white rounded-xl shadow border border-black"></div>
        <div
            class="w-[336px] h-[42px] left-[332px] top-[23px] absolute text-center text-black text-2xl font-bold  leading-[31.20px]">
            INCOMING DOCUMENTS</div>
        <div class="w-[940px] h-[339px] left-[41px] top-[92px] absolute">
            <div class="left-[350px] top-[368px] absolute flex-col justify-start items-start inline-flex">
                <div class="px-4 py-2 bg-[#211c6a] rounded-lg flex-col justify-center items-center gap-2.5 flex">
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-white text-sm font-semibold  leading-tight">VIEW
                            INCOMING DOCUMENTS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-[1000px] h-[150px] left-[856px] top-[819px] absolute">
        <div class="w-[1000px] h-[150px] left-0 top-0 absolute bg-white rounded-xl shadow border border-black"></div>
        <div class="w-[130px] h-[68px] left-[697px] top-[56px] absolute text-center text-black text-5xl font-bold ">38</div>
        <div class="w-[130px] h-[68px] left-[311px] top-[56px] absolute text-center text-black text-5xl font-bold ">15</div>
        <div class="w-[130px] h-[68px] left-[504px] top-[56px] absolute text-center text-black text-5xl font-bold ">4</div>
        <div class="w-[130px] h-[18px] left-[697px] top-[26px] absolute text-center text-black text-base font-normal  underline">Pending Docs</div>
        <div class="w-[130px] h-[18px] left-[504px] top-[26px] absolute text-center text-black text-base font-normal  underline">Rejected Docs</div>
        <div class="w-[130px] h-[18px] left-[311px] top-[26px] absolute text-center text-black text-base font-normal  underline">Approved Docs</div>
        <div class="w-[130px] h-[68px] left-[120px] top-[56px] absolute text-center text-black text-5xl font-bold ">21</div>
        <div class="w-[130px] h-[18px] left-[120px] top-[26px] absolute text-center text-black text-base font-normal  underline">Active Users</div>
    </div>
    <div
        class="w-[552px] h-[46px] left-[370px] top-[1017px] absolute text-black text-base font-normal  leading-normal">
        If you have suggestions to improve this system, please send a feedback.</div>
    <div
        class="w-[552px] h-[46px] left-[1304px] top-[1017px] absolute text-right text-black text-[11px] font-normal  leading-none">
        Project Created by the SettleWise Team, as a requirement for the Capstone Project at Bicol University.</div>
    <div class="left-[962px] top-[1022px] absolute flex-col justify-start items-start inline-flex">
        <div class="px-4 py-2 bg-[#211c6a] rounded-lg flex-col justify-center items-center gap-2.5 flex">
            <div class="justify-center items-center gap-2 inline-flex">
                <div class="text-center text-white text-sm font-semibold  leading-tight">SEND FEEDBACK
                </div>
            </div>
        </div>
    </div>
    <div class="w-[450px] h-24 left-[372px] top-[703px] absolute">
        <div class="w-[450px] h-24 left-0 top-0 absolute bg-white rounded-xl shadow border border-black"></div>
        <img class="w-[50px] h-[50px] left-[377px] top-[26px] absolute" src="https://via.placeholder.com/50x50" />
        <div
            class="w-[356px] h-[30px] left-[21px] top-[20px] absolute text-black text-[15px] font-semibold  leading-tight">
            Provincial Government of Albay</div>
        <a href = "albay.gov.ph" class="w-[311px] h-[26px] left-[21px] top-[48px] absolute text-black text-[11px] font-normal  leading-[14.30px]"> albay.gov.ph</a>
    </div>
    <div class="w-[450px] h-24 left-[372px] top-[810px] absolute">
        <div class="w-[450px] h-24 left-0 top-0 absolute bg-white rounded-xl shadow border border-black"></div>
        <div
            class="w-[356px] h-[26px] left-[21px] top-[22px] absolute text-black text-[15px] font-semibold  leading-tight">
            Provincial Human Resource Management Office</div>
        <a href = "albay.gov.ph/provincial-human-resource-management-office/" class="w-[353px] h-[26px] left-[21px] top-[48px] absolute text-black text-[11px] font-normal  leading-[14.30px]">
            albay.gov.ph/provincial-human-resource-management-office/</a>
        <img class="w-[50px] h-[50px] left-[377px] top-[22px] absolute" src="https://via.placeholder.com/50x50" />
    </div>
    <div class="w-[450px] h-24 left-[372px] top-[917px] absolute">
        <div class="w-[450px] h-24 left-0 top-0 absolute bg-white rounded-xl shadow border border-black"></div>
        <img class="w-[50px] h-[50px] left-[377px] top-[26px] absolute" src="https://via.placeholder.com/50x50" />
        <div class="w-[356px] h-[26px] left-[21px] top-[22px] absolute text-black text-[15px] font-semibold  leading-tight">
            Albay Local Government Unit</div>
        <a href = "https://lgu201.dilg.gov.ph/view.php?r=05&p=005&m=" class="w-[356px] h-[26px] left-[21px] top-[48px] absolute text-black text-[11px] font-normal  leading-[14.30px]"> https://lgu201.dilg.gov.ph/view.php?r=05&p=005&m=</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/dashboard.blade.php ENDPATH**/ ?>