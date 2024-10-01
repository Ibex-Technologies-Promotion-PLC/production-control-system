<div class="field">
    <div {{ $attributes->merge(['class' => 'field']) }}>
        <label>{{ __($label) }}</label>

        @if ($iModel)
        <div x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{ $model }}', '{{ $text }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}', '{{ $triggerOn }}', '{{ $triggerOnEvent }}', '{{ json_encode($dataSource ?? '') }}')"
            class="ui right labeled input" wire:loading.class="disabler">
            <input type="{{ $iType }}" step="any" placeholder="{{ $iPlaceholder }}" wire:model.debounce.500ms="{{ $iModel }}">
            <div wire:ignore class="{{ $sClass }} ui @if( ! $basic) label scrolling @endif dropdown" id="{{ $sId }}">
                <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">
                <div class="text default">{{ $placeholder }}</div>
                <i class="dropdown icon"></i>
                <div class="menu"></div>
            </div>
        </div>
        @else
        <div x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{ $model }}', '{{ $text }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}', '{{ $triggerOn }}', '{{ $triggerOnEvent }}', '{{ json_encode($dataSource ?? '') }}')"
            wire:ignore
            class="{{ $sClass }} ui @if( ! $basic) selection scrolling @endif dropdown"
            id="{{ $sId }}"
            wire:loading.class="double loading disabled"
            wire:target="{{ $triggerOn }}, {{ $triggerOnEvent }}">
            <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">
            <div class="text default">{{ $placeholder }}</div>
            <i class="dropdown icon"></i>
            <div class="menu"></div>
        </div>
        @endif
    </div>
    <div>{{ $right }}</div>
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

                    let data = @this.get('{{ $dataSource }}');
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
</style>