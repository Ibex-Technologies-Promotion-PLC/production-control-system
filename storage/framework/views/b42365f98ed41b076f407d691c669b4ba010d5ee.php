<div class="fixed top-0 right-0 left-0 bottom-0 bg-white overflow-hidden md:bg-smoke-light z-50 flex md:overflow-auto" x-show.transition="<?php echo e($active); ?>" x-cloak>
    <div class="<?php echo e($position); ?> h-full md:h-auto w-full max-w-5xl"> 
        
        
            
            <div class="text-right pb-1">
                <button class="focus:outline-none pt-2" wire:click.prevent="<?php echo e($atClose); ?>" <?php if(!$atClose): ?> @click="<?php echo e($active); ?> = false" <?php endif; ?>>
                    <i class="text-red-500 hover:text-red-400 ease large rounded-full cancel icon"></i>
                </button>
            </div>
            <div <?php echo e($attributes->merge(['class' => 'shadow-md bg-white rounded'])); ?>>
                <?php echo e($slot); ?> 
            </div>
        

    </div>
</div>




<?php /**PATH /var/www/html/resources/views/components/custom-modal.blade.php ENDPATH**/ ?>