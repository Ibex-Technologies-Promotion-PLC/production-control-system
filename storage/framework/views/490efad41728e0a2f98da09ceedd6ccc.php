<!--[if BLOCK]><![endif]--><?php if($deleteModal): ?>
    <div x-data="{deleteModal: <?php if ((object) ('deleteModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('deleteModal'->value()); ?>')<?php echo e('deleteModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('deleteModal'); ?>')<?php endif; ?>}">
        <?php if (isset($component)) { $__componentOriginalc03504754ab0dd3dd37ca30b514b3449 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc03504754ab0dd3dd37ca30b514b3449 = $attributes; } ?>
<?php $component = App\View\Components\Confirm::resolve(['active' => 'deleteModal','color' => 'red','atConfirm' => 'confirmDelete()'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Confirm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div class="pb-5"><i class="large triangle exclamation icon text-red-700 hover:text-red-500 ease"></i></div>
            <span><?php echo e(__('common.are_you_sure_you_want_to_delete')); ?></span>
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
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /var/www/html/resources/views/web/helpers/deletable.blade.php ENDPATH**/ ?>