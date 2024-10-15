<div <?php echo e($attributes->merge(['class' => 'flex items-center relative'])); ?>>
    <div wire:loading.class="absolute pin z-20"></div>
    <div class="ui mini buttons w-full">
        <button class="ui basic button labeled icon" type="reset" wire:click.prevent="<?php echo e($clear); ?>">
            <i class="undo alternate icon"></i>
            <?php echo e(__('common.clear')); ?>

        </button>
        <button class="ui right labeled icon positive button" <?php if($submit): ?> wire:click.prevent="<?php echo e($submit); ?> <?php endif; ?>"> 
            <i class="angle right icon"></i>
            <?php echo e(__('common.save')); ?>

        </button>
    </div>
</div><?php /**PATH /var/www/html/resources/views/components/form-buttons.blade.php ENDPATH**/ ?>