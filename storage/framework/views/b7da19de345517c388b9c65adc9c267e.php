<div class="flex items-center gap-5 py-2">
    <div>
        
    </div>
    <div class="ui breadcrumb">
        <?php if($currentPath == '/'): ?>
            <div class="active section"><?php echo e(ucfirst(__('home'))); ?></div>
        <?php else: ?>
            <a href="<?php echo e(url('/')); ?>" class="section"><?php echo e(ucfirst(__('common.'.'home'))); ?></a>
            <i class="right angle icon divider"></i>
            <?php $__currentLoopData = $crumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key === $crumbsCount): ?>
                    <div class="active section"><?php echo e(ucfirst(__('common.'.$crumb))); ?></div>
                <?php else: ?>
                    <a href="<?php echo e(url($crumb)); ?>" class="section"><?php echo e(ucfirst(__('common.'.$crumb))); ?></a>
                    <i class="right angle icon divider"></i>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/html/resources/views/components/breadcrumb.blade.php ENDPATH**/ ?>