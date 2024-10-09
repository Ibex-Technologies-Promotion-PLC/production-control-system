<?php if (isset($component)) { $__componentOriginald033566f468fc7bb3a8d0f946fdab616 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald033566f468fc7bb3a8d0f946fdab616 = $attributes; } ?>
<?php $component = App\View\Components\Content::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Content::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="p-5 grid md:grid-cols-2 lg:grid-cols-4 gap-5">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginaldd50eeb87f3eff9d03f7efc53dabc744 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd50eeb87f3eff9d03f7efc53dabc744 = $attributes; } ?>
<?php $component = App\View\Components\UserCard::resolve(['user' => $user] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('user-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\UserCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd50eeb87f3eff9d03f7efc53dabc744)): ?>
<?php $attributes = $__attributesOriginaldd50eeb87f3eff9d03f7efc53dabc744; ?>
<?php unset($__attributesOriginaldd50eeb87f3eff9d03f7efc53dabc744); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd50eeb87f3eff9d03f7efc53dabc744)): ?>
<?php $component = $__componentOriginaldd50eeb87f3eff9d03f7efc53dabc744; ?>
<?php unset($__componentOriginaldd50eeb87f3eff9d03f7efc53dabc744); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>



    
    <!--[if BLOCK]><![endif]--><?php if($selectedUser): ?>
        <div x-data="{rolesModal: <?php if ((object) ('rolesModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('rolesModal'->value()); ?>')<?php echo e('rolesModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('rolesModal'); ?>')<?php endif; ?>}">
            <?php if (isset($component)) { $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46 = $attributes; } ?>
<?php $component = App\View\Components\CustomModal::resolve(['active' => 'rolesModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="p-3 border rounded shadow bg-white">
                    <?php if (isset($component)) { $__componentOriginald59cbc483eac7a04a6b792600d47d3c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald59cbc483eac7a04a6b792600d47d3c1 = $attributes; } ?>
<?php $component = App\View\Components\DropdownMultiple::resolve(['label' => ''.e(__('roles.roles_for_user', ['user' => ucwords($selectedUser->name)])).'','model' => 'roleIds','sId' => 'role_select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-multiple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DropdownMultiple::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mini']); ?>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>">
                                <?php echo e($role->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald59cbc483eac7a04a6b792600d47d3c1)): ?>
<?php $attributes = $__attributesOriginald59cbc483eac7a04a6b792600d47d3c1; ?>
<?php unset($__attributesOriginald59cbc483eac7a04a6b792600d47d3c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald59cbc483eac7a04a6b792600d47d3c1)): ?>
<?php $component = $__componentOriginald59cbc483eac7a04a6b792600d47d3c1; ?>
<?php unset($__componentOriginald59cbc483eac7a04a6b792600d47d3c1); ?>
<?php endif; ?>
                    <div class="pt-4" wire:loading.class="bg-red-700 invisible" wire:target="roleIds">
                        <button wire:click.prevent="submitRoles()" class="ui mini green button">
                            <?php echo e(__('common.save')); ?>

                        </button>
                    </div>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46)): ?>
<?php $attributes = $__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46; ?>
<?php unset($__attributesOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46)): ?>
<?php $component = $__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46; ?>
<?php unset($__componentOriginal5a9e9e6a7ea5a264be2f9d9ebffacd46); ?>
<?php endif; ?>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php echo $__env->make('web.helpers.deletable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald033566f468fc7bb3a8d0f946fdab616)): ?>
<?php $attributes = $__attributesOriginald033566f468fc7bb3a8d0f946fdab616; ?>
<?php unset($__attributesOriginald033566f468fc7bb3a8d0f946fdab616); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald033566f468fc7bb3a8d0f946fdab616)): ?>
<?php $component = $__componentOriginald033566f468fc7bb3a8d0f946fdab616; ?>
<?php unset($__componentOriginald033566f468fc7bb3a8d0f946fdab616); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/livewire/users/index.blade.php ENDPATH**/ ?>