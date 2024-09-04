<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('companies.datatable', [])->html();
} elseif ($_instance->childHasBeenRendered('VPwuXTm')) {
    $componentId = $_instance->getRenderedChildComponentId('VPwuXTm');
    $componentTag = $_instance->getRenderedChildComponentTagName('VPwuXTm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VPwuXTm');
} else {
    $response = \Livewire\Livewire::mount('companies.datatable', []);
    $html = $response->html();
    $_instance->logRenderedChild('VPwuXTm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/companies/index/index.blade.php ENDPATH**/ ?>