
<div <?php echo e($attributes->merge(['class' => 'field'])); ?> wire:ignore>
    <label><?php echo e(__($label)); ?></label>
    <div class="ui calendar" id="<?php echo e($dId); ?>">
        <div class="ui input left icon">
            <i class="calendar icon"></i>
            <input type="datetime" placeholder="<?php echo e(__($placeholder)); ?>">
            
        </div>
    </div>
    <?php $__errorArgs = [$model];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 py-2"><?php echo e(ucfirst($message)); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>



<script>
    $('#<?php echo e($dId); ?>')
        .calendar({
            monthFirst: false,
            type: '<?php echo e($type); ?>',
            today: true,
            touchReadonly: false,
            <?php if($initialDate): ?>
                initialDate: new Date('<?php echo e($initialDate); ?>'),
            <?php endif; ?>
            <?php if($disabledDays): ?>
                disabledDaysOfWeek: [<?php echo e($disabledDays); ?>],
            <?php endif; ?>
            // initialDate: null,
            startMode: 'day',
            // inline: true,
            ampm: false,
            // disabledDaysOfWeek: [5, 6],
            onSelect: function(date, mode) {
                console.log(new Date(date + 'z'));
                window.livewire.find('<?php echo e($_instance->id); ?>').set('<?php echo e($model); ?>', new Date(date + 'z')); // 'z' timezone olayları ile ilgili
                // .toLocaleDateString("tr-TR")
            },
            formatter: {
                date: function (date, settings) {
                    if (!date) return '';
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    return day + '.' + month + '.' + year;
                },
            },
            text: {
                days: ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Pzr'],
                months: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
                monthsShort: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Ekim', 'Kas', 'Ara'],
                today: 'Bugün',
                now: 'Şimdi',
                am: 'AM',
                pm: 'PM'
            },
        });
</script><?php /**PATH D:\projects\hexlabs\production-control-system\resources\views/components/datepicker.blade.php ENDPATH**/ ?>