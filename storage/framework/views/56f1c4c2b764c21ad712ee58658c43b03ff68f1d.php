<div class="p-4 flex flex-col gap-5 bg-white rounded-md">
    <div class="ui small form">
        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['model' => 'ctg_name','label' => ''.e(__('validation.attributes.ctg_name')).'','noErrors' => true,'placeholder' => ''.e(__('validation.attributes.ctg_name')).'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'required field']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
        <div class="pt-5">
            <button class="ui green mini button" wire:click.prevent="ctgSubmit">
                <?php echo e(__('common.save')); ?>

            </button>
        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/web/sections/categories/ctg-baseform.blade.php ENDPATH**/ ?>