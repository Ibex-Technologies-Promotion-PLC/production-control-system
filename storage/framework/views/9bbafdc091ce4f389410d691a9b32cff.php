<div class="flex flex-col gap-5">
    <div class="flex justify-between">
        <div>
            <i class="primary route icon"></i>
            <select wire:model="editableAddressId" class="bg-white focus:outline-none">
                <option selected><?php echo e(__('addresses.saved_addresses')); ?></option>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $selectedCompany->addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($address->id); ?>">
                        <?php echo e($address->adr_name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </select>
        </div>
        <div>
            <!--[if BLOCK]><![endif]--><?php if($editableAddress): ?>
                <!--[if BLOCK]><![endif]--><?php if($editMode): ?>
                    <div wire:loading wire:target="saveEdited">
                        <i class="gray loading circle notch icon"></i>
                    </div>
                    <span data-tooltip="<?php echo e(__('common.cancel')); ?>" data-variation="mini">
                        <i wire:click.prevent="cancelEditing" class="red undo link icon cursor-pointer"></i>
                    </span>
                    <span data-tooltip="<?php echo e(__('common.save')); ?>" data-variation="mini">
                        <i wire:click.prevent="saveEdited" class="green checkmark link icon cursor-pointer"></i>
                    </span>
                <?php else: ?>
                    <span data-tooltip="<?php echo e(__('common.edit')); ?>" data-variation="mini">
                        <i wire:click.prevent="enableEditMode" class="primary pen alternate link icon cursor-pointer"></i>
                    </span>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>



    
    <!--[if BLOCK]><![endif]--><?php if($editableAddress): ?> 
        <div>
            <!--[if BLOCK]><![endif]--><?php if($editMode): ?>
                <div>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_country')); ?></label>
                        <input type="text" wire:model.defer="adr_country" class="input-borderless text-right w-36 text-orange-700">
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_province')); ?></label>
                        <input type="text" wire:model.defer="adr_province" class="input-borderless text-right w-36 text-orange-700">
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_district')); ?></label>
                        <input type="text" wire:model.defer="adr_district" class="input-borderless text-right w-36 text-orange-700">
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_phone')); ?></label>
                        <input type="text" wire:model.defer="adr_phone" class="input-borderless text-right w-36 text-orange-700">
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-col']); ?>
                        <label><?php echo e(__('validation.attributes.adr_body')); ?></label>
                        <textarea placeholder="<?php echo e(__('validation.attributes.adr_note')); ?>" rows="3" wire:model.defer="adr_body" class="input-borderless py-2 text-orange-700"></textarea>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-col']); ?>
                        <label><?php echo e(__('validation.attributes.adr_note')); ?></label>
                        <textarea placeholder="<?php echo e(__('validation.attributes.adr_note')); ?>" rows="3" wire:model.defer="adr_note" class="input-borderless py-2 text-orange-700"></textarea>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                        
                    <?php if (isset($component)) { $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55 = $attributes; } ?>
<?php $component = App\View\Components\ErrorArea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('error-area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ErrorArea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pt-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $attributes = $__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__attributesOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55)): ?>
<?php $component = $__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55; ?>
<?php unset($__componentOriginalee4f9a7e1bb5c89e66cd8c078ce61a55); ?>
<?php endif; ?>
                </div>
            <?php else: ?>
                <div>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_country')); ?></label>
                        <span><?php echo e($editableAddress->adr_country); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_province')); ?></label>
                        <span><?php echo e($editableAddress->adr_province); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_district')); ?></label>
                        <span><?php echo e($editableAddress->adr_district); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <label><?php echo e(__('validation.attributes.adr_phone')); ?></label>
                        <span><?php echo e($editableAddress->adr_phone); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-col']); ?>
                        <label><?php echo e(__('validation.attributes.adr_body')); ?></label>
                        <i><?php echo e($editableAddress->adr_body); ?></i>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5 = $attributes; } ?>
<?php $component = App\View\Components\ListItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ListItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-col']); ?>
                        <label><?php echo e(__('validation.attributes.adr_note')); ?></label>
                        <i><?php echo e($editableAddress->adr_note); ?></i>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $attributes = $__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__attributesOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5)): ?>
<?php $component = $__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5; ?>
<?php unset($__componentOriginalf5b8d2dc1c298f0b4e4b2e86193313c5); ?>
<?php endif; ?>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /var/www/html/resources/views/web/sections/addresses/editable.blade.php ENDPATH**/ ?>