<div class="ui mini <?php echo e($color); ?> buttons">
    <div wire:click.prevent="<?php echo e($action); ?>" class="ui button">
        <i class="<?php echo e($icon); ?>"></i>
        <?php echo e($main); ?>

    </div>
    <div class="ui floating dropdown icon button">
        <i class="dropdown icon"></i>
        <div class="menu">
            <?php echo e($slot); ?>

            
        </div>
    </div>
</div>




<?php $__env->startPush('scripts'); ?>
    <script>
        $('.ui.dropdown').dropdown();
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /var/www/html/resources/views/components/menu-dropdown.blade.php ENDPATH**/ ?>