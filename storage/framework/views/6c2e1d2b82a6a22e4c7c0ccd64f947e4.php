
    <!--[if BLOCK]><![endif]--><?php if($sortBy): ?>
        <th <?php echo e($attributes); ?> wire:click="sortBy('<?php echo e($sortBy); ?>')">
            <?php echo e($slot); ?>

            <i class="<?php echo e($this->getDirectionClass($sortBy)); ?> icon"></i>
        </th>
    <?php else: ?> 
        <th <?php echo e($attributes); ?>><?php echo e($slot); ?></th>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/components/thead-item.blade.php ENDPATH**/ ?>