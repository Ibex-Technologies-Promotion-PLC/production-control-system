
<?php if (isset($component)) { $__componentOriginalce0295373298096193c2baee2164d0dc314888de = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Container::class, []); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
        <?php echo e($header); ?>

        <div class="shadow-md <?php if(!$noBorder): ?> border border-<?php echo e($theme); ?>-200 <?php endif; ?> rounded bg-white">
                <div class="flex flex-col">
                        <?php echo e($slot); ?>

                </div>
                <?php if($buttons): ?>
                        <?php if (isset($component)) { $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormButtons::class, []); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd)): ?>
<?php $component = $__componentOriginale8340eb01f00535543c6958ab683a31712450bfd; ?>
<?php unset($__componentOriginale8340eb01f00535543c6958ab683a31712450bfd); ?>
<?php endif; ?>
                <?php endif; ?>
        </div>

        <?php if($bottom): ?>
                <div class="mt-3">
                        <?php echo e($bottom); ?>

                </div>
        <?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0295373298096193c2baee2164d0dc314888de)): ?>
<?php $component = $__componentOriginalce0295373298096193c2baee2164d0dc314888de; ?>
<?php unset($__componentOriginalce0295373298096193c2baee2164d0dc314888de); ?>
<?php endif; ?>
<?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/content.blade.php ENDPATH**/ ?>