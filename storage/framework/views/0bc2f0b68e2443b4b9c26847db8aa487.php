
<?php if (isset($component)) { $__componentOriginalf79b4dba555e8b4113e3494d784cf4e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf79b4dba555e8b4113e3494d784cf4e9 = $attributes; } ?>
<?php $component = App\View\Components\Container::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Container::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
        <?php echo e($header); ?>

        <div class="shadow-md <?php if(!$noBorder): ?> border border-<?php echo e($theme); ?>-200 <?php endif; ?> rounded bg-white">
                <div class="flex flex-col">
                        <?php echo e($slot); ?>

                </div>
                <?php if($buttons): ?>
                        <?php if (isset($component)) { $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f = $attributes; } ?>
<?php $component = App\View\Components\FormButtons::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FormButtons::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $attributes = $__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__attributesOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f)): ?>
<?php $component = $__componentOriginalaec4e6c11b019d144a9ab2982f3b684f; ?>
<?php unset($__componentOriginalaec4e6c11b019d144a9ab2982f3b684f); ?>
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
<?php if (isset($__attributesOriginalf79b4dba555e8b4113e3494d784cf4e9)): ?>
<?php $attributes = $__attributesOriginalf79b4dba555e8b4113e3494d784cf4e9; ?>
<?php unset($__attributesOriginalf79b4dba555e8b4113e3494d784cf4e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf79b4dba555e8b4113e3494d784cf4e9)): ?>
<?php $component = $__componentOriginalf79b4dba555e8b4113e3494d784cf4e9; ?>
<?php unset($__componentOriginalf79b4dba555e8b4113e3494d784cf4e9); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/components/content.blade.php ENDPATH**/ ?>