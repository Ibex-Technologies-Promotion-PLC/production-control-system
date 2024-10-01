<div class="field">
    <div <?php echo e($attributes->merge(['class' => 'field'])); ?>>
        <label><?php echo e(__($label)); ?></label>

        <!--[if BLOCK]><![endif]--><?php if($iModel): ?>
        <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($model); ?>', '<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>')" 
        class="ui right labeled input" wire:loading.class="disabler">
        <input type="<?php echo e($iType); ?>" step="any" placeholder="<?php echo e($iPlaceholder); ?>" wire:model.debounce.500ms="<?php echo e($iModel); ?>">
            <div wire:ignore class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> label scrolling <?php endif; ?> dropdown" id="<?php echo e($sId); ?>">
                <input type="hidden" name="<?php echo e($model); ?>" wire:model.lazy="<?php echo e($model); ?>">
                <div class="text default"><?php echo e($placeholder); ?></div>
                <i class="dropdown icon"></i>
                <div class="menu"></div>
            </div>
        </div>
        <?php else: ?>
        <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($model); ?>', '<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>')" 
        wire:ignore 
             class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> selection scrolling <?php endif; ?> dropdown" 
             id="<?php echo e($sId); ?>" 
             wire:loading.class="double loading disabled" 
             wire:target="<?php echo e($triggerOn); ?>, <?php echo e($triggerOnEvent); ?>">
            <input type="hidden" name="<?php echo e($model); ?>" wire:model.lazy="<?php echo e($model); ?>">
            <div class="text default"><?php echo e($placeholder); ?></div>
            <i class="dropdown icon"></i>
            <div class="menu"></div>
        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div><?php echo e($right); ?></div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdownComponent', (initialData = [], modelName, text, dataSourceFunction, placeholder) => ({
            values: [],
            selectedValue: null,
            currentPlaceholder: placeholder,
            text: text,
            dataSourceFunction: dataSourceFunction,

            init() {
                // Debug the placeholder and text
                console.log('Initial Text Fields:', this.text);

                if (initialData.length > 0) {
                    this.populate(initialData);
                } else {
                    this.fetchValues();
                }

                // Listen for Livewire events to refresh the dropdown options
                Livewire.on('woProductChanged', () => {
                    this.fetchValues();
                });

            },

          
            fetchValues() {
                if (this.dataSourceFunction && this.dataSourceFunction !== '') {
                    console.log('Fetching data using function:', this.dataSourceFunction);

                    this.$wire.call(this.dataSourceFunction).then(data => {
                        console.log('Data fetched:', data);
                        this.populate(data);
                    }).catch(error => {
                        console.error('Error fetching data:', error);
                    });
                } else {
                    console.warn('No data source function provided.');
                }
            },

            populate(data) {
                const textProperty = this.text;
                const valueProperty = 'id';

                const textFields = textProperty.split(',').map(field => field.trim());

                this.values = data.map(item => {
                    let displayText = textFields.map(field => item[field] ?? '').join(' - ');

                    console.log('Item text:', displayText);

                    return {
                        name: displayText,
                        value: item[valueProperty],
                        selected: this.$wire.get(modelName) == item[valueProperty],
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
                    transition: 'slide',
                    clearable: "",
                    fullTextSearch: 'exact',
                    forceSelection: false,
                    onChange: (value, text, $choice) => {
                        console.log('Dropdown changed:', { value, text });
                        // Update Livewire model when the user selects an item
                        _this.$wire.set(modelName, value);

                        // Debug: Ensure the selected value is updated
                        _this.selectedValue = value;
                    },
                    message: {
                        addResult: '<b>{term}</b> common.add_result',
                        count: '{count} common.selected_count',
                        maxSelections: 'common.max_selections',
                        noResults: 'No results found...',
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