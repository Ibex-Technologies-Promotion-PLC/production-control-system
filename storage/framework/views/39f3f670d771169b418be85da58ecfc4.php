<div <?php echo e($attributes->merge(['class' => 'field'])); ?>>
    <label><?php echo e(ucfirst(__($label))); ?></label>
    <?php if($action): ?>
        <div class="ui action input flex-1 <?php echo e($iClass); ?>">
            <input <?php if($defer): ?> wire:model.defer="<?php echo e($model); ?>" <?php else: ?> wire:model.lazy="<?php echo e($model); ?>" <?php endif; ?> type="<?php echo e($type); ?>" placeholder="<?php echo e(ucfirst(__($placeholder))); ?>">
            <?php echo e($action); ?>

        </div>
    <?php elseif($innerLabel): ?>
        <div class="ui right labeled input flex-1 <?php echo e($iClass); ?>">
            <input <?php if($defer): ?> wire:model.defer="<?php echo e($model); ?>" <?php else: ?> wire:model.lazy="<?php echo e($model); ?>" <?php endif; ?> type="<?php echo e($type); ?>" placeholder="<?php echo e(ucfirst(__($placeholder))); ?>">
            <div class="ui basic label">
                <?php echo e($innerLabel); ?>

            </div>
        </div>
    <?php else: ?>
        <input <?php if($defer): ?> wire:model.defer="<?php echo e($model); ?>" <?php else: ?> wire:model.lazy="<?php echo e($model); ?>" <?php endif; ?> type="<?php echo e($type); ?>" placeholder="<?php echo e(ucfirst(__($placeholder))); ?>">
    <?php endif; ?>


    <?php if(!$noErrors): ?>
        <?php $__errorArgs = [$model];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 py-2"><?php echo e(ucfirst($message)); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php endif; ?>

</div><?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/components/input.blade.php ENDPATH**/ ?>