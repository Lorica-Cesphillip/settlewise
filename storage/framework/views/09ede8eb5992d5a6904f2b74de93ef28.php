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
    <?php if (isset($component)) { $__componentOriginal901ceb9e61b95c05773aa75972fcbec9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal901ceb9e61b95c05773aa75972fcbec9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title_header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title_header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('heading', null, []); ?> Main Menu <?php $__env->endSlot(); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php echo '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="icon / home-alt">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M11.9997 2.54167C10.8145 1.65278 9.18489 1.65278 7.99971 2.54167L2.27257 6.83702C1.3548 7.52535 0.855479 8.63725 0.95075 9.7805L1.47822 16.1102C1.62219 17.8378 3.06641 19.1667 4.80004 19.1667H15.1994C16.933 19.1667 18.3772 17.8378 18.5212 16.1102L19.0487 9.7805C19.1439 8.63725 18.6446 7.52535 17.7268 6.83702L11.9997 2.54167ZM8.99971 3.875C9.5923 3.43056 10.4071 3.43056 10.9997 3.875L16.7268 8.17035C17.1857 8.51452 17.4354 9.07047 17.3878 9.6421L16.8603 15.9717C16.7883 16.8356 16.0662 17.5 15.1994 17.5H12.572L12.7405 15.4787C12.8741 13.8752 11.6087 12.5 9.99971 12.5C8.39069 12.5 7.12531 13.8752 7.25893 15.4787L7.42737 17.5H4.80004C3.93323 17.5 3.21112 16.8356 3.13913 15.9717L2.61166 9.6421C2.56402 9.07047 2.81368 8.51452 3.27257 8.17035L8.99971 3.875ZM11.0796 15.3403L10.8996 17.5H9.09982L8.91984 15.3403C8.86719 14.7085 9.36575 14.1667 9.99971 14.1667C10.6337 14.1667 11.1322 14.7085 11.0796 15.3403Z" fill="black"/>
                            </g>
                            </svg>'; ?>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal901ceb9e61b95c05773aa75972fcbec9)): ?>
<?php $attributes = $__attributesOriginal901ceb9e61b95c05773aa75972fcbec9; ?>
<?php unset($__attributesOriginal901ceb9e61b95c05773aa75972fcbec9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal901ceb9e61b95c05773aa75972fcbec9)): ?>
<?php $component = $__componentOriginal901ceb9e61b95c05773aa75972fcbec9; ?>
<?php unset($__componentOriginal901ceb9e61b95c05773aa75972fcbec9); ?>
<?php endif; ?>

    <div class="w-full h-full relative flex flex-row gap-3">
        <div class="pt-2">
            <!--Announcements-->
            <div
                class="w-[480px] h-fit p-2 block justify-center items-center rounded-xl shadow border text-wrap border-black">
                <h3 class="text-2xl w-full font-bold text-center px-24 pt-4">ANNOUNCEMENTS</h3>
                <!-- Content divided into left and right columns -->
                <div class="w-full h-fit px-6 flex columns-2">
                    <div class = "pr-5 font-light">
                        <div>WHAT: </div>
                        <div>WHEN: </div>
                        <div>WHERE: </div>
                        <div>WHO: </div>
                        <div>NOTES: </div>
                    </div>
                    <div class = "font-medium">
                        <div>PGA Annual Meeting </div>
                        <div>January 6, 2024</div>
                        <div>Office of the Sangguniang Bayan</div>
                        <div>All APHSO Employees</div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</div>
                    </div>
                </div>

                <div class="w-full h-fit p-2 flex justify-center items-center py-6">
                    <a href = "#"
                        class="w-7/12 px-1 py-2 bg-[#211c6a] rounded-lg flex-col justify-center items-center gap-2.5 inline-flex">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div class="text-center text-white text-sm font-semibold leading-tight">VIEW ANNOUNCEMENT
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!--Other Links-->
            <div class = "w-fit h-fit block justify-start items-start py-4 gap-3">
                <h3 class="text-2xl w-full font-bold inline-flex">OTHER LINKS:</h3>
                <div class = "py-2">
                    <div class = "w-[480px] h-fit p-5 justify-between items-center rounded-xl shadow border text-wrap flex border-black">
                        <div class = "block">
                            <p class="text-base w-full font-bold text-left">Provincial Government of Albay</p>
                            <a href = "https://albay.gov.ph" class = "text-blue-800">albay.gov.ph</a>
                        </div>
                        <img class = "w-12 h-12 right-0" src = "<?php echo e(URL::asset('images/Parliament.jpg')); ?>" />
                    </div>
                </div>
                <div class = "py-2">
                    <div class = "w-[480px] h-fit p-5 justify-between items-center rounded-xl shadow border text-wrap flex border-black">
                        <div class = "block">
                            <p class="text-base w-full font-bold text-left">Provincial Human Resource Management Office</p>
                            <a href = "https://albay.gov.ph/provincial-human-resource-management-office/"
                                class = "text-blue-800">albay.gov.ph/provincial-human-resource-management-office/</a>
                            </div>
                        <img class = "w-12 h-12 right-0" src = "<?php echo e(URL::asset('images/User Groups.jpg')); ?>" />
                    </div>
                </div>
                <div class = "py-2">
                    <div class = "w-[480px] h-fit p-5 justify-between items-center rounded-xl shadow border text-wrap flex border-black">
                        <div class = "block">
                            <p class="text-base w-full font-bold text-left">Albay Local Government Unit</p>
                            <a href = "https://lgu201.dilg.gov.ph/view.php?r=05&p=005&m="
                                class = "text-blue-800">https://lgu201.dilg.gov.ph/view.php?r=05&p=005&m=</a>
                        </div>
                        <img class = "w-12 h-12 right-0" src = "<?php echo e(URL::asset('images/Parliament.jpg')); ?>" />
                    </div>
                </div>
            </div>
        </div>
        <!--Incoming Documents-->
        <div class = "h-full w-full col-span-2 p-2 gap-4">
            <div class = "w-fit h-fit p-4 right-0 top-0 block rounded-xl shadow border border-black">
                <h3 class = "px-20 py-2 text-2xl font-bold text-center block">INCOMING DOCUMENTS</h3>
                <table class = "table-fixed">
                    <thead>
                        <tr class = "bg-slate-300">
                            <th class = "p-2 w-[150px] h-[30px]">Tracking code</th>
                            <th class = "p-2 w-[500px] h-[30px]">Subject</th>
                            <th class = "p-2 w-[200px] h-[30px]">Document Type</th>
                            <th class = "p-2 w-[200px] h-[30px]">Sender</th>
                            <th class = "p-2 w-[200px] h-[30px]">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 0; $i < 4; $i++): ?>
                            <tr class = "border-b-2">
                                <td class = "p-2 w-2/12 h-[30px]">01-04-25-001</td>
                                <td class = "p-2 w-5/12 h-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                <td class = "p-2 w-2/12 h-[30px]">Office Memorandum</td>
                                <td class = "p-2 w-2/12 h-[30px]">Juan Dela Cruz</td>
                                <td class = "p-2 w-2/12 h-[30px]">Pending</td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>

                <div class="w-full h-fit p-2 flex justify-center items-center pt-8">
                    <a href = "<?php echo e(route('incoming')); ?>"
                        class="w-7/12 px-1 py-2 bg-blue-950 rounded-lg flex-col justify-center items-center gap-2.5 inline-flex hover:bg-blue-800">
                        <div class="justify-center items-center gap-2 inline-flex">
                            <div class="text-center text-white text-sm font-semibold leading-tight">VIEW INCOMING
                                DOCUMENTS</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class = "py-5">
                <div class = "w-fit h-fit p-2 rounded-xl shadow border justify-evenly gap-4 inline-flex border-black">
                    <div class = "px-14">
                        <p class = "text-center">Active Users</p>
                        <h2 class = "text-5xl font-bold py-3 text-center">21</h2>
                    </div>
                    <div class = "px-14">
                        <p class = "text-center">Pending Documents</p>
                        <h2 class = "text-5xl font-bold py-3 text-center">21</h2>
                    </div>
                    <div class = "px-14">
                        <p class = "text-center">Approved Documents</p>
                        <h2 class = "text-5xl font-bold py-3 text-center">21</h2>
                    </div>
                    <div class = "px-14">
                        <p class = "text-center">Rejected Documents</p>
                        <h2 class = "text-5xl font-bold py-3 text-center">21</h2>
                    </div>
                </div>
            </div>
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