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