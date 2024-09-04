<div <?php echo e($attributes->merge(['class' => 'h-full'])); ?>>
    <?php if($listings): ?>
        <div class="h-full flex flex-col gap-5 relative">
            <?php if(!$noHeader): ?>
                <div class="py-5 text-center shadow">
                    <h5 class="leading-tight font-light text-ease"><?php echo e($headerText); ?></h5>
                </div>
            <?php endif; ?>
            <div class="p-8">
        
                <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalf2fc224c8bcecadd2dbd7eee99c890638bb249e1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomList::class, []); ?>
<?php $component->withName('custom-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:key' => ''.e($loop->index).'']); ?>
                        <div class="flex items-center gap-1">
                            <div><?php echo e($item['ingredient']->prd_name); ?></div>
                            <span class="text-xs hidden md:block"> (<?php echo e($item['ingredient']->prd_code); ?>)</span> 
                        </div>
                        <div>
                            <?php if($item['ingredient']->pivot->literal): ?> <span class="text-xs text-ease-green"><?php echo e(__('common.net')); ?></span>
                            <?php else: ?> <span class="text-xs text-ease-green"><?php echo e(__('common.variable')); ?></span>
                            <?php endif; ?>
                            <span>
                                <?php echo e(number_format($item['amount'],2)); ?>

                            </span>
                            <span>
                                <?php echo e($item['unit']->name); ?>

                            </span>
                            <span class="ml-1 bg-black text-white p-1 rounded-sm">
                                <?php echo e(number_format($item['cost'], 2)); ?> Br
                            </span>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2fc224c8bcecadd2dbd7eee99c890638bb249e1)): ?>
<?php $component = $__componentOriginalf2fc224c8bcecadd2dbd7eee99c890638bb249e1; ?>
<?php unset($__componentOriginalf2fc224c8bcecadd2dbd7eee99c890638bb249e1); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <div class="bg-black text-white p-2 rounded mt-10 font-bold text-right hover:bg-gray-700 ease">
                <?php echo e(__('common.projected_cost')); ?>:
                    <span class="text-lg"><?php echo e(number_format($totalCost, 2)); ?> Br</span>
                </div>


            </div>
            <?php if($actions): ?>
                <div class="p-4 sticky bottom-0 right-0 left-0 hover:bg-smoke-lighter bg-smoke-lightest ease-in-out duration-500">
                    <?php echo e($actions); ?>

                </div>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Placeholder::class, ['icon' => 'primary tasks']); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <span class="text-sm">
                <?php echo e(__('workorders.please_fill_in_the_amount_and_unit_fields')); ?>

            </span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71)): ?>
<?php $component = $__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71; ?>
<?php unset($__componentOriginal59a5aa11fd4e66fc90cb8f8df2f503c13c0e2f71); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/resources/views/components/necessary-ingredients.blade.php ENDPATH**/ ?>