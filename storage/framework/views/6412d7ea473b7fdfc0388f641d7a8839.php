
<div class="field">
    <div <?php echo e($attributes->merge(['class' => 'field'])); ?> >

        
        <label><?php echo e(__($label)); ?></label>
       
    
        <!--[if BLOCK]><![endif]--><?php if($iModel): ?>
        <div class="ui right labeled input" wire:loading.class="disabler">
            <input type="<?php echo e($iType); ?>" step="any" placeholder="<?php echo e($iPlaceholder); ?>" wire:model.debounce.500ms="<?php echo e($iModel); ?>">
            <div wire:ignore class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> label scrolling <?php endif; ?> dropdown" id="<?php echo e($sId); ?>"> 
                <input type="hidden" name="<?php echo e($model); ?>" wire:model.lazy="<?php echo e($model); ?>">            
                <div class="text default"><?php echo e($placeholder); ?></div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> selection scrolling <?php endif; ?> dropdown" id="<?php echo e($sId); ?>" wire:ignore wire:loading.class="double loading disabled" wire:target="<?php echo e($triggerOn); ?>, <?php echo e($triggerOnEvent); ?>"> 
            <input type="hidden" name="<?php echo e($model); ?>" wire:model.lazy="<?php echo e($model); ?>">            
            <div class="text default"><?php echo e($placeholder); ?></div>
            <i class="dropdown icon"></i>
            <div class="menu">
                
            </div>
        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div><?php echo e($right); ?></div>



    

</div>



<script>
    $(document).ready(function() {
        
        var values = [];
        var sId = '#<?php echo e($sId); ?>';

        
        // pupulate the options initially
        <!--[if BLOCK]><![endif]--><?php if( ! $initnone): ?>
            fetchValues();
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        



        /**
         * if an event specified, populate the select with new options
         */
        <!--[if BLOCK]><![endif]--><?php if($triggerOnEvent): ?>
            livewire.on('<?php echo e($triggerOnEvent); ?>', function(){
                console.log("<?php echo e($triggerOnEvent); ?> event triggered for <?php echo e($sId); ?>!");
                values = []; // empty values before update
                fetchValues();
            });
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


        /**
         * Populate select options on any dom update. class or id
         */
        <!--[if BLOCK]><![endif]--><?php if($triggerOn): ?> 
            $("<?php echo e($triggerOn); ?>").on('change', function (){
                values = []; // empty values before update
                fetchValues();
            });
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        

        
        /**
         * 
         */
        function fetchValues() {
            
            
            <!--[if BLOCK]><![endif]--><?php if($collection): ?>
                var data = <?php echo json_encode($collection, 15, 512) ?>;
                // var data =  <?php echo json_encode($collection); ?>;
                // var data = <?php echo json_encode($collection) ?>;
                setValues(data);
            <?php elseif($dataSource): ?>
                let data = window.Livewire.find('<?php echo e($_instance->getId()); ?>').get('<?php echo e($dataSource); ?>');
                setValues(data);
            <?php else: ?> 
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('<?php echo e($dataSourceFunction); ?>').then(data => {
                    console.log('<?php echo e($dataSourceFunction); ?> function populating the ' + sId + ' dropdown');
                    setValues(data);
                });
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        }
        

        function setValues(data) {
            console.log(data);
            if(data != null) {
                data.forEach(data => {
                    let text = "<?php echo e($text); ?>";
                    let textToShowUser = [];

                    // dropdownda tire(-) ile aralayarak çoklu gösterim yapılmak istenebilir 
                    // kullanıcı virgül ile text attribute'ine geçmeli 
                    text = text.split(',');
                    text.forEach(function(txt){
                        textToShowUser.push(data[txt]);
                    });

                    <!--[if BLOCK]><![endif]--><?php if($prefix): ?>
                        textToShowUser.unshift("<?php echo e($prefix); ?>");
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    values.push({
                        name: textToShowUser.join(' - '),
                        value: data.<?php echo e($value); ?>,
                        selected: window.Livewire.find('<?php echo e($_instance->getId()); ?>').get('<?php echo e($model); ?>') == data.<?php echo e($value); ?>,
                    });
                });
                populate(values);
            } else {
                const style = 'font-size: 10px; color: red;';
                console.log('%c' + sId + ' data source yanlış!', style);
            }
        }


        function populate(values = null) {
            $(sId).dropdown({
                values: values, // {name: test, value: 1} gibi
                preserveHTML: false,
                ignoreDiacritics: true,
                sortSelect: true,
                placeholder: '<?php echo e(__($placeholder)); ?>',
                transition: '<?php echo e($transition); ?>',
                ignoreCase: false,
                match: 'text', // text içinde ara
                forceSelection: false, // select açılıp seçim yapmadan blur edildiğinde
                clearable: "<?php echo e($clearable); ?>",
                fullTextSearch:'exact',
                // allowCategorySelection: true,
                // on: 'hover',
                // onChange(value, text, $choice) {
                //     // window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('unit_id', value);
                // },
                message: {
                    addResult     : '<b>{term}</b> ekle',
                    count         : '{count} adet seçildi',
                    maxSelections : 'En fazla {maxCount} seçilebilir',
                    noResults     : '<?php echo e(__('common.no_results')); ?>',
                },
            });
            const style = 'font-size: 10px; color: green;';
            console.log('%c' + sId + ' population completed!', style);
        }
        
    });
</script>



<style>
    .disabler {
        pointer-events:none;
    }
</style><?php /**PATH /var/www/html/resources/views/components/dropdown.blade.php ENDPATH**/ ?>