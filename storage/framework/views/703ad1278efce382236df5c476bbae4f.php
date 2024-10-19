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
    <!--Respective Buttons-->

    <!--Main Table-->
    <table class = "table-fixed">
        <thead>
            <tr>
                <th class = "p-3 justify-start border-b-2 w-[178px] h-[45px]">Tracking Code</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[45px]">Sender/Receiver</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[45px]">Division</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[45px]">Document Type</th>
                <th class = "p-3 justify-start border-b-2 w-[538px] h-[45px]">Subject</th>
                <th class = "p-3 justify-start border-b-2 w-[169px] h-[45px]">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class = "p-3 justify-start border-b-2 w-[178px] h-[73px]">11112025-001</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Juan Dela Cruz</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Administrative Division</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Office Order</td>
                <td class = "p-3 justify-start border-b-2 w-[538px] h-[73px]">Subject</td>
                <td class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">
                    <a href="#" class="text-blue-500 hover:text-blue-700 p-2">
                        View
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
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
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/archived.blade.php ENDPATH**/ ?>