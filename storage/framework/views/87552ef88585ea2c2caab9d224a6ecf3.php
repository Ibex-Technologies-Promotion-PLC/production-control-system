<div class="flex justify-between items-center gap-2 px-1 rounded-sm hover:shadow bg-gray-50 shadow-md ease-in-out duration-150">
    <?php echo e($left); ?>

    <!--[if BLOCK]><![endif]--><?php if($show): ?>
        <div data-tooltip="<?php echo e(__('common.detail')); ?>" data-variation="mini">
            <a href="<?php echo e(route("$pluralModelName.show", ["$modelName" => $modelId])); ?>">
                <i class="link <?php if($gray): ?> grey <?php else: ?> blue <?php endif; ?> eye icon"></i>
            </a>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($edit): ?>
        <div data-tooltip="<?php echo e(__('common.edit')); ?>" data-variation="mini">
            <a href="<?php echo e(route("$pluralModelName.edit", ["$modelName" => $modelId])); ?>">
                <i class="pen alternate link <?php if($gray): ?> grey <?php else: ?> orange <?php endif; ?> icon"></i>
            </a>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($delete): ?>
        <div data-tooltip="<?php echo e(__('common.delete')); ?>" data-variation="mini">
            <i wire:click.prevent="delete(<?php echo e($modelId); ?>)" class="eraser link <?php if($gray): ?> grey <?php else: ?> inverted red <?php endif; ?>  icon"></i>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php echo e($slot); ?>


</div>  <?php /**PATH /var/www/html/resources/views/components/crud-actions.blade.php ENDPATH**/ ?>