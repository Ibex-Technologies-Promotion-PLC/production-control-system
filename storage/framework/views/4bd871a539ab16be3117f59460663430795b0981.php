<?php if (isset($component)) { $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomModal::class, ['position' => 'center','active' => ''.e($active).'','atClose' => ''.e($atClose).'']); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-col bg-cool-gray-50">
        <div>
            <div class="p-4 shadow-md text-xl text-center">
                <?php echo e($slot); ?>

            </div>
        </div>
        <div class="p-5 ui mini buttons border-t border-<?php echo e($color); ?>-300">
            
            <button @click="<?php echo e($active); ?> = false" class="ui basic button"><?php echo e($deny); ?></button>
            <button wire:click.prevent="<?php echo e($atConfirm); ?>" class="ui <?php echo e($color); ?> button"><?php echo e($confirm); ?></button>
        </div>
    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9)): ?>
<?php $component = $__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9; ?>
<?php unset($__componentOriginal4a9d08a5bc2cd2a08efc7ebfee55e6d75aab1dd9); ?>
<?php endif; ?><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/confirm.blade.php ENDPATH**/ ?>