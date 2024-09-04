<?php if (isset($component)) { $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageHeader::class, []); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('customHeader', null, []); ?> 
        <div class="flex gap-2 text-xs md:text-base">
            <span class="font-bold">1</span>
            <span class="border-b-2 border-black pb-1" data-tooltip="<?php echo e(__('products.defined_base_unit_for_the_product', ['product' => $selectedProduct->prd_name])); ?>" 
                data-variation="mini" data-position="top left">
                <?php echo e($selectedProduct->baseUnit->name); ?>

            </span>
            <span class="font-bold text-red-700"><?php echo e($selectedProduct->prd_name); ?></span>
            <span class="text-gray-600"><?php echo e(__('recipes.includes')); ?></span>
        </div>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('buttons', null, []); ?> 
        <?php if( ! $this->isLocked()): ?>
        <div class="ui mini icon buttons">
            <button wire:click.prevent @click="materials = true" class="ui mini teal button" data-tooltip="<?php echo e(__('recipes.add_ingredients')); ?>" data-variation="mini">
                <i class="plus icon"></i>
            </button>
            
            
        </div>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707)): ?>
<?php $component = $__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707; ?>
<?php unset($__componentOriginal013227a727690dac4a34b0837e90e96dcfa3f707); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/recipes/create/sub-header.blade.php ENDPATH**/ ?>