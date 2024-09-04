

<div class="p-4 bg-white md:border-t md:border-r md:border-l md:rounded-t-md" x-data="{showFilters: <?php if ((object) ('showFilters') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showFilters'->value()); ?>')<?php echo e('showFilters'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showFilters'); ?>')<?php endif; ?>, dateRange: <?php if ((object) ('showDateFilters') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDateFilters'->value()); ?>')<?php echo e('showDateFilters'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDateFilters'); ?>')<?php endif; ?>}">
    <div class="flex justify-between items-center">

        <div class="flex gap-2 items-center">

            <div class="ui tiny icon input" >
                <i class="search icon"></i>
                <input wire:model.debounce.150ms="searchQuery" type="text" placeholder="<?php echo e(__('common.search_in_database')); ?>">
            </div>
            <div @click="dateRange = ! dateRange" class="text-xs <?php if($this->showDateFilters): ?> text-ease-red <?php else: ?> text-ease-green <?php endif; ?> cursor-pointer">
                <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => ''.e(__('common.date_range')).'']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <i class="large calendar alternate icon"></i>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
            </div>
            <div x-show.transition.in="dateRange">
                <input wire:model="filterFromDate" type="date" class="focus:outline-none bg-white font-bold rounded p-1 border">
                <i class="small exchange icon"></i>
                <input wire:model="filterToDate" type="date" class="focus:outline-none bg-white font-bold rounded p-1 border">
            </div>

            <?php if($filters): ?>
                <div x-show.transition.in="! showFilters" @click="showFilters = true" class="text-xs text-ease-green cursor-pointer">
                    <i class="large filter icon"></i>
                    <?php echo e(__('common.filter')); ?>

                </div>
                <div x-show.transition.in="showFilters" @click="showFilters = false" class="text-xs text-ease-red cursor-pointer">
                    
                    <i class="large cancel icon"></i>
                    <?php echo e(__('common.remove_filters')); ?>

                </div>
            <?php endif; ?>

        </div>

        <div class="flex gap-5 items-center">
            <div>
                <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => 'Download as PDF']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <i wire:click="exportToPDF" class="large pdf file  icon text-ease-red cursor-pointer"></i>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Span::class, ['tooltip' => 'Download as Excel']); ?>
<?php $component->withName('span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <i wire:click="exportToExcel" class="large excel file icon text-ease-green cursor-pointer"></i>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca)): ?>
<?php $component = $__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca; ?>
<?php unset($__componentOriginalc1effd3d03b1736baffdff7fd74a92d65fd5edca); ?>
<?php endif; ?>
            </div>
            <div class="ui tiny icon input w-28 border-green-500" data-tooltip="<?php echo e(__('datatable.perpage_explain')); ?>" data-position="left center" data-variation="tiny wide fixed">
                <i class="stream icon"></i>
                <input wire:model.debounce.300ms="perPage" type="number" value="<?php echo e($perPage); ?>" placeholder="<?php echo e(__('datatable.perpage')); ?>">
            </div>
        </div>

    </div>

    <div x-show.transition="showFilters" class="mt-4 p-3 text-sm border rounded bg-white shadow">
        <?php echo e($filters); ?>

    </div>
    
</div><?php /**PATH /var/www/html/resources/views/components/table-toolbar.blade.php ENDPATH**/ ?>