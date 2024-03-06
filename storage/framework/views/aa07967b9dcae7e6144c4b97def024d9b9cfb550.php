<div <?php echo e($attributes); ?>>
    <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Table::class, []); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
        <?php if(!$noHead): ?>
        <?php if (isset($component)) { $__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Thead::class, []); ?>
<?php $component->withName('thead'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if(!$noProduct): ?>
                    <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('products.code')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?><?php echo e(__('dispatchorders.lot_number')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TheadItem::class, []); ?>
<?php $component->withName('thead-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?><?php echo e(__('common.amount')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273)): ?>
<?php $component = $__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273; ?>
<?php unset($__componentOriginalb593966bc1b6523f1ed4db1a226ef3ab5868d273); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3)): ?>
<?php $component = $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3; ?>
<?php unset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0)): ?>
<?php $component = $__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0; ?>
<?php unset($__componentOriginalab0dc3a8937a7207b735390b1808d537df279fe0); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tbody::class, []); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-ease hover:bg-cool-gray-100']); ?>
                    <?php if(!$noProduct): ?>
                        <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e($reservation->product->prd_code); ?>

                            <span class="text-sm">(<?php echo e($reservation->product->prd_name); ?>)</span>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        Lot:
                        <span class="text-blue-700 font-bold">
                            <?php echo e($reservation->reserved_lot); ?>

                        </span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                    
                    <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'font-bold right aligned text-blue-700']); ?><?php echo e(number_format($reservation->reserved_amount, 2)); ?> <?php echo e($reservation->product->baseUnit->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3)): ?>
<?php $component = $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3; ?>
<?php unset($__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr class="p-5 bg-red-900 shadow-inner text-white">
                    <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e(__($emptyMessage)); ?>...
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>   
                </tr>                
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954)): ?>
<?php $component = $__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954; ?>
<?php unset($__componentOriginal02aa349d2a738776135d0cc4e0b8932c4c26a954); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>
</div><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/reserved-stocks-table.blade.php ENDPATH**/ ?>