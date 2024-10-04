<div <?php echo e($attributes->merge(['class' => 'mb-6 p-4 rounded-sm flex-1 bg-white'])); ?>>
    <div class="font-bold pb-2"><?php echo e(__('inventory.lot_numbers_of_product', ['product' => $product->prd_name])); ?></div>
    <div class="flex flex-col gap-4 text-white border p-4 rounded-t">
        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $product->lots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="text-sm px-2 py-2 font-bold bg-green-800 hover:bg-green-600 shadow-md rounded-md flex justify-between duration-200 ease-in-out">
                <div>
                    <i class="box icon"></i>
                    <label class="font-bold"><?php echo e(__('inventory.lot_number')); ?></label>
                    <span><?php echo e($lot['lot_number']); ?></span>
                </div>
                <div>
                    <!--[if BLOCK]><![endif]--><?php if($lot['reserved_amount']): ?>
                        <span><?php echo e($lot['amount_string']); ?></span>
                        <span class="text-xs text-gray-200"> - <?php echo e($lot['reserved_amount_string']); ?></span>
                    <?php else: ?> 
                        <span><?php echo e($lot['amount_string']); ?></span>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div>
                    <span class="px-1 bg-white text-black rounded-sm shadow"><?php echo e($lot['available_amount_string']); ?></span>
                    <span><?php echo e(__('inventory.available')); ?></span>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="p-2 h-full w-full bg-red-900 hover:bg-red-700 font-bold rounded duration-200 ease-in-out">
                <i class="triangle exclamation icon"></i>
                <?php echo e(__('inventory.out_of_stock')); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div class=" p-4 bg-gray-700 text-white rounded-b flex justify-between font-bold shadow-md">
        <div>
            <?php echo e(__('common.total')); ?>

            <!--[if BLOCK]><![endif]--><?php if($product->totalStock['reserved_amount']): ?>
                <?php echo e(number_format($product->totalStock['amount'], 6)); ?> 
                <?php if (isset($component)) { $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5 = $attributes; } ?>
<?php $component = App\View\Components\Span::resolve(['tooltip' => ''.e(__('inventory.reserved')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Span::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xs text-ease-red']); ?>
                    - <?php echo e($product->totalStock['reserved_amount_string']); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $attributes = $__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__attributesOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5)): ?>
<?php $component = $__componentOriginaleec1da765ed3218d03288cbfb54cb4e5; ?>
<?php unset($__componentOriginaleec1da765ed3218d03288cbfb54cb4e5); ?>
<?php endif; ?>
            <?php else: ?>
                <?php echo e($product->totalStock['amount_string']); ?>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div>
            <span><?php echo e($product->totalStock['available_amount_string']); ?> </span>
            <span class="text-xs"><?php echo e(__('inventory.available')); ?></span>
        </div>
    </div>

</div><?php /**PATH /var/www/html/resources/views/components/product-lots.blade.php ENDPATH**/ ?>