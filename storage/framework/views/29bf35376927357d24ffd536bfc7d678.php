<select <?php echo e($attributes->merge(['class' => 'field focus:outline-none text-sm form-select'])); ?> wire:model="<?php echo e($model); ?>">
    <option selected><?php echo e(__('common.dropdown_placeholder')); ?></option>
    <!--[if BLOCK]><![endif]--><?php if(isset($collection[$collectionKey])): ?>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $collection[$collectionKey]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</select><?php /**PATH /var/www/html/resources/views/components/select.blade.php ENDPATH**/ ?>