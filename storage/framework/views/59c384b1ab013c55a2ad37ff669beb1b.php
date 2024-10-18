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
    <h1>Your Employees</h1>
    <div class="w-full h-14 relative">
        <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['xData' => '','xOn:click.prevent' => '$dispatch(\'open-modal\', \'add-new-employee\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '','x-on:click.prevent' => '$dispatch(\'open-modal\', \'add-new-employee\')']); ?>
            <div class="justify-center items-center gap-2 inline-flex">
                <div class="text-center text-white text-xl font-semibold leading-normal">Add New Employee</div>
            </div>
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
        <div class="h-14 left-[1362px] top-0 absolute flex-col justify-start items-start inline-flex">
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
                <div class="justify-center items-center gap-2 inline-flex">
                    <div class="w-6 h-6 relative"></div>
                    <div class="text-center text-base text-black font-semibold leading-normal">Refresh</div>
                </div>
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
        <!--Add New Employee-->
        <?php echo $__env->make('documents.forms.add_employee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Search Bar-->
        <form class="w-[515px] h-14 left-0 top-0 absolute">
            <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'search_employee','class' => 'w-[375px] h-14 left-0 top-0 absolute flex-col justify-start items-start gap-2 inline-flex mt-1','name' => 'search_employee','value' => old('search_employee'),'autofocus' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'search_employee','class' => 'w-[375px] h-14 left-0 top-0 absolute flex-col justify-start items-start gap-2 inline-flex mt-1','name' => 'search_employee','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('search_employee')),'autofocus' => true]); ?>
                <div class="self-stretch h-14 flex-col justify-start items-start gap-1 flex">
                    <div class="self-stretch h-14 p-4 bg-white rounded-md border border-[#d0d4dd] justify-start items-center gap-3 inline-flex">
                        <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                            <div class="w-5 h-5 relative"></div>
                                <div class="justify-start items-center gap-0.5 flex">
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="h-14 left-[396px] top-0 absolute flex-col justify-start items-start inline-flex">
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
                    <div class="justify-center items-center gap-2 inline-flex">
                        <div class="text-center text-white text-base font-semibold leading-normal">Search</div>
                        <div class="w-6 h-6 relative"></div>
                    </div>
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
        </form>
    </div>
    <table class = "table-fixed">
        <thead>
            <tr>
                <th class = "p-3 justify-start border-b-2 w-[173px] h-[73px]">Employee Id</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Employee Name</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Division</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Position</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Contact Number</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Email</th>
                <th class = "p-3 justify-start border-b-2 w-[138px] h-[73px]">Status</th>
                <th class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $aphso_employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class = "p-3 justify-start border-b-2 w-[173px] h-[73px]"><?php echo e($employee->divisions->abbreviation); ?>-<?php echo e(str_pad($employee->employee_number, 4, '0', STR_PAD_LEFT)); ?></td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]"><?php echo e($employee->fname); ?> <?php echo e($employee->mname); ?> <?php echo e($employee->lname); ?></td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]"><?php echo e($employee->divisions->division_name); ?></td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]"><?php echo e($employee->position); ?></td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]"><?php echo e($employee->contact_nos); ?></td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]"><?php echo e($employee->email); ?></td>
                <td class = "p-3 justify-start border-b-2 w-[138px] h-[73px]">
                    <div class="h-6 px-3 py-0.5 bg-[#ffece5] rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <div class="text-center text-[#ad3306] text-sm font-medium leading-tight"><?php echo e($employee->status == 1 ? 'In Service' : 'Archived'); ?></div>
                        </div>
                    </div>
                </td>
                <td class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">
                    <a href="<?php echo e(route('employees.edit', $employee->employee_number)); ?>" class="text-blue-500 hover:text-blue-700 p-2">
                        View
                    </a>
                    <form action="<?php echo e(route('employees.destroy', $employee->employee_number)); ?>" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="text-red-500 hover:text-red-700 p-2">
                            Archive
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($aphso_employees->links()); ?>

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