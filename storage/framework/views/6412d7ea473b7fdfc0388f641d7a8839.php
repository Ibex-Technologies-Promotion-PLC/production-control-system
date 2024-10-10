<div class="field">
    <div <?php echo e($attributes->merge(['class' => 'field'])); ?>>
        <label><?php echo e(__($label)); ?></label>

        <!--[if BLOCK]><![endif]--><?php if($iModel): ?>
        <div class="ui right labeled input" wire:loading.class="disabler" x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($dataType); ?>','<?php echo e($model); ?>', '<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>', '<?php echo e($triggerOn); ?>', '<?php echo e($triggerOnEvent); ?>', '<?php echo e(json_encode($dataSource ?? '')); ?>')">
            <input type="<?php echo e($iType); ?>" step="any" placeholder="<?php echo e($iPlaceholder); ?>" wire:model.debounce.500ms="<?php echo e($iModel); ?>">
            <div wire:ignore class="<?php echo e($sClass); ?> ui <?php if( ! $basic): ?> label scrolling <?php endif; ?> dropdown" id="<?php echo e($sId); ?>">
                <input type="hidden" name="<?php echo e($model); ?>" wire:model.lazy="<?php echo e($model); ?>">
                <div class="text"><?php echo e($placeholder); ?></div>
                <i class="dropdown icon"></i>
                <div class="menu"></div>
            </div>
        </div>


        <?php else: ?>
        <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>,'<?php echo e($dataType); ?>', '<?php echo e($model); ?>', '<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>', '<?php echo e($triggerOn); ?>', '<?php echo e($triggerOnEvent); ?>', '<?php echo e(json_encode($dataSource ?? '')); ?>')"
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
        Alpine.data('dropdownComponent', (initialData = [], dataType,modelName, text, dataSourceFunction, placeholder, triggerOn, triggerOnEvent, dataSource) => ({
            values: [],
            selectedValue: null,
            currentPlaceholder: placeholder,
            text: text,
            dataSourceFunction: dataSourceFunction,
            dataSource: dataSource,
            dataType:dataType,
            collection: initialData,

            init() {

                // Trigger fetch values depending on initial data
                if (initialData.length > 0) {
                    this.populate(initialData);
                } else {
                    this.fetchValues();
                }

                // Dynamically listen for Livewire events (triggerOn and triggerOnEvent)
                if (triggerOnEvent) {
                    Livewire.on(triggerOnEvent, () => {
                        console.log(`Event ${triggerOnEvent} triggered, fetching values`);
                        this.fetchValues();
                    });
                }

                if (triggerOn) {
                    Livewire.on(triggerOn, () => {
                        console.log(`Event ${triggerOn} triggered, fetching values`);
                        this.fetchValues();
                    });
                }
            },

            fetchValues() {
                console.log('dataType',this.dataType);

                if (this.dataSourceFunction && this.dataSourceFunction !== '') {
                    // Call a Livewire method to fetch data
                    console.log('Fetching data using function:', this.dataSourceFunction);

                    const result = this.$wire.call(this.dataSourceFunction);

                    if (result && typeof result.then === 'function') {
                        result.then(data => {
                            console.log('Data fetched from function:', data);
                            if (Array.isArray(data)) {
                                this.populate(data);
                            } else {
                                console.error('Expected an array, but got:', data);
                            }
                        }).catch(error => {
                            console.error('Error fetching data:', error);
                        });
                    } else {
                        console.error('Error: Data source function did not return a promise:', result);
                    }
                } else if (this.dataSource) {

                    // If dataSource is a Livewire property, use $wire.get to retrieve its value
                    if (this.dataType === 'variable') {
                        const result = this.$wire.call("getSpecificUnitsProperty");
                        result.then(data => {
                            this.populate(data);

                            console.log(data, 'my data')
                        })
                    } else if(this.dataType === 'pointer') {
                        console.log(this.dataSource,'variable name')
                        const data = this.$wire.get('companyAddresses');
                        console.log(data, 'another datasource')
                        this.populate(data);

                    }
                    console.log(this.dataSource == 'cards.0.units','truth value')


                } else if (this.collection && Array.isArray(this.collection)) {
                    console.log('Using collection data directly.');
                    this.populate(this.collection); // Use collection if provided directly
                } else {
                    console.warn('No valid data source or collection found.');
                }
            },

            populate(data) {
                if (!Array.isArray(data)) {
                    console.error('Data passed to populate is not an array:', data);
                    return;
                }

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
                        console.log('Dropdown changed:', {
                            value,
                            text
                        });
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
</style><?php /**PATH /var/www/html/resources/views/components/dropdown.blade.php ENDPATH**/ ?>