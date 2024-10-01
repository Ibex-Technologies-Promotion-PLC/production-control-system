<?php if (isset($component)) { $__componentOriginal522a3c8aadb4ccbcc229d59265244da1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal522a3c8aadb4ccbcc229d59265244da1 = $attributes; } ?>
<?php $component = App\View\Components\PageHeader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('customHeader', null, []); ?> 
        <div class="flex gap-2 text-xs md:text-base">
            <span class="font-bold">1</span>
            <span class="border-b-2 border-black pb-1" data-tooltip="<?php echo e(__('products.defined_base_unit_for_the_product', ['product' => $selectedProduct->prd_name])); ?>"
                data-variation="mini" data-position="top left">
                <!--[if BLOCK]><![endif]--><?php if($selectedProduct->baseUnit): ?>
                <?php echo e($selectedProduct->baseUnit->name); ?>


                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </span>
            <span class="font-bold text-red-700"><?php echo e($selectedProduct->prd_name); ?></span>
            <span class="text-gray-600"><?php echo e(__('recipes.includes')); ?></span>
        </div>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('buttons', null, []); ?> 
        <!--[if BLOCK]><![endif]--><?php if( ! $this->isLocked()): ?>
        <div class="ui mini icon buttons">
            <button wire:click.prevent @click="materials = true" class="ui mini teal button" data-tooltip="<?php echo e(__('recipes.add_ingredients')); ?>" data-variation="mini">
                <i class="plus icon"></i>
            </button>
            
            
        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/recipes/create/sub-header.blade.php ENDPATH**/ ?>