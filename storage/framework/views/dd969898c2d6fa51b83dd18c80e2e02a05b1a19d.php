<div <?php echo e($attributes->merge(['class' => 'shadow rounded bg-white p-1'])); ?> x-data="{expanded: false}">
    <div class="border border-dashed border-red-700 rounded">

        <div @click="expanded = ! expanded" class="cursor-pointer p-3 flex justify-between">
            <div><?php echo e($header); ?></div>
            <div x-show.transition="! expanded" class="text-xs font-bold"><i class="large expand alternate icon"></i></div>
            <div x-show.transition="expanded" class="text-xs font-bold"><i class="large minus icon"></i></div>
        </div>

        <div x-show="expanded" class="px-2"
             x-transition:enter="transition duration-300 ease-out"
             x-transition:enter-start="opacity-0"
             
             x-transition:leave="transition duration-100 ease-in"
             
             x-transition:leave-end="opacity-0"    
             
        >
            <?php echo e($slot); ?>

        </div>

    </div>
</div><?php /**PATH /var/www/html/resources/views/components/expandable-area.blade.php ENDPATH**/ ?>