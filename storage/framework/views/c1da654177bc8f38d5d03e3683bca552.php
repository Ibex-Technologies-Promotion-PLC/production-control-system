<tr class="font-semibold cursor-default hover:bg-cool-gray-50 ease-in duration-200">
    <td class="center aligned collapsing">
        <span data-tooltip="<?php echo e(__('workorders.waiting_for_production')); ?>" data-variation="mini" data-position="top left">
            <i class="large primary clock outline icon"></i>
        </span>
    </td>
    <td><?php echo e($workOrder->product->prd_name); ?></td>
    <td>
        <span><?php echo e($workOrder->wo_amount); ?> <?php echo e($workOrder->unit->name); ?></span>
        <!--[if BLOCK]><![endif]--><?php if( ! $workOrder->unitIsAlreadyBase()): ?>
            <span class="text-xs text-ease">(<?php echo e(round($workOrder->convertedBaseAmount(),3)); ?> <?php echo e($workOrder->convertedBaseUnit()->name); ?>)</span>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </td>
    <td class=""><?php echo e($workOrder->wo_lot_no); ?></td>
    <td class="center aligned collapsing"><?php echo e($workOrder->wo_queue); ?></td>
    <td class="center aligned collapsing"><?php echo e($workOrder->wo_code); ?></td>
    <td class="collapsing right aligned">
        <?php if (isset($component)) { $__componentOriginale31430d55ddab750d7d93cf270e64ff8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale31430d55ddab750d7d93cf270e64ff8 = $attributes; } ?>
<?php $component = App\View\Components\MenuDropdown::resolve(['main' => ''.e(__('common.prepare')).'','action' => 'routePreparePage('.e($workOrder->id).')','color' => 'blue','icon' => 'box icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MenuDropdown::ignoredParameterNames()); ?>
<?php endif; ?>
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
<?php if (isset($__attributesOriginale31430d55ddab750d7d93cf270e64ff8)): ?>
<?php $attributes = $__attributesOriginale31430d55ddab750d7d93cf270e64ff8; ?>
<?php unset($__attributesOriginale31430d55ddab750d7d93cf270e64ff8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale31430d55ddab750d7d93cf270e64ff8)): ?>
<?php $component = $__componentOriginale31430d55ddab750d7d93cf270e64ff8; ?>
<?php unset($__componentOriginale31430d55ddab750d7d93cf270e64ff8); ?>
<?php endif; ?>          
    </td>
</tr>

<?php /**PATH /var/www/html/resources/views/web/sections/workorders/daily/table-rows/wo-case-active.blade.php ENDPATH**/ ?>