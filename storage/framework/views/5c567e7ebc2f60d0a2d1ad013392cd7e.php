<div class="bg-white rounded shadow p-2">
    <div class="flex relative border border-dashed">

        <div class="bg-white rounded-l p-2">
            <div class="p-4 <?php echo e($bgColor); ?> rounded shadow ease-in-out duration-200">
                <i class="big text-white <?php echo e($icon); ?> icon"></i>
            </div>
        </div>

        <div class="p-2 flex-1">
            <div>
                <?php echo e(__('common.this')); ?>

                <select wire:model="<?php echo e($model); ?>" class="focus:outline-none bg-white">
                    <option selected value="week"><?php echo e(__('common.week')); ?></option>
                    <option value="month"><?php echo e(__('common.month')); ?></option>
                    <option value="year"><?php echo e(__('common.year')); ?></option>
                </select>
            </div>
            <div class="pt-3">
                <span class="text-3xl ease <?php echo e($textColor); ?> font-bold">
                    <?php echo e($number); ?>

                </span>
                <span class=""><?php echo e($text); ?></span>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 -mb-3 -mr-2 shadow-md text-white">
            <a href="<?php echo e($href); ?>" class="px-3 py-1 <?php echo e($bgColor); ?> rounded font-bold text-sm ease-in-out duration-200" style="color: inherit">
                <i class="right arrow icon"></i>
                <?php echo e(__('common.look_into')); ?>

            </a>
        </div>
        
    </div>
</div><?php /**PATH C:\Users\Muluye\Documents\production-control-system\resources\views/components/overview-card.blade.php ENDPATH**/ ?>