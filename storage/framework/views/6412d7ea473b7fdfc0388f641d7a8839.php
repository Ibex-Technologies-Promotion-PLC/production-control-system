
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
        <input type="hidden" value="1" name="<?php echo e($model); ?>" wire:model.lazy="category_id">
           
            <div class="text default"><?php echo e($placeholder); ?></div>
            <i class="dropdown icon"></i>
            <div class="menu">
            </div>
        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div><?php echo e($right); ?></div>



</div>
    <?php
        $__scriptKey = '3969487814-0';
        ob_start();
    ?>
<script>
    $(document).ready(function () {

        var values = [];
        var value = [];

        var sId = '#<?php echo e($sId); ?>';

        var initnone = <?php echo json_encode($initnone, 15, 512) ?>;  
        console.log(initnone,'init none')
        if (!initnone){
            fetchValues();

        }

        // If an event is specified, populate the select with new options
        var triggerOnEvent = <?php echo json_encode($triggerOnEvent, 15, 512) ?>;  
        console.log(triggerOnEvent,"event triggered")

        if (triggerOnEvent){
            Livewire.on( triggerOnEvent , function () {
            console.log("<?php echo e($triggerOnEvent); ?> event triggered for <?php echo e($sId); ?>!");
            values = []; // Empty values before update
            fetchValues();
        });
        }
       

        // Populate select options on any DOM update
        <!--[if BLOCK]><![endif]--><?php if($triggerOn): ?>
        $("<?php echo e($triggerOn); ?>").on('change', function () {
            values = []; // Empty values before update
            fetchValues();
        });
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        function fetchValues() {

    <!--[if BLOCK]><![endif]--><?php if($collection): ?>
    console.log('collection')
        // Check if collection exists and is an array
        if (Array.isArray(<?php echo json_encode($collection, 15, 512) ?>)) {
            var data = <?php echo json_encode($collection, 15, 512) ?>;

            setValues(data);
        } else {
            console.error('Collection is not defined or is not an array.');
        }
    <?php elseif($dataSource): ?>
    console.log('collection1')

        // Check if data source exists
        let data = window.Livewire.find('<?php echo e($_instance->getId()); ?>').get('<?php echo e($dataSource); ?>');
        if (data) {
            setValues(data);
        } else {
            console.error('Data source is not defined or returned null.');
        }
    <?php else: ?>
        // If no collection or data source, call the function to get data
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('<?php echo e($dataSourceFunction); ?>').then(data => {
            if (data) {
                console.log('<?php echo e($dataSourceFunction); ?> function populating the ' + sId + ' dropdown');
                setValues(data);
            } else {
                console.error('<?php echo e($dataSourceFunction); ?> did not return any data.');
            }
        }).catch(error => {
            console.error('Error calling dataSourceFunction:', error);
        });
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    if (typeof '<?php echo e($dataSourceFunction); ?>' !== 'undefined' && '<?php echo e($dataSourceFunction); ?>'.trim() !== '') {
    window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('<?php echo e($dataSourceFunction); ?>').then(data => {
        if (data) {
            setValues(data);
        } else {
            console.error('No data returned.');
        }
    }).catch(error => {
        console.error('Error calling dataSourceFunction:', error);
    });
} else {
    console.error('dataSourceFunction is not defined or is empty.');
}

           
       
}

        function setValues(data) {
            if (data != null) {
                data.forEach(item => {
                    const model = <?php echo json_encode($model, 15, 512) ?>;
                    console.log(model,'model is here')

                    let text = "<?php echo e($text); ?>";
                    let textArray = [];
                    let textToShowUser = [];

                    // Split the text for display
                    text = text.split(',');


                    text.forEach(function (txt) {
                        textToShowUser.push(item[txt]);
                        textArray.push(item['ctg_name'])

                    });                    

                    <!--[if BLOCK]><![endif]--><?php if($prefix): ?>
                    textToShowUser.unshift("<?php echo e($prefix); ?>");
                    textArray.unshift("<?php echo e($prefix); ?>");

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    values.push({
                        name: textToShowUser.join(' - '),
                        value: item.<?php echo e($value); ?>,
                        selected: window.Livewire.find('<?php echo e($_instance->getId()); ?>').get('<?php echo e($model); ?>') == item.<?php echo e($value); ?>,
                    });
                    value.push({
                        name: textArray.join(' - '),
                        value: item.<?php echo e($value); ?>,
                        selected: window.Livewire.find('<?php echo e($_instance->getId()); ?>').get('<?php echo e($model); ?>') == item.<?php echo e($value); ?>,
                    });
                });
                let filteredValues = values.filter(item => item.name !== '');
                let filteredValue = value.filter(item => item.name !== '');
                populate(filteredValues);
                populates(filteredValue);

            } else {
                console.log('%c' + sId + ' data source is incorrect!', 'font-size: 10px; color: red;');
            }
        }

        function populate(values = null) {
            $(sId).dropdown({
                values: values, // {name: test, value: 1} format
                preserveHTML: false,
                ignoreDiacritics: true,
                sortSelect: true,
                placeholder: '<?php echo e(__($placeholder)); ?>',
                transition: '<?php echo e($transition); ?>',
                ignoreCase: false,
                match: 'text', // Search within text
                forceSelection: false, // Allow deselection
                clearable: "<?php echo e($clearable); ?>",
                fullTextSearch: 'exact',
                message: {
                    addResult: '<b>{term}</b> ekle',
                    count: '{count} adet seçildi',
                    maxSelections: 'En fazla {maxCount} seçilebilir',
                    noResults: '<?php echo e(__('common.no_results')); ?>',
                },
            });
            console.log('%c' + sId + ' population completed!', 'font-size: 10px; color: green;');
        }
        function populates(values = null) {
            $("#categories").dropdown({
                values: values, // {name: test, value: 1} format
                preserveHTML: false,
                ignoreDiacritics: true,
                sortSelect: true,
                placeholder: 'category',
                transition: '<?php echo e($transition); ?>',
                ignoreCase: false,
                match: 'text', // Search within text
                forceSelection: false, // Allow deselection
                clearable: "<?php echo e($clearable); ?>",
                fullTextSearch: 'exact',
                message: {
                    addResult: '<b>{term}</b> ekle',
                    count: '{count} adet seçildi',
                    maxSelections: 'En fazla {maxCount} seçilebilir',
                    noResults: '<?php echo e(__('common.no_results')); ?>',
                },
            });
            console.log('%c' + sId + ' population completed!', 'font-size: 10px; color: green;');
        }
    });
</script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>


<style>
    .disabler {
        pointer-events: none;
    }
</style><?php /**PATH /var/www/html/resources/views/components/dropdown.blade.php ENDPATH**/ ?>