
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.container','data' => ['attributes' => $attributes]]); ?>
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
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/content.blade.php ENDPATH**/ ?>