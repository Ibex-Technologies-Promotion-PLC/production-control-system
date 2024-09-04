<?php if($wo_form_modal): ?>
    <div x-data="{wo_form_modal: <?php if ((object) ('wo_form_modal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('wo_form_modal'->value()); ?>')<?php echo e('wo_form_modal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('wo_form_modal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'wo_form_modal','position' => 'center']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('work-orders.form', [])->html();
} elseif ($_instance->childHasBeenRendered('create-work-order-modal')) {
    $componentId = $_instance->getRenderedChildComponentId('create-work-order-modal');
    $componentTag = $_instance->getRenderedChildComponentTagName('create-work-order-modal');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('create-work-order-modal');
} else {
    $response = \Livewire\Livewire::mount('work-orders.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('create-work-order-modal', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/form-modal.blade.php ENDPATH**/ ?>