<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div>
		<?php if (isset($component)) { $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content::class, ['theme' => 'blue']); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			 <?php $__env->slot('header', null, []); ?> 
				<?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, ['icon' => 'brown box','header' => 'products.create.header','subheader' => 'products.create.subheader']); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?>
			 <?php $__env->endSlot(); ?>
			<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('products.form', [])->html();
} elseif ($_instance->childHasBeenRendered('YZCEcL8')) {
    $componentId = $_instance->getRenderedChildComponentId('YZCEcL8');
    $componentTag = $_instance->getRenderedChildComponentTagName('YZCEcL8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YZCEcL8');
} else {
    $response = \Livewire\Livewire::mount('products.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('YZCEcL8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3)): ?>
<?php $component = $__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3; ?>
<?php unset($__componentOriginal6ee5fb804927a3b3bdf60037082173f3fd53cef3); ?>
<?php endif; ?>
	</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/products/create.blade.php ENDPATH**/ ?>