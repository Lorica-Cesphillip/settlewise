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
        <!--Necessary Buttons-->
    <div class = "w-full flex row-span-3 h-20 columns-2">
        <!--Add New Employee and Refresh Buttons-->
        <div class = "inline-flex gap-3 h-14 justify-end right-0">
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
                 <?php $__env->slot('name', null, []); ?> Create New Division <?php $__env->endSlot(); ?>
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

    <div class = "w-full self-stretch h-full p-2">
        <table class = "table-fixed border-b-2">
            <thead>
                <tr class = "border-b-2">
                    <th class = "w-[150px] h-[30px] p-3 justify-start">Division Id</th>
                    <th class = "w-[250px] h-[30px] p-3 justify-start">Division Name</th>
                    <th class = "w-[150px] h-[30px] p-3 justify-start">Abbreviation</th>
                    <th class = "w-[230px] h-[30px] p-3 justify-start">Division Head</th>
                    <th class = "w-[230px] h-[30px] p-3 justify-start">Position</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Number of Employees</th>
                    <th class = "w-[200px] h-[30px] p-3 justify-start">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class = "border-b-2">
                    <td class = "w-[150px] h-[45px] p-3 justify-start"><?php echo e($division->division_id); ?></td>
                    <td class = "w-[250px] h-[45px] p-3 justify-start">
                        <?php if($division->division_name == "APHSO Department"): ?>
                        <?php echo e($division->division_name); ?>

                        <?php else: ?>
                        <?php echo e($division->division_name); ?> Division
                        <?php endif; ?>
                    </td>
                    <td class = "w-[150px] h-[45px] p-3 justify-start"><?php echo e($division->abbreviation); ?></td>
                    <td class = "w-[230px] h-[45px] p-3 justify-start"></td>
                    <td class = "w-[230px] h-[45px] p-3 justify-start"></td>
                    <td class = "w-[200px] h-[45px] p-3 justify-start">5</td>
                    <td class = "w-[200px] h-[45px] p-2 justify-center inline-flex gap-3">
                        <a href="#">
                            <svg width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / pencil">
                                <path id="icon" fill-rule="evenodd" clip-rule="evenodd" d="M17.4846 2.93333C16.1178 1.56649 13.9017 1.56649 12.5349 2.93333L12.0084 3.45977L3.81387 11.6543C3.20188 12.2663 2.80489 13.0603 2.6825 13.9171L2.42322 15.732C2.23466 17.0519 3.36603 18.1833 4.68597 17.9947L6.50087 17.7354C7.35765 17.613 8.15163 17.216 8.76361 16.6041L16.9582 8.40952L17.4846 7.88308C18.8514 6.51624 18.8514 4.30016 17.4846 2.93333ZM16.2357 6.27287L14.1451 4.1822C14.7305 3.76823 15.5462 3.82335 16.0704 4.34754C16.5946 4.87174 16.6497 5.68739 16.2357 6.27287ZM12.7155 5.58109L14.8368 7.70241L7.3494 15.1898C7.04341 15.4958 6.64642 15.6943 6.21803 15.7555L4.40312 16.0148L4.66239 14.1999C4.72359 13.7715 4.92209 13.3745 5.22808 13.0685L12.7155 5.58109Z" fill="#667185"/>
                                </g>
                            </svg>

                        </a>
                        <a href="#">
                            <svg width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / bin">
                                    <g id="icon">
                                        <path d="M7.91659 1.45825C7.57021 1.45825 7.25994 1.67253 7.13727 1.99646L6.94594 2.50169C6.53579 2.46071 6.1579 2.41981 5.85199 2.38546C5.62331 2.35978 5.43533 2.33782 5.30475 2.32231L5.15413 2.30424L5.10298 2.29798C4.64623 2.24143 4.22947 2.56576 4.17291 3.02251C4.11635 3.47925 4.44076 3.89537 4.89751 3.95194L4.95317 3.95874L5.10815 3.97734C5.24177 3.99322 5.43333 4.01559 5.66602 4.04172C6.13099 4.09393 6.76207 4.16132 7.42419 4.22175C8.31734 4.30326 9.29636 4.37492 9.99992 4.37492C10.7035 4.37492 11.6825 4.30326 12.5757 4.22175C13.2378 4.16132 13.8689 4.09393 14.3338 4.04172C14.5665 4.01559 14.7581 3.99322 14.8917 3.97734L15.0467 3.95874L15.1022 3.95195C15.559 3.89539 15.8835 3.47925 15.8269 3.02251C15.7704 2.56576 15.3543 2.24135 14.8975 2.2979L14.8457 2.30424L14.6951 2.32231C14.5645 2.33782 14.3765 2.35978 14.1479 2.38546C13.842 2.41981 13.4641 2.46071 13.0539 2.50169L12.8626 1.99646C12.7399 1.67253 12.4296 1.45825 12.0833 1.45825H7.91659Z" fill="#667185"/>
                                        <path d="M9.16659 9.79159C9.16659 9.33135 8.79349 8.95825 8.33326 8.95825C7.87302 8.95825 7.49992 9.33135 7.49992 9.79159V13.9583C7.49992 14.4185 7.87302 14.7916 8.33326 14.7916C8.79349 14.7916 9.16659 14.4185 9.16659 13.9583V9.79159Z" fill="#667185"/>
                                        <path d="M11.6666 8.95825C12.1268 8.95825 12.4999 9.33135 12.4999 9.79159V13.9583C12.4999 14.4185 12.1268 14.7916 11.6666 14.7916C11.2064 14.7916 10.8333 14.4185 10.8333 13.9583V9.79159C10.8333 9.33135 11.2064 8.95825 11.6666 8.95825Z" fill="#667185"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.758 6.70872C15.8335 5.65141 14.9219 4.80378 13.886 4.9235C12.826 5.046 11.1902 5.20825 9.99992 5.20825C8.80964 5.20825 7.17387 5.046 6.11385 4.9235C5.07791 4.80378 4.16636 5.65141 4.24188 6.70872L4.95583 16.7039C5.00995 17.4616 5.57431 18.1023 6.34879 18.2187C7.1793 18.3436 8.70321 18.5431 10.0009 18.5416C11.2826 18.5401 12.8127 18.3415 13.6469 18.2177C14.4227 18.1026 14.9899 17.4616 15.0442 16.7017L15.758 6.70872ZM14.0773 6.57915C14.0802 6.57881 14.0824 6.57901 14.0824 6.57901L14.0846 6.57951C14.0865 6.58015 14.0894 6.58167 14.0923 6.5844C14.0942 6.5862 14.0956 6.5884 14.0956 6.5884L14.0955 6.58997L13.3825 16.572C12.557 16.694 11.142 16.8736 9.99896 16.8749C8.8435 16.8763 7.43732 16.6965 6.61744 16.5737L5.90431 6.58997L5.90425 6.5884C5.90425 6.5884 5.90567 6.5862 5.90757 6.5844C5.91044 6.58167 5.91335 6.58015 5.9152 6.57951L5.9174 6.57901C5.9174 6.57901 5.91962 6.57881 5.92251 6.57915C6.98441 6.70187 8.70446 6.87492 9.99992 6.87492C11.2954 6.87492 13.0154 6.70187 14.0773 6.57915Z" fill="#667185"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/documents/aphso-divisions.blade.php ENDPATH**/ ?>