<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dispatch-orders.form', ['dispatchOrder' => $dispatchOrder])->html();
} elseif ($_instance->childHasBeenRendered('Ys8ebqI')) {
    $componentId = $_instance->getRenderedChildComponentId('Ys8ebqI');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ys8ebqI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ys8ebqI');
} else {
    $response = \Livewire\Livewire::mount('dispatch-orders.form', ['dispatchOrder' => $dispatchOrder]);
    $html = $response->html();
    $_instance->logRenderedChild('Ys8ebqI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/sections/dispatchorders/edit.blade.php ENDPATH**/ ?>