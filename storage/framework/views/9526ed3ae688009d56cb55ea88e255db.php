  <!-- Sidebar -->
<aside class="relative bg-[#94D0F8] h-screen w-[300px] transition-all duration-300 flex flex-col text-md font-semibold ">
    <a href = "<?php echo e(route('dashboard')); ?>" class = "container p-2">
        <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
    </a>

    <div class = "container px-2">
        <div class = "w-full pt-9 py-2 flex-col justify-start items-start gap-1 relative">
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('dashboard'),'active' => request()->routeIs('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="icon / home-alt">
                    <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M11.9997 2.54167C10.8145 1.65278 9.18489 1.65278 7.99971 2.54167L2.27257 6.83702C1.3548 7.52535 0.855479 8.63725 0.95075 9.7805L1.47822 16.1102C1.62219 17.8378 3.06641 19.1667 4.80004 19.1667H15.1994C16.933 19.1667 18.3772 17.8378 18.5212 16.1102L19.0487 9.7805C19.1439 8.63725 18.6446 7.52535 17.7268 6.83702L11.9997 2.54167ZM8.99971 3.875C9.5923 3.43056 10.4071 3.43056 10.9997 3.875L16.7268 8.17035C17.1857 8.51452 17.4354 9.07047 17.3878 9.6421L16.8603 15.9717C16.7883 16.8356 16.0662 17.5 15.1994 17.5H12.572L12.7405 15.4787C12.8741 13.8752 11.6087 12.5 9.99971 12.5C8.39069 12.5 7.12531 13.8752 7.25893 15.4787L7.42737 17.5H4.80004C3.93323 17.5 3.21112 16.8356 3.13913 15.9717L2.61166 9.6421C2.56402 9.07047 2.81368 8.51452 3.27257 8.17035L8.99971 3.875ZM11.0796 15.3403L10.8996 17.5H9.09982L8.91984 15.3403C8.86719 14.7085 9.36575 14.1667 9.99971 14.1667C10.6337 14.1667 11.1322 14.7085 11.0796 15.3403Z" fill="black"/>
                    </g>
                    </svg>
                    '; ?> <?php $__env->endSlot(); ?>
                     <?php $__env->slot('navpage', null, []); ?> Dashboard <?php $__env->endSlot(); ?>
                     <?php $__env->slot('badge', null, []); ?> New <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>

        <div class="w-full px-2 py-4 flex-col justify-start items-start gap-3 relative">
            <div class="self-stretch p-3 justify-start items-center gap-2.5 inline-flex">
                <div class="grow shrink basis-0 text-[#211c6a] text-base font-bold leading-normal">Documents</div>
            </div>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('incoming'),'active' => request()->routeIs('incoming')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('incoming')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('incoming'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / receipt">
                <g id="icon">
                <path d="M6.66667 5.00004C6.20643 5.00004 5.83333 5.37314 5.83333 5.83337C5.83333 6.29361 6.20643 6.66671 6.66667 6.66671H13.3333C13.7936 6.66671 14.1667 6.29361 14.1667 5.83337C14.1667 5.37314 13.7936 5.00004 13.3333 5.00004H6.66667Z" fill="#200E3A"/>
                <path d="M5.83333 10C5.83333 9.5398 6.20643 9.16671 6.66667 9.16671H13.3333C13.7936 9.16671 14.1667 9.5398 14.1667 10C14.1667 10.4603 13.7936 10.8334 13.3333 10.8334H6.66667C6.20643 10.8334 5.83333 10.4603 5.83333 10Z" fill="#200E3A"/>
                <path d="M6.66667 13.3334C6.20643 13.3334 5.83333 13.7065 5.83333 14.1667C5.83333 14.6269 6.20643 15 6.66667 15H8.88889C9.34913 15 9.72222 14.6269 9.72222 14.1667C9.72222 13.7065 9.34913 13.3334 8.88889 13.3334H6.66667Z" fill="#200E3A"/>
                <path d="M11.1111 13.3334C10.6509 13.3334 10.2778 13.7065 10.2778 14.1667C10.2778 14.6269 10.6509 15 11.1111 15H13.3333C13.7936 15 14.1667 14.6269 14.1667 14.1667C14.1667 13.7065 13.7936 13.3334 13.3333 13.3334H11.1111Z" fill="#200E3A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9015 18.2511C12.9952 18.2745 13.0861 18.3081 13.1724 18.3513C15.1607 19.3454 17.5 17.8996 17.5 15.6767V4.16671C17.5 2.32576 16.0076 0.833374 14.1667 0.833374H5.83333C3.99238 0.833374 2.5 2.32576 2.5 4.16671V15.6767C2.5 17.8996 4.83933 19.3454 6.82757 18.3513C6.91395 18.3081 7.00479 18.2745 7.09848 18.2511L9.59577 17.6267C9.86117 17.5604 10.1388 17.5604 10.4042 17.6267L12.9015 18.2511ZM4.16667 4.16671C4.16667 3.24623 4.91286 2.50004 5.83333 2.50004H14.1667C15.0871 2.50004 15.8333 3.24623 15.8333 4.16671V15.6767C15.8333 16.6606 14.7979 17.3006 13.9178 16.8606C13.7226 16.763 13.5174 16.6871 13.3057 16.6342L10.8085 16.0098C10.2777 15.8771 9.72235 15.8771 9.19155 16.0098L6.69426 16.6342C6.48259 16.6871 6.27736 16.763 6.08221 16.8606C5.20214 17.3006 4.16667 16.6606 4.16667 15.6767V4.16671Z" fill="#200E3A"/>
                </g>
                </g>
                </svg>'; ?> <?php $__env->endSlot(); ?>
                 <?php $__env->slot('navpage', null, []); ?> Incoming Documents <?php $__env->endSlot(); ?>
                 <?php $__env->slot('badge', null, []); ?> 10 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('outgoing'),'active' => request()->routeIs('outgoing')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('outgoing')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('outgoing'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / send">
                <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M16.9747 11.8999C18.6126 11.1628 18.6126 8.83724 16.9747 8.1002L5.19204 2.798C3.60512 2.08388 1.89392 3.51487 2.31598 5.20311L3.13604 8.48334C3.32524 9.24014 3.91689 9.81693 4.65478 10C3.91689 10.1831 3.32524 10.7599 3.13604 11.5167L2.31598 14.797C1.89392 16.4852 3.60511 17.9162 5.19204 17.2021L16.9747 11.8999ZM4.5081 4.31786L14.9777 9.02917L5.13034 8.39386C4.94948 8.38219 4.7969 8.25495 4.75294 8.07912L3.93289 4.79889C3.84848 4.46124 4.19071 4.17504 4.5081 4.31786ZM5.13034 11.6062L14.9777 10.9709L4.5081 15.6822C4.19071 15.825 3.84847 15.5388 3.93289 15.2012L4.75294 11.921C4.7969 11.7451 4.94948 11.6179 5.13034 11.6062Z" fill="#200E3A"/>
                </g>
                </svg>
                '; ?> <?php $__env->endSlot(); ?>
                 <?php $__env->slot('navpage', null, []); ?> Outgoing Documents <?php $__env->endSlot(); ?>
                 <?php $__env->slot('badge', null, []); ?> 10 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            <?php if(session('employee')->division_name == "APHSO Department"): ?>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('archived'),'active' => request()->routeIs('archived')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('archived')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('archived'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / box-1">
                <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M4.16675 2.08331C2.78604 2.08331 1.66675 3.2026 1.66675 4.58331V6.24998C1.66675 6.86688 2.00191 7.4055 2.50008 7.69368V14.5833C2.50008 16.4243 3.99247 17.9166 5.83341 17.9166H14.1667C16.0077 17.9166 17.5001 16.4243 17.5001 14.5833V7.69368C17.9982 7.4055 18.3334 6.86688 18.3334 6.24998V4.58331C18.3334 3.2026 17.2141 2.08331 15.8334 2.08331H4.16675ZM5.83341 16.25C4.91294 16.25 4.16675 15.5038 4.16675 14.5833V7.91665H15.8334V14.5833C15.8334 15.5038 15.0872 16.25 14.1667 16.25H5.83341ZM15.8334 3.74998C16.2937 3.74998 16.6667 4.12308 16.6667 4.58331V6.24998H3.33341V4.58331C3.33341 4.12308 3.70651 3.74998 4.16675 3.74998H15.8334Z" fill="#200E3A"/>
                </g>
                </svg>
                '; ?> <?php $__env->endSlot(); ?>
                 <?php $__env->slot('navpage', null, []); ?> Archived Documents <?php $__env->endSlot(); ?>
                 <?php $__env->slot('badge', null, []); ?> 10 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('employees.index'),'active' => request()->routeIs('employees.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('employees.index')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('employees.index'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / users">
                <g id="icon">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6668 2.5C8.90536 2.5 6.66678 4.73858 6.66678 7.5C6.66678 10.2614 8.90536 12.5 11.6668 12.5C14.4282 12.5 16.6668 10.2614 16.6668 7.5C16.6668 4.73858 14.4282 2.5 11.6668 2.5ZM8.33345 7.5C8.33345 5.65905 9.82583 4.16667 11.6668 4.16667C13.5077 4.16667 15.0001 5.65905 15.0001 7.5C15.0001 9.34095 13.5077 10.8333 11.6668 10.8333C9.82583 10.8333 8.33345 9.34095 8.33345 7.5Z" fill="#200E3A"/>
                <path d="M6.79628 17.106C6.55364 17.4971 6.03991 17.6174 5.64883 17.3748C5.25775 17.1321 5.13741 16.6184 5.38005 16.2273C6.52122 14.388 8.85578 12.5 11.6668 12.5C14.4778 12.5 16.8124 14.388 17.9535 16.2273C18.1962 16.6184 18.0758 17.1321 17.6848 17.3748C17.2937 17.6174 16.7799 17.4971 16.5373 17.106C15.6022 15.5988 13.7371 14.1667 11.6668 14.1667C9.59651 14.1667 7.73141 15.5988 6.79628 17.106Z" fill="#200E3A"/>
                <path d="M6.58166 5.46643C6.7843 5.87966 6.61358 6.37891 6.20035 6.58155C5.44313 6.95287 5.00011 7.62649 5.00011 8.33333C5.00011 9.04017 5.44313 9.7138 6.20035 10.0851C6.61358 10.2878 6.7843 10.787 6.58166 11.2002C6.37903 11.6135 5.87977 11.7842 5.46654 11.5815C4.23587 10.9781 3.33345 9.77794 3.33345 8.33333C3.33345 6.88872 4.23587 5.6886 5.46654 5.08512C5.87977 4.88248 6.37903 5.0532 6.58166 5.46643Z" fill="#200E3A"/>
                <path d="M3.46295 17.106C3.22031 17.4971 2.70658 17.6174 2.3155 17.3748C1.92442 17.1321 1.80408 16.6184 2.04672 16.2273C2.5293 15.4495 3.30141 14.8003 4.16281 14.2966C4.56011 14.0643 5.07052 14.198 5.30283 14.5953C5.53515 14.9926 5.40141 15.503 5.00411 15.7354C4.28435 16.1562 3.75479 16.6356 3.46295 17.106Z" fill="#200E3A"/>
                </g>
                </g>
                </svg>
                '; ?> <?php $__env->endSlot(); ?>
                 <?php $__env->slot('navpage', null, []); ?> Current Employees <?php $__env->endSlot(); ?>
                 <?php $__env->slot('badge', null, []); ?> 21 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <?php if(session('employee')->division_name == "APHSO Department"): ?>
        <div class="w-full px-2 py-4 flex-col justify-start items-start gap-1 relative">
            <div class="self-stretch p-3 justify-start items-center gap-2.5 inline-flex">
                <div class="grow shrink basis-0 text-[#211c6a] text-base font-bold leading-normal">User Management</div>
            </div>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('divisions'),'active' => request()->routeIs('divisions')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('divisions')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('divisions'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / building-5">
                <g id="icon">
                <path d="M7.91658 5.83333C7.91658 6.29357 7.54349 6.66667 7.08325 6.66667H6.24992C5.78968 6.66667 5.41658 6.29357 5.41658 5.83333C5.41658 5.3731 5.78968 5 6.24992 5H7.08325C7.54349 5 7.91658 5.3731 7.91658 5.83333Z" fill="#200E3A"/>
                <path d="M10.4166 9.16667C10.8768 9.16667 11.2499 8.79357 11.2499 8.33333C11.2499 7.8731 10.8768 7.5 10.4166 7.5H9.58325C9.12301 7.5 8.74992 7.8731 8.74992 8.33333C8.74992 8.79357 9.12301 9.16667 9.58325 9.16667H10.4166Z" fill="#200E3A"/>
                <path d="M7.91658 10.8333C7.91658 11.2936 7.54349 11.6667 7.08325 11.6667H6.24992C5.78968 11.6667 5.41658 11.2936 5.41658 10.8333C5.41658 10.3731 5.78968 10 6.24992 10H7.08325C7.54349 10 7.91658 10.3731 7.91658 10.8333Z" fill="#200E3A"/>
                <path d="M10.4166 6.66667C10.8768 6.66667 11.2499 6.29357 11.2499 5.83333C11.2499 5.3731 10.8768 5 10.4166 5H9.58325C9.12301 5 8.74992 5.3731 8.74992 5.83333C8.74992 6.29357 9.12301 6.66667 9.58325 6.66667H10.4166Z" fill="#200E3A"/>
                <path d="M7.91658 8.33333C7.91658 8.79357 7.54349 9.16667 7.08325 9.16667H6.24992C5.78968 9.16667 5.41658 8.79357 5.41658 8.33333C5.41658 7.8731 5.78968 7.5 6.24992 7.5H7.08325C7.54349 7.5 7.91658 7.8731 7.91658 8.33333Z" fill="#200E3A"/>
                <path d="M10.4166 11.6667C10.8768 11.6667 11.2499 11.2936 11.2499 10.8333C11.2499 10.3731 10.8768 10 10.4166 10H9.58325C9.12301 10 8.74992 10.3731 8.74992 10.8333C8.74992 11.2936 9.12301 11.6667 9.58325 11.6667H10.4166Z" fill="#200E3A"/>
                <path d="M7.91658 13.3333C7.91658 13.7936 7.54349 14.1667 7.08325 14.1667H6.24992C5.78968 14.1667 5.41658 13.7936 5.41658 13.3333C5.41658 12.8731 5.78968 12.5 6.24992 12.5H7.08325C7.54349 12.5 7.91658 12.8731 7.91658 13.3333Z" fill="#200E3A"/>
                <path d="M10.4166 14.1667C10.8768 14.1667 11.2499 13.7936 11.2499 13.3333C11.2499 12.8731 10.8768 12.5 10.4166 12.5H9.58325C9.12301 12.5 8.74992 12.8731 8.74992 13.3333C8.74992 13.7936 9.12301 14.1667 9.58325 14.1667H10.4166Z" fill="#200E3A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33325 4.16667C3.33325 3.24619 4.07944 2.5 4.99992 2.5H11.6666C12.5871 2.5 13.3333 3.24619 13.3333 4.16667V7.5H15.8333C16.7537 7.5 17.4999 8.24619 17.4999 9.16667V15.8333H18.3333C18.7935 15.8333 19.1666 16.2064 19.1666 16.6667C19.1666 17.1269 18.7935 17.5 18.3333 17.5H1.66659C1.20635 17.5 0.833252 17.1269 0.833252 16.6667C0.833252 16.2064 1.20635 15.8333 1.66659 15.8333H3.33325V4.16667ZM4.99992 15.8333H11.6666V4.16667H4.99992V15.8333ZM15.8333 12.5V11.6667H15.4166C14.9563 11.6667 14.5833 11.2936 14.5833 10.8333C14.5833 10.3731 14.9563 10 15.4166 10H15.8333V9.16667H13.3333V15.8333H15.8333V14.1667H15.4166C14.9563 14.1667 14.5833 13.7936 14.5833 13.3333C14.5833 12.8731 14.9563 12.5 15.4166 12.5H15.8333Z" fill="#200E3A"/>
                </g>
                </g>
                </svg>
                '; ?> <?php $__env->endSlot(); ?>
                 <?php $__env->slot('navpage', null, []); ?> Your Divisions <?php $__env->endSlot(); ?>
                 <?php $__env->slot('badge', null, []); ?> 3 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('employees.index'),'active' => request()->routeIs('employees.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('employees.index')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('employees.index'))]); ?>
                 <?php $__env->slot('icons', null, []); ?> <?php echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="icon / users">
                <g id="icon">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6668 2.5C8.90536 2.5 6.66678 4.73858 6.66678 7.5C6.66678 10.2614 8.90536 12.5 11.6668 12.5C14.4282 12.5 16.6668 10.2614 16.6668 7.5C16.6668 4.73858 14.4282 2.5 11.6668 2.5ZM8.33345 7.5C8.33345 5.65905 9.82583 4.16667 11.6668 4.16667C13.5077 4.16667 15.0001 5.65905 15.0001 7.5C15.0001 9.34095 13.5077 10.8333 11.6668 10.8333C9.82583 10.8333 8.33345 9.34095 8.33345 7.5Z" fill="#200E3A"/>
                <path d="M6.79628 17.106C6.55364 17.4971 6.03991 17.6174 5.64883 17.3748C5.25775 17.1321 5.13741 16.6184 5.38005 16.2273C6.52122 14.388 8.85578 12.5 11.6668 12.5C14.4778 12.5 16.8124 14.388 17.9535 16.2273C18.1962 16.6184 18.0758 17.1321 17.6848 17.3748C17.2937 17.6174 16.7799 17.4971 16.5373 17.106C15.6022 15.5988 13.7371 14.1667 11.6668 14.1667C9.59651 14.1667 7.73141 15.5988 6.79628 17.106Z" fill="#200E3A"/>
                <path d="M6.58166 5.46643C6.7843 5.87966 6.61358 6.37891 6.20035 6.58155C5.44313 6.95287 5.00011 7.62649 5.00011 8.33333C5.00011 9.04017 5.44313 9.7138 6.20035 10.0851C6.61358 10.2878 6.7843 10.787 6.58166 11.2002C6.37903 11.6135 5.87977 11.7842 5.46654 11.5815C4.23587 10.9781 3.33345 9.77794 3.33345 8.33333C3.33345 6.88872 4.23587 5.6886 5.46654 5.08512C5.87977 4.88248 6.37903 5.0532 6.58166 5.46643Z" fill="#200E3A"/>
                <path d="M3.46295 17.106C3.22031 17.4971 2.70658 17.6174 2.3155 17.3748C1.92442 17.1321 1.80408 16.6184 2.04672 16.2273C2.5293 15.4495 3.30141 14.8003 4.16281 14.2966C4.56011 14.0643 5.07052 14.198 5.30283 14.5953C5.53515 14.9926 5.40141 15.503 5.00411 15.7354C4.28435 16.1562 3.75479 16.6356 3.46295 17.106Z" fill="#200E3A"/>
                </g>
                </g>
                </svg>
                '; ?> <?php $__env->endSlot(); ?>
                 <?php $__env->slot('navpage', null, []); ?> Your Employees <?php $__env->endSlot(); ?>
                 <?php $__env->slot('badge', null, []); ?> 21 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

        <!--Profile Dropdown-->
        <div class = "container bottom-0 left-0 absolute">
            <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'left','width' => '100%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'left','width' => '100%']); ?>
                 <?php $__env->slot('trigger', null, []); ?> 
                    <button class="w-full h-[73px]">
                        <div class="w-full h-[73px] left-0 top-0 absolute bg-[#200e3a] flex-col justify-start items-start inline-flex">
                            <div class="self-stretch h-[72px] px-6 py-4 bg-[#005791]/70 justify-start items-center gap-3 inline-flex">
                                <div class="grow shrink basis-0 h-10 justify-start items-center gap-3 flex">
                                    <div class="grow shrink basis-0 h-10 justify-start items-center gap-3 flex">
                                        <div class="w-10 h-10 justify-center items-center flex">
                                            <img class="w-10 h-10 rounded-[200px] border border-white" src="https://via.placeholder.com/40x40" />
                                        </div>
                                        <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                            <div class="self-stretch text-[#efefef] text-sm font-medium leading-tight"><?php echo e(session('employee')->full_name); ?></div>
                                            <div class="self-stretch text-[#efefef] text-sm font-normal leading-tight"><?php echo e(session('employee')->division_name); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-6 h-6 right-4 top-[24px] absolute">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / chevron-up">
                                <path id="icon" d="M10.6293 7.91689C11.3994 7.19209 12.6006 7.19209 13.3707 7.91689L21.1854 15.2718C21.5875 15.6504 21.6067 16.2832 21.2282 16.6854C20.8497 17.0876 20.2168 17.1068 19.8146 16.7282L12 9.37329L4.18537 16.7282C3.78319 17.1068 3.15032 17.0876 2.7718 16.6854C2.39329 16.2832 2.41246 15.6504 2.81464 15.2718L10.6293 7.91689Z" fill="#FFF6E9"/>
                                </g>
                            </svg>
                        </div>
                    </button>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('employees.edit')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('employees.edit'))]); ?>
                        <?php echo e(__('Your Profile')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>

                    <form action="<?php echo e(route('logout')); ?>" method = "POST">
                        <?php echo csrf_field(); ?>

                        <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                    this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                    this.closest(\'form\').submit();']); ?>
                            <?php echo e(__('Log Out')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                    </form>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
        </div>
</aside>
  <!-- Sidebar -->
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>