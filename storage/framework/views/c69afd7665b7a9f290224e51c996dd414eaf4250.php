<tr class="font-semibold violet">
    <td class="center aligned collapsing">
        <span data-tooltip="<?php echo e(__('workorders.prepared')); ?>" data-variation="mini" data-position="top left">
            <i class="large pause icon"></i>
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
<?php $component = $__env->getContainer()->make(App\View\Components\MenuDropdown::class, ['icon' => 'play icon','main' => ''.e(__('common.start')).'','action' => 'woStart('.e($workOrder->id).')','color' => 'violet']); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <div wire:click.prevent="openDetailsModal(<?php echo e($workOrder->id); ?>)" class="item text-red-600"> 
                <i class="link eye icon"></i>
                <?php echo e(__('common.see_details' )); ?>

            </div>
            <div wire:click.prevent="routePreparePage(<?php echo e($workOrder->id); ?>)" class="item text-red-600">
                <i class="redo icon"></i>
                <?php echo e(__('workorders.examine_sources_and_edit')); ?>

            </div>
            
            
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e)): ?>
<?php $component = $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e; ?>
<?php unset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e); ?>
<?php endif; ?> 
    </td>
</tr>

<?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/table-rows/wo-case-prepared.blade.php ENDPATH**/ ?>