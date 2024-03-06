<div <?php echo e($attributes->merge(['class' => 'ui placeholder segment h-full cursor-default'])); ?>>
    <div class="ui icon header">
        <i class="<?php echo e($icon); ?> icon"></i>
        <span class="text-gray-600 leading-8"><?php echo e($header); ?></span>
    </div>
    <div <?php echo e($attributes->merge(['class' => 'text-center text-ease'])); ?>>
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/placeholder.blade.php ENDPATH**/ ?>