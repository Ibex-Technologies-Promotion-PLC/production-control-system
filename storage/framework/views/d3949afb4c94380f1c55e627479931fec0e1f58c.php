<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('work-orders.daily.wo-prepare', ['workOrder' => $workOrder])->html();
} elseif ($_instance->childHasBeenRendered('1WUur4g')) {
    $componentId = $_instance->getRenderedChildComponentId('1WUur4g');
    $componentTag = $_instance->getRenderedChildComponentTagName('1WUur4g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1WUur4g');
} else {
    $response = \Livewire\Livewire::mount('work-orders.daily.wo-prepare', ['workOrder' => $workOrder]);
    $html = $response->html();
    $_instance->logRenderedChild('1WUur4g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/prepare/prepare.blade.php ENDPATH**/ ?>