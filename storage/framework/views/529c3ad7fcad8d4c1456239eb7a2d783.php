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
    $sidebarBg = '#94D0F8';  // Default background color
    $activeBg = '#fff6e9';   // Active background color
    $hoverBg = '#dcdcdc';    // Hover background color
?>

<a <?php echo e($attributes->merge([
    'class' => 'w-full h-11 px-4 py-4 rounded justify-start items-center gap-1 inline-flex font-semibold text-[#200e3a] hover:bg-[#fff6e9]',
    'style' => $active ? "background-color: $activeBg;" : "background-color: $sidebarBg;",
])); ?>>
    <div class="py-3 grow shrink basis-0 justify-start items-start gap-3 flex">
        <div class="w-5 h-5"><?php echo e($icons); ?></div>
        <div class="grow shrink basis-0 text-sm leading-tight"><?php echo e($navpage); ?></div>
        <?php if($badge): ?>
        <div class="px-2 bg-[#eaeaea] rounded-[10px] right-0 inline-flex">
            <div class="text-xs font-medium"><?php echo e($badge); ?></div>
        </div>
        <?php endif; ?>
    </div>
</a>
<?php /**PATH C:\Users\loric\OneDrive\Documents\Capstone Files\settlewise\resources\views/components/nav-link.blade.php ENDPATH**/ ?>