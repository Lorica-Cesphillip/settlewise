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
    <div class = "w-full">
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
             <?php $__env->slot('heading', null, []); ?> Your Employees <?php $__env->endSlot(); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php echo '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / users">
                <g id="icon">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6668 2.5C8.90536 2.5 6.66678 4.73858 6.66678 7.5C6.66678 10.2614 8.90536 12.5 11.6668 12.5C14.4282 12.5 16.6668 10.2614 16.6668 7.5C16.6668 4.73858 14.4282 2.5 11.6668 2.5ZM8.33345 7.5C8.33345 5.65905 9.82583 4.16667 11.6668 4.16667C13.5077 4.16667 15.0001 5.65905 15.0001 7.5C15.0001 9.34095 13.5077 10.8333 11.6668 10.8333C9.82583 10.8333 8.33345 9.34095 8.33345 7.5Z" fill="#200E3A"/>
                <path d="M6.79628 17.106C6.55364 17.4971 6.03991 17.6174 5.64883 17.3748C5.25775 17.1321 5.13741 16.6184 5.38005 16.2273C6.52122 14.388 8.85578 12.5 11.6668 12.5C14.4778 12.5 16.8124 14.388 17.9535 16.2273C18.1962 16.6184 18.0758 17.1321 17.6848 17.3748C17.2937 17.6174 16.7799 17.4971 16.5373 17.106C15.6022 15.5988 13.7371 14.1667 11.6668 14.1667C9.59651 14.1667 7.73141 15.5988 6.79628 17.106Z" fill="#200E3A"/>
                <path d="M6.58166 5.46643C6.7843 5.87966 6.61358 6.37891 6.20035 6.58155C5.44313 6.95287 5.00011 7.62649 5.00011 8.33333C5.00011 9.04017 5.44313 9.7138 6.20035 10.0851C6.61358 10.2878 6.7843 10.787 6.58166 11.2002C6.37903 11.6135 5.87977 11.7842 5.46654 11.5815C4.23587 10.9781 3.33345 9.77794 3.33345 8.33333C3.33345 6.88872 4.23587 5.6886 5.46654 5.08512C5.87977 4.88248 6.37903 5.0532 6.58166 5.46643Z" fill="#200E3A"/>
                <path d="M3.46295 17.106C3.22031 17.4971 2.70658 17.6174 2.3155 17.3748C1.92442 17.1321 1.80408 16.6184 2.04672 16.2273C2.5293 15.4495 3.30141 14.8003 4.16281 14.2966C4.56011 14.0643 5.07052 14.198 5.30283 14.5953C5.53515 14.9926 5.40141 15.503 5.00411 15.7354C4.28435 16.1562 3.75479 16.6356 3.46295 17.106Z" fill="#200E3A"/>
                </g>
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
        <div class = "w-full flex row-span-3 h-20 justify-between">
            <div class = "left-0 h-14 inline-flex gap-3 w-1/2">
                <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'employee_id','class' => 'mt-1 w-3/5','type' => 'text','name' => 'employee_id','value' => old('employee_id'),'autofocus' => true,'placeholder' => 'Search Employee']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'employee_id','class' => 'mt-1 w-3/5','type' => 'text','name' => 'employee_id','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('employee_id')),'autofocus' => true,'placeholder' => 'Search Employee']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
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
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="button-icon">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11Z" fill="white"/>
                            </g>
                        </svg>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('name', null, []); ?> Search <?php $__env->endSlot(); ?>
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
            </div>

            <div class = "w-10/12 inline-flex h-14 gap-3">
                <!--Reports Generation-->
                <form class = "inline-flex gap-3" action = "#" method = "GET">
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
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="button-icon">
                                    <g id="icon">
                                        <path d="M16.7071 13.7071L12.7071 17.7071C12.3166 18.0976 11.6834 18.0976 11.2929 17.7071L7.29289 13.7071C6.90237 13.3166 6.90237 12.6834 7.29289 12.2929C7.68342 11.9024 8.31658 11.9024 8.70711 12.2929L11 14.5858V3C11 2.44771 11.4477 2 12 2C12.5523 2 13 2.44771 13 3V14.5858L15.2929 12.2929C15.6834 11.9024 16.3166 11.9024 16.7071 12.2929C17.0976 12.6834 17.0976 13.3166 16.7071 13.7071Z" fill="white"/>
                                        <path d="M4 17.5C4 16.9477 3.55228 16.5 3 16.5C2.44772 16.5 2 16.9477 2 17.5V19C2 21.2091 3.79086 23 6 23H18C20.2091 23 22 21.2091 22 19V17.5C22 16.9477 21.5523 16.5 21 16.5C20.4477 16.5 20 16.9477 20 17.5V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V17.5Z" fill="white"/>
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
                <!--Add New Employee and Refresh Buttons-->
                <div class = "inline-flex gap-3">
                    <button x-data = "" type="button" class="p-4 bg-[#0d5dba] rounded-lg flex-col justify-center items-center gap-2.5 flex text-white font-semibold tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    x-on:click.prevent="$dispatch('open-modal', 'add-new-employee')"
                >
                    Add New Employee
                </button>
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

        <!--Table-->
        <div class = "w-full h-full p-2">
            <table class = "table-fixed border-b-2">
                <thead>
                    <tr class = "bg-slate-200 h-[30px]">
                        <th class = "w-[150px] p-3 justify-start">Employee Id</th>
                        <th class = "w-[300px] p-3 justify-start">Employee Name</th>
                        <th class = "w-[250px] p-3 justify-start">Division</th>
                        <th class = "w-[250px] p-3 justify-start">Position</th>
                        <th class = "w-[200px] p-3 justify-start">Contact Number</th>
                        <th class = "w-[250px] p-3 justify-start">Email</th>
                        <th class = "w-[150px] p-3 justify-start">Status</th>
                        <th class = "w-[150px] p-3 justify-start">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $aphso_employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class = "border-b-2">

                        <td class = " w-[150px] h-[45px] p-3 justify-start"><?php echo e($employee->divisions->abbreviation); ?>-<?php echo e(str_pad($employee->employee_number, 4, '0', STR_PAD_LEFT)); ?></td>
                        <td class = " w-[300px] h-[45px] p-3 justify-start"><?php echo e($employee->fname); ?> <?php echo e($employee->mname); ?> <?php echo e($employee->lname); ?> </td>
                        <td class = " w-[250px] h-[45px] p-3 justify-start">
                            <?php if($employee->divisions->division_name != "APHSO Department"): ?>
                            <?php echo e($employee->divisions->division_name); ?> Division
                            <?php else: ?>
                            <?php echo e($employee->divisions->division_name); ?>

                            <?php endif; ?>
                        </td>
                        <td class = " w-[250px] h-[45px] p-3 justify-start"><?php echo e($employee->position); ?></td>
                        <td class = " w-[200px] h-[45px] p-3 justify-start"><?php echo e($employee->contact_nos); ?></td>
                        <td class = " w-[250px] h-[45px] p-3 justify-start"><?php echo e($employee->email); ?></td>
                        <td class = " w-[150px] h-[45px] p-3 items-center justify-items-center">
                            <div class="grow shrink basis-0 h-6 justify-start items-center gap-3 flex">
                                <div class="px-3 py-0.5 bg-<?php echo e($employee->emp_status ? 'green-500' : 'red-500'); ?> rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="justify-center items-center gap-0.5 inline-flex">
                                        <div class="text-center text-white text-sm font-medium leading-tight"><?php echo e($employee->emp_status ? 'Active' : 'Inactive'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class = "w-[150px] h-[45px] p-3 justify-start inline-flex gap-3">
                            <a href="<?php echo e(route('employees.show', $employee->employee_number)); ?>">
                                <svg class="h-[20px] w-[20px] gap-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <?php if(session('employee')->division_name == "APHSO Department"): ?>
                            <form action="<?php echo e(route('employees.destroy', $employee->employee_number)); ?>" method="POST" style="display:inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="textpx-4">
                                    <svg class="h-[20px] w-[20px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="icon / box-1">
                                            <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.16675 2.08331C2.78604 2.08331 1.66675 3.2026 1.66675 4.58331V6.24998C1.66675 6.86688 2.00191 7.4055 2.50008 7.69368V14.5833C2.50008 16.4243 3.99247 17.9166 5.83341 17.9166H14.1667C16.0077 17.9166 17.5001 16.4243 17.5001 14.5833V7.69368C17.9982 7.4055 18.3334 6.86688 18.3334 6.24998V4.58331C18.3334 3.2026 17.2141 2.08331 15.8334 2.08331H4.16675ZM5.83341 16.25C4.91294 16.25 4.16675 15.5038 4.16675 14.5833V7.91665H15.8334V14.5833C15.8334 15.5038 15.0872 16.25 14.1667 16.25H5.83341ZM15.8334 3.74998C16.2937 3.74998 16.6667 4.12308 16.6667 4.58331V6.24998H3.33341V4.58331C3.33341 4.12308 3.70651 3.74998 4.16675 3.74998H15.8334Z"
                                                fill="#200E3A" />
                                        </g>
                                    </svg>
                                </button>
                            </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
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
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/employees.blade.php ENDPATH**/ ?>