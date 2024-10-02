<!--[if BLOCK]><![endif]--><?php if($errors->any()): ?>
    <div <?php echo e($attributes->merge(['class' => 'shadow-md mb-4 md:mb-0 mt-4 mx-5'])); ?>>
        <div class="ui error message">    
            <div class="header">
                <i class="exclamation triangle icon"></i>
                <?php echo e(__('common.please_correct_specified_errors')); ?>

            </div>
            <ul class="list">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="text-ease-red text-sm"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </ul>
        </div>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/components/error-area.blade.php ENDPATH**/ ?>