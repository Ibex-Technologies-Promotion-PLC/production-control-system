<?php if($deleteConfirmModal): ?>
    <div x-data="{ deleteConfirmModal: <?php if ((object) ('deleteConfirmModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('deleteConfirmModal'->value()); ?>')<?php echo e('deleteConfirmModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('deleteConfirmModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Confirm::class, ['active' => 'deleteConfirmModal','color' => 'red','confirm' => ''.e(__('common.delete')).'','deny' => ''.e(__('common.cancel')).'','atConfirm' => 'removeRecipe()','atDeny' => 'closeDeleteConfirmModal()']); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('recipes.are_you_sure_you_want_to_delete_this_recipe')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2)): ?>
<?php $component = $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2; ?>
<?php unset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2); ?>
<?php endif; ?>
    </div>
<?php endif; ?>

<?php if($formChangedModal): ?>
    <div x-data="{ formChangedModal: <?php if ((object) ('formChangedModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('formChangedModal'->value()); ?>')<?php echo e('formChangedModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('formChangedModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Confirm::class, ['active' => $active ?? 'deleteConfirmModal','color' => 'red','confirm' => ''.e(__('common.delete')).'','deny' => ''.e(__('common.cancel')).'','atConfirm' => 'removeRecipe()','atDeny' => 'closeDeleteConfirmModal()']); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('recipes.are_you_sure_you_want_to_delete_this_recipe')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2)): ?>
<?php $component = $__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2; ?>
<?php unset($__componentOriginalda49da6e6128c88ed991b32d9f9f20b2cec757e2); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/web/sections/recipes/create/recipe-modals.blade.php ENDPATH**/ ?>