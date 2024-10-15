<div class="rounded bg-white w-full border shadow">
    <div class="p-2 shadow">
        <div class="p-4 bg-teal-800 flex flex-col gap-5 items-center rounded-t">
            <div>
                <?php if (isset($component)) { $__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7 = $attributes; } ?>
<?php $component = App\View\Components\CircleImage::resolve(['user' => $user,'height' => 'h-28'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('circle-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CircleImage::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7)): ?>
<?php $attributes = $__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7; ?>
<?php unset($__attributesOriginalcc5bfcbd6db13d5da26852cb757b9cf7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7)): ?>
<?php $component = $__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7; ?>
<?php unset($__componentOriginalcc5bfcbd6db13d5da26852cb757b9cf7); ?>
<?php endif; ?>
            </div>
            <div class="font-bold text-teal-900 bg-white rounded-sm px-2 py-0.5">
                <?php echo e($user->name); ?>

            </div>
        </div>
    </div>

    <div class="p-2">
        <div class="p-2 border border-dashed hover:border-teal-400 flex flex-col gap-10 shadow-inner bg-gray-50">
            <div class="font-semibold">
                <div class="font-bold"><?php echo e(__('auth.mail_address')); ?>:</div>
                <div class="text-sm text-ease"><?php echo e($user->email); ?></div>
            </div>
            <div>
                <div class="font-bold"><?php echo e(__('auth.last_login')); ?>:</div>
                <div class="text-sm text-ease"><?php echo e($user->logedinAt()->diffForHumans()); ?></div>
            </div>
            <div>
                <div class="font-bold"><?php echo e(__('auth.last_activity')); ?></div>
                <div class="text-sm">
                    <!--[if BLOCK]><![endif]--><?php if($lastActivity): ?>
                        <p>Last activity: <?php echo e($lastActivity->description); ?> -
                            <?php echo e($lastActivity->created_at->format('d M Y, h:i A')); ?></p>
                        <span class="text-ease-red cursor-pointer"><?php echo e(__('common.see_all')); ?></span>
                    <?php else: ?>
                        <p>No activities found for this user.</p>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                </div>
            </div>
        </div>
    </div>
    <div class="bg-smoke-lighter flex">
        <div wire:click.prevent="openRolesModal(<?php echo e($user->id); ?>)"
            class="w-full py-2 text-center hover:bg-smoke-dark hover:text-white cursor-pointer">
            <i class="user icon"></i>
            <?php echo e(__('roles.define_roles')); ?>

        </div>
        <!--[if BLOCK]><![endif]--><?php if(!$user->isSystemAdmin()): ?>
            <div wire:click.prevent="delete(<?php echo e($user->id); ?>)"
                class="w-full py-2 text-center hover:bg-smoke-dark hover:text-white cursor-pointer">
                <i class="red trash icon"></i>
                Sil
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

</div>
<?php /**PATH /var/www/html/resources/views/components/user-card.blade.php ENDPATH**/ ?>