<div <?php echo e($attributes); ?>>
    
        <input type="checkbox" wire:model="<?php echo e($model); ?>" >
        <label><?php echo e($label); ?></label>
        
    
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
</div>

<?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/checkbox.blade.php ENDPATH**/ ?>