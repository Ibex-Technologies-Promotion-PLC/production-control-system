<tr class="font-semibold cursor-default hover:bg-cool-gray-50 ease-in duration-200">
    <td class="center aligned collapsing">
        <span data-tooltip="<?php echo e(__('workorders.waiting_for_production')); ?>" data-variation="mini" data-position="top left">
            <i class="large primary clock outline icon"></i>
        </span>
    </td>
    <td><?php echo e($workOrder->product->prd_name); ?></td>
    <td>
        <span><?php echo e($workOrder->wo_amount); ?> <?php echo e($workOrder->unit->name); ?></span>
        <?php if( ! $workOrder->unitIsAlreadyBase()): ?>
            <span class="text-xs text-ease">(<?php echo e(round($workOrder->convertedBaseAmount(),3)); ?> <?php echo e($workOrder->convertedBaseUnit()->name); ?>)</span>
        <?php endif; ?>
    </td>
    <td class=""><?php echo e($workOrder->wo_lot_no); ?></td>
    <td class="center aligned collapsing"><?php echo e($workOrder->wo_queue); ?></td>
    <td class="center aligned collapsing"><?php echo e($workOrder->wo_code); ?></td>
    <td class="collapsing right aligned">
        <?php if (isset($component)) { $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuDropdown::class, ['main' => ''.e(__('common.prepare')).'','action' => 'routePreparePage('.e($workOrder->id).')','color' => 'blue','icon' => 'box icon']); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <div wire:click.prevent="openDetailsModal(<?php echo e($workOrder->id); ?>)" class="item text-red-600"> 
                <i class="link eye icon"></i>
                <?php echo e(__('common.see_details' )); ?>

            </div>
            <div wire:click.prevent="woSuspend(<?php echo e($workOrder->id); ?>)" class="item text-red-600"> 
                <i class="ban icon"></i>
                <?php echo e(__('common.suspend' )); ?>

            </div>
            <a href="<?php echo e(route('work-orders.edit', ['work_order' => $workOrder->id])); ?>" class="item text-red-600"> 
                <i class="edit icon"></i>
                <?php echo e(__('common.edit')); ?>

            </a>
            <div wire:click.prevent="delete(<?php echo e($workOrder->id); ?>)" class="item text-red-600">
                <i class="trash icon"></i>
                <?php echo e(__('common.delete')); ?>

            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e)): ?>
<?php $component = $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e; ?>
<?php unset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e); ?>
<?php endif; ?>          
    </td>
</tr>

<?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/table-rows/wo-case-active.blade.php ENDPATH**/ ?>