<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.dashboard', [])->html();
} elseif ($_instance->childHasBeenRendered('WDXw39P')) {
    $componentId = $_instance->getRenderedChildComponentId('WDXw39P');
    $componentTag = $_instance->getRenderedChildComponentTagName('WDXw39P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WDXw39P');
} else {
    $response = \Livewire\Livewire::mount('dashboard.dashboard', []);
    $html = $response->html();
    $_instance->logRenderedChild('WDXw39P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/web/sections/dashboard/index.blade.php ENDPATH**/ ?>