<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, []); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('categories.form', [])->html();
} elseif ($_instance->childHasBeenRendered('gSpQfAg')) {
    $componentId = $_instance->getRenderedChildComponentId('gSpQfAg');
    $componentTag = $_instance->getRenderedChildComponentTagName('gSpQfAg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gSpQfAg');
} else {
    $response = \Livewire\Livewire::mount('categories.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('gSpQfAg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?> <?php /**PATH /var/www/html/resources/views/web/sections/categories/create.blade.php ENDPATH**/ ?>