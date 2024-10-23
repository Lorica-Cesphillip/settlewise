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
         <?php $__env->slot('heading', null, []); ?> Your Divisions <?php $__env->endSlot(); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php echo '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="icon / building-5">
                        <g id="icon">
                            <path d="M7.91658 5.83333C7.91658 6.29357 7.54349 6.66667 7.08325 6.66667H6.24992C5.78968 6.66667 5.41658 6.29357 5.41658 5.83333C5.41658 5.3731 5.78968 5 6.24992 5H7.08325C7.54349 5 7.91658 5.3731 7.91658 5.83333Z" fill="#200E3A" />
                            <path d="M10.4166 9.16667C10.8768 9.16667 11.2499 8.79357 11.2499 8.33333C11.2499 7.8731 10.8768 7.5 10.4166 7.5H9.58325C9.12301 7.5 8.74992 7.8731 8.74992 8.33333C8.74992 8.79357 9.12301 9.16667 9.58325 9.16667H10.4166Z" fill="#200E3A" />
                            <path d="M7.91658 10.8333C7.91658 11.2936 7.54349 11.6667 7.08325 11.6667H6.24992C5.78968 11.6667 5.41658 11.2936 5.41658 10.8333C5.41658 10.3731 5.78968 10 6.24992 10H7.08325C7.54349 10 7.91658 10.3731 7.91658 10.8333Z" fill="#200E3A" />
                            <path d="M10.4166 6.66667C10.8768 6.66667 11.2499 6.29357 11.2499 5.83333C11.2499 5.3731 10.8768 5 10.4166 5H9.58325C9.12301 5 8.74992 5.3731 8.74992 5.83333C8.74992 6.29357 9.12301 6.66667 9.58325 6.66667H10.4166Z" fill="#200E3A" />
                            <path d="M7.91658 8.33333C7.91658 8.79357 7.54349 9.16667 7.08325 9.16667H6.24992C5.78968 9.16667 5.41658 8.79357 5.41658 8.33333C5.41658 7.8731 5.78968 7.5 6.24992 7.5H7.08325C7.54349 7.5 7.91658 7.8731 7.91658 8.33333Z" fill="#200E3A" />
                            <path d="M10.4166 11.6667C10.8768 11.6667 11.2499 11.2936 11.2499 10.8333C11.2499 10.3731 10.8768 10 10.4166 10H9.58325C9.12301 10 8.74992 10.3731 8.74992 10.8333C8.74992 11.2936 9.12301 11.6667 9.58325 11.6667H10.4166Z" fill="#200E3A" />
                            <path d="M7.91658 13.3333C7.91658 13.7936 7.54349 14.1667 7.08325 14.1667H6.24992C5.78968 14.1667 5.41658 13.7936 5.41658 13.3333C5.41658 12.8731 5.78968 12.5 6.24992 12.5H7.08325C7.54349 12.5 7.91658 12.8731 7.91658 13.3333Z" fill="#200E3A" />
                            <path d="M10.4166 14.1667C10.8768 14.1667 11.2499 13.7936 11.2499 13.3333C11.2499 12.8731 10.8768 12.5 10.4166 12.5H9.58325C9.12301 12.5 8.74992 12.8731 8.74992 13.3333C8.74992 13.7936 9.12301 14.1667 9.58325 14.1667H10.4166Z" fill="#200E3A" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33325 4.16667C3.33325 3.24619 4.07944 2.5 4.99992 2.5H11.6666C12.5871 2.5 13.3333 3.24619 13.3333 4.16667V7.5H15.8333C16.7537 7.5 17.4999 8.24619 17.4999 9.16667V15.8333H18.3333C18.7935 15.8333 19.1666 16.2064 19.1666 16.6667C19.1666 17.1269 18.7935 17.5 18.3333 17.5H1.66659C1.20635 17.5 0.833252 17.1269 0.833252 16.6667C0.833252 16.2064 1.20635 15.8333 1.66659 15.8333H3.33325V4.16667ZM4.99992 15.8333H11.6666V4.16667H4.99992V15.8333ZM15.8333 12.5V11.6667H15.4166C14.9563 11.6667 14.5833 11.2936 14.5833 10.8333C14.5833 10.3731 14.9563 10 15.4166 10H15.8333V9.16667H13.3333V15.8333H15.8333V14.1667H15.4166C14.9563 14.1667 14.5833 13.7936 14.5833 13.3333C14.5833 12.8731 14.9563 12.5 15.4166 12.5H15.8333Z" fill="#200E3A" />
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
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/aphso-divisions.blade.php ENDPATH**/ ?>