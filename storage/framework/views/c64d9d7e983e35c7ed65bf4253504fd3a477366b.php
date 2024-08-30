<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('recipes.form', [])->html();
} elseif ($_instance->childHasBeenRendered('MLXREKZ')) {
    $componentId = $_instance->getRenderedChildComponentId('MLXREKZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('MLXREKZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MLXREKZ');
} else {
    $response = \Livewire\Livewire::mount('recipes.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('MLXREKZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/recipes/create/create.blade.php ENDPATH**/ ?>