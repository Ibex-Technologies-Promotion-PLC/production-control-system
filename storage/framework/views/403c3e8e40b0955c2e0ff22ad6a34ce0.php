<div class="flex-1 mb-6 p-4 border-dashed rounded-sm border hover:border-teal-500">
    <label class="font-bold"><?php echo e(__('products.measure_units_that_belongs_to_product')); ?></label>
    <div class="flex flex-col gap-4 pt-4 text-white">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $product->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="text-sm font-semibold bg-teal-600 hover:bg-teal-500 p-2 shadow-md rounded-md duration-200 ease-in-out">
            <i class="balance scale icon"></i>
            1 <?php echo e($unit->name); ?> =
            <span class="px-1 bg-white text-black rounded-sm shadow">1 <?php echo e($unit->operator ? '*' : '/'); ?> <?php echo e((float)$unit->factor); ?> <?php echo e(optional($unit->parent)->name); ?></span>
            <!--[if BLOCK]><![endif]--><?php if($product->baseUnit): ?>
            <!--[if BLOCK]><![endif]--><?php if($unit->id == $product->baseUnit->id): ?>
            <span class="text-xs"> (<?php echo e(__('common.base')); ?>)</span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div><?php /**PATH /var/www/html/resources/views/components/product-units.blade.php ENDPATH**/ ?>