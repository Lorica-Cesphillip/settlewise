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
         <?php $__env->slot('heading', null, []); ?> Outgoing Documents <?php $__env->endSlot(); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php echo '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="icon / send">
            <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M16.9747 11.8999C18.6126 11.1628 18.6126 8.83724 16.9747 8.1002L5.19204 2.798C3.60512 2.08388 1.89392 3.51487 2.31598 5.20311L3.13604 8.48334C3.32524 9.24014 3.91689 9.81693 4.65478 10C3.91689 10.1831 3.32524 10.7599 3.13604 11.5167L2.31598 14.797C1.89392 16.4852 3.60511 17.9162 5.19204 17.2021L16.9747 11.8999ZM4.5081 4.31786L14.9777 9.02917L5.13034 8.39386C4.94948 8.38219 4.7969 8.25495 4.75294 8.07912L3.93289 4.79889C3.84848 4.46124 4.19071 4.17504 4.5081 4.31786ZM5.13034 11.6062L14.9777 10.9709L4.5081 15.6822C4.19071 15.825 3.84847 15.5388 3.93289 15.2012L4.75294 11.921C4.7969 11.7451 4.94948 11.6179 5.13034 11.6062Z" fill="#200E3A"/>
            </g>
            </svg>
            '; ?>

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

        <!--Necessary Buttons-->
        <div class = "w-full flex h-20 justify-between">
            <div class = "left-0 h-14 inline-flex gap-3 w-1/2">
                <!--Send a Document-->
                <button x-data = ""  x-on:click.prevent="$dispatch('open-modal', 'create-document-tracker-request')" type = "button" class = "p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <div class = "justify-center items-center gap-2 inline-flex">
                        <div class = "relative">
                            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / send">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M16.9747 11.8999C18.6126 11.1628 18.6126 8.83724 16.9747 8.1002L5.19204 2.798C3.60512 2.08388 1.89392 3.51487 2.31598 5.20311L3.13604 8.48334C3.32524 9.24014 3.91689 9.81693 4.65478 10C3.91689 10.1831 3.32524 10.7599 3.13604 11.5167L2.31598 14.797C1.89392 16.4852 3.60511 17.9162 5.19204 17.2021L16.9747 11.8999ZM4.5081 4.31786L14.9777 9.02917L5.13034 8.39386C4.94948 8.38219 4.7969 8.25495 4.75294 8.07912L3.93289 4.79889C3.84848 4.46124 4.19071 4.17504 4.5081 4.31786ZM5.13034 11.6062L14.9777 10.9709L4.5081 15.6822C4.19071 15.825 3.84847 15.5388 3.93289 15.2012L4.75294 11.921C4.7969 11.7451 4.94948 11.6179 5.13034 11.6062Z" fill="white"/>
                                </g>
                            </svg>
                        </div>
                        <div class = "font-semibold text-white">Send a Document</div>
                    </div>
                </button>

                <?php echo $__env->make('modals.create-document-tracker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('modals.view-document', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('modals.view-conversation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                <!--Filter Confidential Documents-->
                <form action="#" method = "POST" class = "inline-flex gap-3">
                    <div class="block mt-4 gap-3">
                        <label for="filter_confidential" class="inline-flex items-center">
                            <input id="filter_confidential" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600"><?php echo e(__('Confidential')); ?></span>
                        </label>
                    </div>
                </form>
            </div>

            <div class = "w-10/12 inline-flex h-14 right-0 gap-3">
                <!--Reports Generation-->
                <form class = "inline-flex gap-3" action = "#" method = "POST">
                    <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>From:  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                    <input type = "date" name = "from" id = "from" class = "p-3 rounded-md">
                    <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>To:  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                    <input type = "date" name = "to" id = "to" class = "p-3 rounded-md">
                    <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="button-icon">
                                    <g id="icon">
                                        <path
                                            d="M16.7071 13.7071L12.7071 17.7071C12.3166 18.0976 11.6834 18.0976 11.2929 17.7071L7.29289 13.7071C6.90237 13.3166 6.90237 12.6834 7.29289 12.2929C7.68342 11.9024 8.31658 11.9024 8.70711 12.2929L11 14.5858V3C11 2.44771 11.4477 2 12 2C12.5523 2 13 2.44771 13 3V14.5858L15.2929 12.2929C15.6834 11.9024 16.3166 11.9024 16.7071 12.2929C17.0976 12.6834 17.0976 13.3166 16.7071 13.7071Z"
                                            fill="white" />
                                        <path
                                            d="M4 17.5C4 16.9477 3.55228 16.5 3 16.5C2.44772 16.5 2 16.9477 2 17.5V19C2 21.2091 3.79086 23 6 23H18C20.2091 23 22 21.2091 22 19V17.5C22 16.9477 21.5523 16.5 21 16.5C20.4477 16.5 20 16.9477 20 17.5V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V17.5Z"
                                            fill="white" />
                                    </g>
                                </g>
                            </svg>
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('name', null, []); ?> Export <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                </form>
                <!--Refresh Buttons-->
                <div class = "inline-flex gap-3">
                    <?php if (isset($component)) { $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php echo '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="button-icon">
                            <g id="icon">
                            <path d="M17 4C17 3.44772 17.4477 3 18 3C18.5523 3 19 3.44772 19 4V7.2C19 7.75229 18.5523 8.2 18 8.2H14.8884C14.3362 8.2 13.8884 7.75229 13.8884 7.2C13.8884 6.64772 14.3362 6.2 14.8884 6.2H15.5735C14.4881 5.44066 13.181 5 11.7775 5C8.06078 5 5 8.10723 5 12C5 12.5523 4.55229 13 4 13C3.44772 13 3 12.5523 3 12C3 7.05622 6.9034 3 11.7775 3C13.7372 3 15.5433 3.65852 17 4.76587V4Z" fill="white"/>
                            <path d="M7 20C7 20.5523 6.55228 21 6 21C5.44772 21 5 20.5523 5 20V16.8C5 16.2477 5.44772 15.8 6 15.8H9.11155C9.66384 15.8 10.1116 16.2477 10.1116 16.8C10.1116 17.3523 9.66384 17.8 9.11155 17.8H8.42654C9.5119 18.5593 10.819 19 12.2225 19C15.9392 19 19 15.8928 19 12C19 11.4477 19.4477 11 20 11C20.5523 11 21 11.4477 21 12C21 16.9438 17.0966 21 12.2225 21C10.2628 21 8.45674 20.3415 7 19.2341V20Z" fill="white"/>
                            </g>
                            </g>
                            </svg>
                            '; ?>

                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('name', null, []); ?> Refresh <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $attributes = $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $component = $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
                </div>
            </div>
        </div>

    <!--Outgoing Document Tables-->
    <table class = "table-fixed border-gray-800">
        <thead>
            <tr class = "bg-slate-200 h-[30px]">
                <th class = "w-[180px] p-2 border-b-2">Document Tracking Code</th>
                <th class = "w-[200px] p-2 border-b-2">Receiver</th>
                <th class = "w-[200px] p-2 border-b-2">Division</th>
                <th class = "w-[180px] p-2 border-b-2">Document Type</th>
                <th class = "w-[450px] p-2 border-b-2">Subject</th>
                <th class = "w-[180px] p-2 border-b-2">Status</th>
                <th class = "w-[180px] p-2 border-b-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class = "border-b-2 h-[40px]">
                <td class = "w-[180px] p-2 border-b-2">01-04-25-001</td>
                <td class = "w-[200px] p-2 border-b-2">Juan Dela Cruz</td>
                <td class = "w-[200px] p-2 border-b-2">Administrative Division</td>
                <td class = "w-[180px] p-2 border-b-2">Office Memorandum</td>
                <td class = "w-[450px] p-2 border-b-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                <th class = "w-[180px] p-2 border-b-2">
                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-3 flex">
                        <div class="px-3 py-0.5 bg-[#ffece5] rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                            <div class="justify-center items-center gap-0.5 inline-flex">
                                <div class="text-center text-[#ad3306] text-sm font-medium leading-tight">Status</div>
                            </div>
                        </div>
                    </div>
                </th>
                <td class = "w-[180px] p-11 inline-flex gap-3">
                    <a href="#">
                        <svg class="h-[30px] w-[30px] gap-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="icon / eye">
                                <g id="icon">
                                    <path
                                        d="M3.57891 11.6523C3.81695 12.0462 3.69061 12.5585 3.29671 12.7965C2.90282 13.0346 2.39053 12.9082 2.15249 12.5143C1.81407 11.9544 1.58447 11.4718 1.44946 11.1603C1.25613 10.7143 1.28418 10.2121 1.5197 9.7915C1.87909 9.14973 2.78698 7.66611 4.18616 6.33307C5.58214 5.00308 7.54641 3.75 9.99982 3.75C12.4532 3.75 14.4175 5.00308 15.8135 6.33307C17.2127 7.66611 18.1206 9.14973 18.4799 9.7915C18.7155 10.2121 18.7435 10.7143 18.5502 11.1603C18.4152 11.4718 18.1856 11.9544 17.8472 12.5143C17.6091 12.9082 17.0968 13.0346 16.7029 12.7965C16.309 12.5585 16.1827 12.0462 16.4207 11.6523C16.6929 11.2019 16.8818 10.8124 16.9964 10.5537C16.6582 9.95778 15.8574 8.67693 14.6638 7.53975C13.4309 6.36513 11.8581 5.41667 9.99982 5.41667C8.14153 5.41667 6.56871 6.36513 5.33581 7.53975C4.14221 8.67693 3.34141 9.95778 3.00328 10.5537C3.11784 10.8124 3.30672 11.2019 3.57891 11.6523Z"
                                        fill="#667185" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.99982 6.66667C7.69864 6.66667 5.83316 8.53215 5.83316 10.8333C5.83316 13.1345 7.69864 15 9.99982 15C12.301 15 14.1665 13.1345 14.1665 10.8333C14.1665 8.53215 12.301 6.66667 9.99982 6.66667ZM7.49982 10.8333C7.49982 9.45262 8.61911 8.33333 9.99982 8.33333C11.3805 8.33333 12.4998 9.45262 12.4998 10.8333C12.4998 12.214 11.3805 13.3333 9.99982 13.3333C8.61911 13.3333 7.49982 12.214 7.49982 10.8333Z"
                                        fill="#667185" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <form action="#" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="textpx-4">
                            <svg class="h-[30px] w-[30px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / box-1">
                                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.16675 2.08331C2.78604 2.08331 1.66675 3.2026 1.66675 4.58331V6.24998C1.66675 6.86688 2.00191 7.4055 2.50008 7.69368V14.5833C2.50008 16.4243 3.99247 17.9166 5.83341 17.9166H14.1667C16.0077 17.9166 17.5001 16.4243 17.5001 14.5833V7.69368C17.9982 7.4055 18.3334 6.86688 18.3334 6.24998V4.58331C18.3334 3.2026 17.2141 2.08331 15.8334 2.08331H4.16675ZM5.83341 16.25C4.91294 16.25 4.16675 15.5038 4.16675 14.5833V7.91665H15.8334V14.5833C15.8334 15.5038 15.0872 16.25 14.1667 16.25H5.83341ZM15.8334 3.74998C16.2937 3.74998 16.6667 4.12308 16.6667 4.58331V6.24998H3.33341V4.58331C3.33341 4.12308 3.70651 3.74998 4.16675 3.74998H15.8334Z"
                                        fill="#200E3A" />
                                </g>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <?php echo $__env->make('modals.view-document', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/outgoing.blade.php ENDPATH**/ ?>