<div <?php echo e($attributes->merge(['class' => 'border rounded-md bg-white shadow flex relative'])); ?>>
    <?php if($square): ?>
        <div class="w-16 h-16  md:flex px-5 hidden rounded-l-md justify-center items-center shadow-md">
            <?php echo e($square); ?>

        </div>
    <?php endif; ?>
    <?php echo e($slot); ?>

    <button wire:click.prevent="<?php echo e($atClose); ?>" class="absolute top-0 right-0 -mt-2 -mr-3 focus:outline-none opacity-75 hover:opacity-100">
        <i class="red shadow rounded-full cancel icon"></i>
    </button>
</div><?php /**PATH /var/www/html/resources/views/components/card.blade.php ENDPATH**/ ?>