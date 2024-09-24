
<?php if (isset($component)) { $__componentOriginala766c2d312d6f7864fe218e2500d2bba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala766c2d312d6f7864fe218e2500d2bba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.container','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
        <?php echo e($header); ?>

        <div class="shadow-md <?php if(!$noBorder): ?> border border-<?php echo e($theme); ?>-200 <?php endif; ?> rounded bg-white">
                <div class="flex flex-col">
                        <?php echo e($slot); ?>

                </div>
                <!--[if BLOCK]><![endif]--><?php if($buttons): ?>
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
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!--[if BLOCK]><![endif]--><?php if($bottom): ?>
                <div class="mt-3">
                        <?php echo e($bottom); ?>

                </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $attributes = $__attributesOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $component = $__componentOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__componentOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/content.blade.php ENDPATH**/ ?>