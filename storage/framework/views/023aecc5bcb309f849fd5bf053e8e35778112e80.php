<?php if (isset($component)) { $__componentOriginala7f7cfe602cb74163557abca35e194ebafc8f9f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TableRow::class, []); ?>
<?php $component->withName('table-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'warning font-bold']); ?>
    <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center aligned']); ?>
        <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => ''.e(__('dispatchorders.all_products_loaded_into_vehicle_waiting_for_approval')).'','position' => 'top left']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <i class="checkmark icon"></i>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2)): ?>
<?php $component = $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2; ?>
<?php unset($__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2); ?>
<?php endif; ?>

    <?php echo $__env->make('web.sections.dispatchorders.daily.table-rows.do-row-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if (isset($component)) { $__componentOriginal45379b9c4ae3adcbbddc5d73072dad1460a8e7b2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TbodyItem::class, []); ?>
<?php $component->withName('tbody-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'right aligned']); ?>


        <?php if (isset($component)) { $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuDropdown::class, ['main' => ''.e(__('common.approve')).' S','action' => 'openApproveModal('.e($dispatchOrder->id).')','color' => 'red','icon' => 'tools icon']); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <div wire:click.prevent="redirectPrepare(<?php echo e($dispatchOrder->id); ?>)" class="item text-red-600"> 
                <i class="right arrow icon"></i>
                <?php echo e(__('dispatchorders.dispatch_details')); ?> U
            </div>
            
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e)): ?>
<?php $component = $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e; ?>
<?php unset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e); ?>
<?php endif; ?>

     <?php echo $__env->renderComponent(); ?>
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/web/sections/dispatchorders/daily/table-rows/do-case-completed.blade.php ENDPATH**/ ?>