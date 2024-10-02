<div class="field">
    <div <?php echo e($attributes->merge(['class' => 'field'])); ?>>
        <label><?php echo e(__($label)); ?></label>

        <!--[if BLOCK]><![endif]--><?php if($iModel): ?>

        <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($model); ?>', '<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>', '<?php echo e($triggerOn); ?>', '<?php echo e($triggerOnEvent); ?>', '<?php echo e(json_encode($dataSource ?? '')); ?>')"
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
        <div x-data="dropdownComponent(<?php echo e(json_encode($collection ?? [])); ?>, '<?php echo e($model); ?>', '<?php echo e($text); ?>', '<?php echo e($dataSourceFunction); ?>', '<?php echo e($placeholder); ?>', '<?php echo e($triggerOn); ?>', '<?php echo e($triggerOnEvent); ?>', '<?php echo e(json_encode($dataSource ?? '')); ?>')"
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
        Alpine.data('dropdownComponent', (initialData = [], modelName, text, dataSourceFunction, placeholder, triggerOn, triggerOnEvent, dataSource) => ({
            values: [],
            selectedValue: null,
            currentPlaceholder: placeholder,
            text: text,
            dataSourceFunction: dataSourceFunction,
            dataSource: dataSource,

            init() {
                console.log('Initial Text Fields:', this.text);

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
                if (this.dataSourceFunction && this.dataSourceFunction !== '') {
                    // Call a Livewire method to fetch data
                    console.log('Fetching data using function:', this.dataSourceFunction);

                    const result = this.$wire.call(this.dataSourceFunction);
                    console.log(result,'result')

                    // Check if the result is a promise (has a 'then' method)
                    if (result && typeof result.then === 'function') {
                        result.then(data => {
                            console.log('Data fetched from function:', data);
                            this.populate(data);
                        }).catch(error => {
                            console.error('Error fetching data:', error);
                        });
                    } else {
                        console.error('Error: Data source function did not return a promise:', result);
                    }
                } else if (this.dataSource && typeof this.dataSource === 'string') {
                    // If dataSource is a Livewire property, use $wire.get to retrieve its value
                    console.log('Fetching data from Livewire property:', this.dataSource);

                    let data = window.Livewire.find('<?php echo e($_instance->getId()); ?>').get('<?php echo e($dataSource); ?>');
                    const originalArray = Array.from(data);  // Clone the array
                    console.log('here it is',originalArray); // This will give you a readable output if it's an object or array
                    this.populate(originalArray);


                } else {
                    console.warn('No data source function or valid Livewire property provided.');
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