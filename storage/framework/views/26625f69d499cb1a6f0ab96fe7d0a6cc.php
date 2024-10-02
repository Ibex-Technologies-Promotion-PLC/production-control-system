<!--[if BLOCK]><![endif]--><?php if($deleteConfirmModal): ?>
    <div x-data="{ deleteConfirmModal: <?php if ((object) ('deleteConfirmModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('deleteConfirmModal'->value()); ?>')<?php echo e('deleteConfirmModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('deleteConfirmModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginalc03504754ab0dd3dd37ca30b514b3449 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449 = $attributes; } ?>
<?php $component = App\View\Components\Confirm::resolve(['active' => 'deleteConfirmModal','color' => 'red','confirm' => ''.e(__('common.delete')).'','deny' => ''.e(__('common.cancel')).'','atConfirm' => 'removeRecipe()','atDeny' => 'closeDeleteConfirmModal()'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Confirm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('recipes.are_you_sure_you_want_to_delete_this_recipe')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $attributes = $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $component = $__componentOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]--><?php if($formChangedModal): ?>
    <div x-data="{ formChangedModal: <?php if ((object) ('formChangedModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('formChangedModal'->value()); ?>')<?php echo e('formChangedModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('formChangedModal'); ?>')<?php endif; ?> }" x-cloak>
        <?php if (isset($component)) { $__componentOriginalc03504754ab0dd3dd37ca30b514b3449 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449 = $attributes; } ?>
<?php $component = App\View\Components\Confirm::resolve(['active' => $active ?? 'deleteConfirmModal','color' => 'red','confirm' => ''.e(__('common.delete')).'','deny' => ''.e(__('common.cancel')).'','atConfirm' => 'removeRecipe()','atDeny' => 'closeDeleteConfirmModal()'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Confirm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(__('recipes.are_you_sure_you_want_to_delete_this_recipe')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $attributes = $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__attributesOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449)): ?>
<?php $component = $__componentOriginalc03504754ab0dd3dd37ca30b514b3449; ?>
<?php unset($__componentOriginalc03504754ab0dd3dd37ca30b514b3449); ?>
<?php endif; ?>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/web/sections/recipes/create/recipe-modals.blade.php ENDPATH**/ ?>