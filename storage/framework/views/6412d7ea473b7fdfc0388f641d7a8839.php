<div class="field">
    <div <?php echo e($attributes->merge(['class' => 'field'])); ?>>

        <label><?php echo e(__($label)); ?></label>

        <!--[if BLOCK]><![endif]--><?php if($iModel): ?>
        <div class="ui right labeled input" wire:loading.class="disabler">
            <input type="<?php echo e($iType); ?>" step="any" placeholder="<?php echo e($iPlaceholder); ?>" wire:model.debounce.500ms="<?php echo e($iModel); ?>">
            <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($model); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>')" 
                wire:ignore 
                class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> label scrolling <?php endif; ?> dropdown" id="<?php echo e($sId); ?>">
                <input type="hidden" name="<?php echo e($model); ?>" wire:model.lazy="<?php echo e($model); ?>">
                <div class="text default"><?php echo e($placeholder); ?></div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    
                </div>
            </div>
        </div>
        <?php else: ?>
        <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($model); ?>','<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>')" 
             wire:ignore 
             class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> selection scrolling <?php endif; ?> dropdown" 
             id="<?php echo e($sId); ?>" 
             wire:loading.class="double loading disabled" 
             wire:target="<?php echo e($triggerOn); ?>, <?php echo e($triggerOnEvent); ?>">
             
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
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdownComponent', (initialData = [], modelName,text, dataSourceFunction, placeholder) => ({
            values: [],
            selectedValue: null,
            currentPlaceholder: placeholder,
            text:text,

            init() {
                // Debug the placeholder state
                console.log('Initial Placeholder:', this.currentPlaceholder);
                console.log('initial text',text)

                if (initialData.length > 0) {
                    this.populate(initialData);
                } else {
                    this.fetchValues();
                }

                // Listen for Livewire events to refresh the dropdown options
                <!--[if BLOCK]><![endif]--><?php if($triggerOnEvent): ?>
                Livewire.on('<?php echo e($triggerOnEvent); ?>', () => {
                    this.fetchValues();
                });
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            },

            fetchValues() {
                // Fetch values using Livewire method
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').call(dataSourceFunction).then(data => {
                    console.log('Data fetched:', data);
                    this.populate(data);
                }).catch(error => {
                    console.error('Error fetching data:', error);
                });
            },

            populate(data) {
                const textProperty = text;
                const valueProperty = '<?php echo e($value); ?>';

                // Debug the text and value fields
                console.log('Using text field:', textProperty);
                console.log('Using value field:', valueProperty);

                // Check if the data contains `ctg_name` or `name`, and set the appropriate text field
                this.values = data.map(item => {
                    let text = item[textProperty] ?? item['name']; // Fallback to 'name' if textProperty is missing

                    // Debug the selected text field for each item
                    console.log('Item text:', text);

                    return {
                        name: text,
                        value: item[valueProperty],
                        selected: window.Livewire.find('<?php echo e($_instance->getId()); ?>').get(modelName) == item[valueProperty],
                    };
                });

                this.$nextTick(() => {
                    this.initializeDropdown();
                });
            },

            initializeDropdown() {
                const _this = this;

                $(this.$el).dropdown({
                    values: this.values,
                    placeholder: this.currentPlaceholder, // Use dynamic placeholder
                    transition: '<?php echo e($transition); ?>',
                    clearable: "<?php echo e($clearable); ?>",
                    fullTextSearch: 'exact',
                    forceSelection: false,
                    onChange(value, text, $choice) {
                        console.log('Dropdown changed:', { value, text });
                        // Update Livewire model when the user selects an item
                        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set(modelName, value);

                        // Debug: Ensure the selected value is updated
                        _this.selectedValue = value;
                        console.log('Selected Value:', _this.selectedValue);
                    },
                    message: {
                        addResult: '<b>{term}</b> <?php echo e(__('common.add_result')); ?>',
                        count: '{count} <?php echo e(__('common.selected_count')); ?>',
                        maxSelections: '<?php echo e(__('common.max_selections')); ?>',
                        noResults: '<?php echo e(__('common.no_results')); ?>',
                    },
                });
            }
        }));
    });
</script>


<style>
    .disabler {
        pointer-events: none;
    }
</style>
<?php /**PATH /var/www/html/resources/views/components/dropdown.blade.php ENDPATH**/ ?>