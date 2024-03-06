<?php if($deleteModal): ?>
    <div x-data="{deleteModal: <?php if ((object) ('deleteModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('deleteModal'->value()); ?>')<?php echo e('deleteModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('deleteModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Confirm::class, ['active' => 'deleteModal','color' => 'red','atConfirm' => 'confirmDelete()']); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <div class="pb-5"><i class="large triangle exclamation icon text-red-700 hover:text-red-500 ease"></i></div>
            <span><?php echo e(__('common.are_you_sure_you_want_to_delete')); ?></span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2)): ?>
<?php $component = $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2; ?>
<?php unset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2); ?>
<?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/web/helpers/deletable.blade.php ENDPATH**/ ?>