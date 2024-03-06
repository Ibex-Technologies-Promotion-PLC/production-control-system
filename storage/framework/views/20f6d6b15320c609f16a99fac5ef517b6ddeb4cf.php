<?php if($do_form_modal): ?>
    <div x-data="{do_form_modal: <?php if ((object) ('do_form_modal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('do_form_modal'->value()); ?>')<?php echo e('do_form_modal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('do_form_modal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['active' => 'do_form_modal','position' => 'center']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dispatch-orders.form', [])->html();
} elseif ($_instance->childHasBeenRendered('l22923682-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l22923682-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l22923682-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l22923682-0');
} else {
    $response = \Livewire\Livewire::mount('dispatch-orders.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('l22923682-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/sections/dispatchorders/daily/form-modal.blade.php ENDPATH**/ ?>