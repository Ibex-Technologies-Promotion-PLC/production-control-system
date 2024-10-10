<div>
    <div class="text-green-500 cursor-default">
        <i class="fast shipping icon"></i>
        <span class="font-bold text-sm">
            <?php echo e(__('dispatchorders.products_are_ready_to_dispatch')); ?>    
        </span>
    </div>


    <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f = $attributes; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Table::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'single line selectable']); ?>       

        <?php if (isset($component)) { $__componentOriginal9265f2c82011405998f0442e028261fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9265f2c82011405998f0442e028261fe = $attributes; } ?>
<?php $component = App\View\Components\Tbody::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Tbody::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $dispatchOrder->dispatchProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3 = $attributes; } ?>
<?php $component = App\View\Components\TableRow::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableRow::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'dp_tablerow_'.e($key).'','class' => 'positive']); ?>
                    
                    <?php echo $__env->make('web.sections.dispatchorders.daily.prepare.table-by-states.common.prepare-table-rows', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if (isset($component)) { $__componentOriginald5e2d2372dae52eecd6090146e43dba5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5e2d2372dae52eecd6090146e43dba5 = $attributes; } ?>
<?php $component = App\View\Components\TbodyItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TbodyItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?>
                        <div class="ui mini buttons">
                            <button wire:click.prevent="openReservationViewModal(<?php echo e($dp->id); ?>)" class="ui mini icon basic button ">
                                <i class="eye icon"></i>
                            </button>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $attributes = $__attributesOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__attributesOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5e2d2372dae52eecd6090146e43dba5)): ?>
<?php $component = $__componentOriginald5e2d2372dae52eecd6090146e43dba5; ?>
<?php unset($__componentOriginald5e2d2372dae52eecd6090146e43dba5); ?>
<?php endif; ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $attributes = $__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__attributesOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3)): ?>
<?php $component = $__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3; ?>
<?php unset($__componentOriginal0c0a4e942f49621d4b5ccecff4a57aa3); ?>
<?php endif; ?>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9265f2c82011405998f0442e028261fe)): ?>
<?php $attributes = $__attributesOriginal9265f2c82011405998f0442e028261fe; ?>
<?php unset($__attributesOriginal9265f2c82011405998f0442e028261fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9265f2c82011405998f0442e028261fe)): ?>
<?php $component = $__componentOriginal9265f2c82011405998f0442e028261fe; ?>
<?php unset($__componentOriginal9265f2c82011405998f0442e028261fe); ?>
<?php endif; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $attributes = $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $component = $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
        
    

    
     <?php $__env->slot('bottom', null, []); ?> 
        <div class="flex items-center justify-between shadow rounded p-2 bg-white">
            <div class="text-xs text-ease-red font-bold">
                <i class="checkmark icon"></i>
                <?php echo e(__('dispatchorders.all_products_prepared_or_loaded_into_vehicle_waiting_for_approval')); ?>

            </div>
        </div>
     <?php $__env->endSlot(); ?>
</div><?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/prepare/table-by-states/prepare-completed.blade.php ENDPATH**/ ?>