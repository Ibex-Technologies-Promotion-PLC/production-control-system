<!--[if BLOCK]><![endif]--><?php if($action): ?>
    <span wire:click.prevent="<?php echo e($action); ?>" data-tooltip="<?php echo e(__('common.detail')); ?>" data-variation="mini">
        <i class="link eye icon hover:text-green-500"></i>
    </span>
<?php else: ?>
    <span data-tooltip="<?php echo e(__('common.detail')); ?>" data-variation="mini">
        <a href="<?php echo e($route); ?>" style="color: inherit">
            <i class="link eye icon hover:text-green-500"></i>
        </a>
    </span>
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH /var/www/html/resources/views/components/show-button.blade.php ENDPATH**/ ?>