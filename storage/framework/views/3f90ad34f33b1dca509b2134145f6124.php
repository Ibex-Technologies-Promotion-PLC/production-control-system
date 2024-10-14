<div class="bg-white shadow rounded-lg flex border border-teal-100 relative hover:border-teal-300">
    <div class="w-16 h-16 hidden md:flex px-5 rounded-l-lg justify-center items-center shadow-md">
        <i class="large teal balance scale right icon"></i>
    </div>
    <div class="px-2 grid md:grid-cols-8 w-full gap-3 items-center relative">

        <div class="md:text-center items-center pt-2">
            <!--[if BLOCK]><![endif]--><?php if($this->isLocked($key)): ?>
                <h3 class="font-bold text-red-700">1</h3>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['model' => 'cards.'.e($key).'.name','placeholder' => 'units.new_unit_name','noErrors' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ui input tiny max-w-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $attributes = $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $component = $__componentOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="pt-2">
            <!--[if BLOCK]><![endif]--><?php if($this->isLocked($key)): ?>
                <span class="font-bold text-lg text-red-600"><?php echo e($card['name']); ?></span>
                <span class="text-xs text-ease">(<?php echo e($card['abbreviation']); ?>)</span>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal786b6632e4e03cdf0a10e8880993f28a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a = $attributes; } ?>
<?php $component = App\View\Components\Input::resolve(['model' => 'cards.'.e($key).'.abbreviation','placeholder' => 'units.new_unit_name_short','noErrors' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ui input tiny max-w-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $attributes = $__attributesOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__attributesOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a)): ?>
<?php $component = $__componentOriginal786b6632e4e03cdf0a10e8880993f28a; ?>
<?php unset($__componentOriginal786b6632e4e03cdf0a10e8880993f28a); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="hidden md:flex ">
            <i class="equals icon"></i>
        </div>

        <div>
            <h2 class="font-bold text-teal-700">1</h2>
        </div>

        <div>
            <!--[if BLOCK]><![endif]--><?php if($this->isLocked($key)): ?>
                <span wire:key="locked.<?php echo e($key); ?>"class="cursor-pointer" data-tooltip="İşlemi değiştir" data-variation="mini">
                    <i class="large hover:text-gray-600 <?php echo e($card['operator'] == true ? 'times' : 'divide'); ?> icon"></i>
                </span>
            <?php else: ?>
                <span wire:key="unlocked.<?php echo e($key); ?>" wire:click.prevent="toggleOperator(<?php echo e($key); ?>)" class="cursor-pointer" data-tooltip="İşlemi değiştir" data-variation="mini">
                    <i class="large hover:text-gray-600 <?php echo e($card['operator'] == true ? 'times' : 'divide'); ?> icon"></i>
                </span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>       

        <div>                   
            <!--[if BLOCK]><![endif]--><?php if($this->isLocked($key)): ?>
                <h3 class="font-bold text-teal-700">
                    <?php echo e($card['factor']); ?>

                </h3>
            <?php else: ?>
                <input wire:model="cards.<?php echo e($key); ?>.factor" type="number" placeholder="Miktar"
                    class="font-bold text-xl pb-1 max-w-full text-teal-700 border-b-2 border-dashed border-teal-200 hover:border-teal-300 focus:border-teal-400 focus:outline-none ">
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="">
            <!--[if BLOCK]><![endif]--><?php if($this->isLocked($key)): ?>
                <span class="text-lg font-bold text-indigo-900"><?php echo e($this->getParentName($key)); ?></span>
            <?php else: ?>
                <select wire:model.lazy="cards.<?php echo e($key); ?>.parent_id"
                    class="font-bold text-xl focus:outline-none cursor-pointer bg-white">
                    <option selected class="disabled">Birim</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->unitsOfSelectedProduct($key); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option class="text-red-500 font-bold" value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        
        <div class="text-right">
            <!--[if BLOCK]><![endif]--><?php if(! $this->isBaseUnit($key)): ?>
                <!--[if BLOCK]><![endif]--><?php if( $this->isLocked($key)): ?>
                <button wire:click.prevent="unlockCard(<?php echo e($key); ?>)" 
                    class="ui mini icon button max-w-full">
                    <i class="orange lock icon"></i>
                </button>
                <?php else: ?>
                    <div class="ui buttons max-w-full">
                        <button wire:click.prevent="submit(<?php echo e($key); ?>)"
                                class="ui positive mini button "><?php echo e(__('common.save')); ?></button>
                        <!--[if BLOCK]><![endif]--><?php if($this->isSavedBefore($key)): ?>
                        <button wire:click.prevent="lockCard(<?php echo e($key); ?>)" class="ui mini icon button">
                            <i class="green unlock icon"></i>
                        </button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!--[if BLOCK]><![endif]--><?php if( ! $this->isLocked($key)): ?>
            <div class="absolute top-0 right-0 -mt-2 -mr-3 hover:opacity-100 opacity-50">
                <button wire:click.prevent="callDeleteModal(<?php echo e($key); ?>)" class="focus:outline-none">
                    <i class="red shadow rounded-full cancel icon"></i>
                </button>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </div>
</div>















<?php /**PATH /var/www/html/resources/views/web/sections/units/create/unit-card.blade.php ENDPATH**/ ?>