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
    <table class = "table-fixed">
        <thead>
            <tr>
                <th class = "p-3 justify-start border-b-2 w-[178px] h-[73px]">Tracking Code</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Receiver</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Division</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Document Type</th>
                <th class = "p-3 justify-start border-b-2 w-[400px] h-[73px]">Subject</th>
                <th class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Status</th>
                <th class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class = "p-3 justify-start border-b-2 w-[178px] h-[73px]">1</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Juan Dela Cruz</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Administrative Division</td>
                <td class = "p-3 justify-start border-b-2 w-[200px] h-[73px]">Office Order</td>
                <td class = "p-3 justify-start border-b-2 w-[400px] h-[73px]">Subject</td>
                <td class = "p-3 justify-start border-b-2 w-[138px] h-[73px]">
                    <div class="h-6 px-3 py-0.5 bg-[#ffece5] rounded-xl flex-col justify-center items-center gap-2 inline-flex">
                        <div class="justify-center items-center gap-0.5 inline-flex">
                            <div class="text-center text-[#ad3306] text-sm font-medium leading-tight">Pending</div>
                        </div>
                    </div>
                </td>
                <td class = "p-3 justify-start border-b-2 w-[169px] h-[73px]">
                    <a href="#" class="text-blue-500 hover:text-blue-700 p-2">
                        View
                    </a>
                    <form action="#" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="text-red-500 hover:text-red-700 p-2">
                            Archive
                        </button>
                    </form>
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
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/outgoing.blade.php ENDPATH**/ ?>