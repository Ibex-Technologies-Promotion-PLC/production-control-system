<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="font-medium text-red-600 dark:text-red-400"><?php echo e(__('Whoops! Something went wrong.')); ?></div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<<<<<<<< HEAD:storage/framework/views/5177a28b7908ac410f1b3479bf8b130b.php
<?php /**PATH /var/www/html/resources/views/components/jet-validation-errors.blade.php ENDPATH**/ ?>
========
<?php /**PATH /var/www/html/resources/views/components/validation-errors.blade.php ENDPATH**/ ?>
>>>>>>>> origin/main:storage/framework/views/ad3250af97a011cd2d59326f851e34d5.php
