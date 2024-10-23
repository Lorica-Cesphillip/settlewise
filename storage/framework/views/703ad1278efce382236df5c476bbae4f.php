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
         <?php $__env->slot('heading', null, []); ?> Archived Documents <?php $__env->endSlot(); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php echo '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / box-1">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.16675 2.08331C2.78604 2.08331 1.66675 3.2026 1.66675 4.58331V6.24998C1.66675 6.86688 2.00191 7.4055 2.50008 7.69368V14.5833C2.50008 16.4243 3.99247 17.9166 5.83341 17.9166H14.1667C16.0077 17.9166 17.5001 16.4243 17.5001 14.5833V7.69368C17.9982 7.4055 18.3334 6.86688 18.3334 6.24998V4.58331C18.3334 3.2026 17.2141 2.08331 15.8334 2.08331H4.16675ZM5.83341 16.25C4.91294 16.25 4.16675 15.5038 4.16675 14.5833V7.91665H15.8334V14.5833C15.8334 15.5038 15.0872 16.25 14.1667 16.25H5.83341ZM15.8334 3.74998C16.2937 3.74998 16.6667 4.12308 16.6667 4.58331V6.24998H3.33341V4.58331C3.33341 4.12308 3.70651 3.74998 4.16675 3.74998H15.8334Z"
                        fill="#200E3A" />
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