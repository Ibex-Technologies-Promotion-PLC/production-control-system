<div <?php echo e($attributes->merge(['class' => 'h-full'])); ?>>
    <!--[if BLOCK]><![endif]--><?php if($listings): ?>
        <div class="h-full flex flex-col gap-5 relative">
            <!--[if BLOCK]><![endif]--><?php if(!$noHeader): ?>
                <div class="py-5 text-center shadow">
                    <h5 class="leading-tight font-light text-ease"><?php echo e($headerText); ?></h5>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <div class="p-8">
        
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal0ca4eb7b5f971b3efecc31f2fbca1426 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ca4eb7b5f971b3efecc31f2fbca1426 = $attributes; } ?>
<?php $component = App\View\Components\CustomList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomList::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => ''.e($loop->index).'']); ?>
                        <div class="flex items-center gap-1">
                            <div><?php echo e($item['ingredient']->prd_name); ?></div>
                            <span class="text-xs hidden md:block"> (<?php echo e($item['ingredient']->prd_code); ?>)</span> 
                        </div>
                        <div>
                            <!--[if BLOCK]><![endif]--><?php if($item['ingredient']->pivot->literal): ?> <span class="text-xs text-ease-green"><?php echo e(__('common.net')); ?></span>
                            <?php else: ?> <span class="text-xs text-ease-green"><?php echo e(__('common.variable')); ?></span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php if (isset($__attributesOriginal0ca4eb7b5f971b3efecc31f2fbca1426)): ?>
<?php $attributes = $__attributesOriginal0ca4eb7b5f971b3efecc31f2fbca1426; ?>
<?php unset($__attributesOriginal0ca4eb7b5f971b3efecc31f2fbca1426); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ca4eb7b5f971b3efecc31f2fbca1426)): ?>
<?php $component = $__componentOriginal0ca4eb7b5f971b3efecc31f2fbca1426; ?>
<?php unset($__componentOriginal0ca4eb7b5f971b3efecc31f2fbca1426); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                
                <div class="bg-black text-white p-2 rounded mt-10 font-bold text-right hover:bg-gray-700 ease">
                <?php echo e(__('common.projected_cost')); ?>:
                    <span class="text-lg"><?php echo e(number_format($totalCost, 2)); ?> Br</span>
                </div>


            </div>
            <!--[if BLOCK]><![endif]--><?php if($actions): ?>
                <div class="p-4 sticky bottom-0 right-0 left-0 hover:bg-smoke-lighter bg-smoke-lightest ease-in-out duration-500">
                    <?php echo e($actions); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal031f7343d586feb3a69898f559e89477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal031f7343d586feb3a69898f559e89477 = $attributes; } ?>
<?php $component = App\View\Components\Placeholder::resolve(['icon' => 'primary tasks'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('placeholder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Placeholder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <span class="text-sm">
                <?php echo e(__('workorders.please_fill_in_the_amount_and_unit_fields')); ?>

            </span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal031f7343d586feb3a69898f559e89477)): ?>
<?php $attributes = $__attributesOriginal031f7343d586feb3a69898f559e89477; ?>
<?php unset($__attributesOriginal031f7343d586feb3a69898f559e89477); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal031f7343d586feb3a69898f559e89477)): ?>
<?php $component = $__componentOriginal031f7343d586feb3a69898f559e89477; ?>
<?php unset($__componentOriginal031f7343d586feb3a69898f559e89477); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /var/www/html/resources/views/components/necessary-ingredients.blade.php ENDPATH**/ ?>