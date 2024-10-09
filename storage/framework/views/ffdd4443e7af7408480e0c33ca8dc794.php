


<div wire:ignore>
    <label class="font-bold pb-2" for=""><?php echo e($label); ?></label>
    <select name="" id="<?php echo e($sId); ?>" multiple="" <?php echo e($attributes->merge(['class' => 'ui search fluid dropdown'])); ?> wire:model="<?php echo e($model); ?>">
        <?php echo e($slot); ?>

    </select>
</div>



<script>
    $(document).ready(function(){
        var a = [];
        $('#<?php echo e($sId); ?>').dropdown({
            maxSelections: "<?php echo e($maxSelections); ?>",
            // sortSelect: false,
            fullTextSearch: true,
            // onAdd: function(addedValue, addedText, $addedChoice) {
            //     a.push(addedValue);
            //     window.Livewire.find('<?php echo e($_instance->getId()); ?>').set("<?php echo e($model); ?>", a);
            // },
            // onRemove: function(removedValue, removedText, $removedChoice) {
            //     let index = a.indexOf(removedValue);
            //     a.splice(index,1);
            //     window.Livewire.find('<?php echo e($_instance->getId()); ?>').set("<?php echo e($model); ?>", a);
            // }
        });
    })
</script><?php /**PATH /var/www/html/resources/views/components/dropdown-multiple.blade.php ENDPATH**/ ?>