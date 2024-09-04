<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dispatch-orders.form', [])->html();
} elseif ($_instance->childHasBeenRendered('nHcJE2e')) {
    $componentId = $_instance->getRenderedChildComponentId('nHcJE2e');
    $componentTag = $_instance->getRenderedChildComponentTagName('nHcJE2e');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nHcJE2e');
} else {
    $response = \Livewire\Livewire::mount('dispatch-orders.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('nHcJE2e', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/create/create.blade.php ENDPATH**/ ?>