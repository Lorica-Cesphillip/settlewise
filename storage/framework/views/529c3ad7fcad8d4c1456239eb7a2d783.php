<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active', 'icons' => '', 'navpage' => '', 'badge' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['active', 'icons' => '', 'navpage' => '', 'badge' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$classes = ($active ?? false)
            ? 'block w-[250px] px-5 py-3 rounded justify-start items-center gap-1 inline-flex grow shrink basis-0 text-[#200e3a] text-sm font-normal leading-tight text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-[250px] px-5 py-3 rounded justify-start bg-[#fff6e9] items-center gap-1 inline-flex grow shrink basis-0 text-[#200e3a] text-sm font-normal leading-tight text-gray-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
?>

<a class = "<?php echo e($attributes->merge(['class' => $classes])); ?>">
    <div class="py-3 grow shrink basis-0 h-5 justify-start items-start gap-3 flex">
        <div class="w-5 h-5 relative"><?php echo e($icons); ?></div>
        <div class="grow shrink basis-0 text-[#200e3a] text-sm font-medium leading-tight"><?php echo e($navpage); ?></div>
        <div class="px-2 bg-[#eaeaea] rounded-[10px] flex-col justify-center items-center gap-2 inline-flex">
            <div class="justify-center items-center gap-0.5 inline-flex">
                <div class="text-center text-[#200e3a] text-xs font-medium"><?php echo e($badge); ?></div>
            </div>
        </div>
    </div>
</a>
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/components/nav-link.blade.php ENDPATH**/ ?>