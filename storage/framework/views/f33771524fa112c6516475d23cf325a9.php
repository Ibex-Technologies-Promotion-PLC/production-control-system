
<div>
    <?php if (isset($component)) { $__componentOriginal522a3c8aadb4ccbcc229d59265244da1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1 = $attributes; } ?>
<?php $component = App\View\Components\PageHeader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pt-5 px-4']); ?>
         <?php $__env->slot('customHeader', null, []); ?> 
            <div class="flex">
                <div>
                    <span class="text-red-600"><?php echo e($selectedProduct->prd_name); ?></span>
                    <span class="text-sm"><?php echo e(__('units.units')); ?></span>
                </div>
                <span></span>
            </div>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('buttons', null, []); ?> 
            <button wire:click.prevent="addNewCard" class="ui icon mini teal button"
                data-tooltip="<?php echo e(__('common.add_new')); ?>" data-variation="mini">
                <i class="plus icon"></i>
            </button>
            
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal522a3c8aadb4ccbcc229d59265244da1)): ?>
<?php $attributes = $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1; ?>
<?php unset($__attributesOriginal522a3c8aadb4ccbcc229d59265244da1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal522a3c8aadb4ccbcc229d59265244da1)): ?>
<?php $component = $__componentOriginal522a3c8aadb4ccbcc229d59265244da1; ?>
<?php unset($__componentOriginal522a3c8aadb4ccbcc229d59265244da1); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/html/resources/views/web/sections/units/create/units-header.blade.php ENDPATH**/ ?>