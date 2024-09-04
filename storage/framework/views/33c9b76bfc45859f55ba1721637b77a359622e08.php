<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalce0295373298096193c2baee2164d0dc314888de = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Container::class, []); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('recipes.datatable', [])->html();
} elseif ($_instance->childHasBeenRendered('fetqPIC')) {
    $componentId = $_instance->getRenderedChildComponentId('fetqPIC');
    $componentTag = $_instance->getRenderedChildComponentTagName('fetqPIC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fetqPIC');
} else {
    $response = \Livewire\Livewire::mount('recipes.datatable', []);
    $html = $response->html();
    $_instance->logRenderedChild('fetqPIC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0295373298096193c2baee2164d0dc314888de)): ?>
<?php $component = $__componentOriginalce0295373298096193c2baee2164d0dc314888de; ?>
<?php unset($__componentOriginalce0295373298096193c2baee2164d0dc314888de); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/recipes/index.blade.php ENDPATH**/ ?>