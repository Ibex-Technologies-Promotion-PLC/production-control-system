<div class="field">
    <div {{ $attributes->merge(['class' => 'field']) }}>
        <label>{{ __($label) }}</label>

        @if ($iModel )
        <div class="ui right labeled input" wire:loading.class="disabler" x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{$dataType}}','{{ $model }}', '{{ $text }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}', '{{ $triggerOn }}', '{{ $triggerOnEvent }}', '{{ json_encode($dataSource ?? '') }}','{{$sId}}')">
            <input type="{{ $iType }}" step="any" placeholder="{{ $iPlaceholder }}" wire:model.debounce.500ms="{{ $iModel }}">

            <div wire:ignore class="{{ $sClass }} ui @if( ! $basic) label scrolling @endif dropdown" id="{{ $sId }}">
                <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">
                <div class="text">{{ $placeholder }}</div>
                <i class="dropdown icon"></i>
                <div class="menu"></div>
            </div>
        </div>


        @else
        <div x-data="dropdownComponent({{ json_encode($collection ?? []) }},'{{$dataType}}', '{{ $model }}', '{{ $text }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}', '{{ $triggerOn }}', '{{ $triggerOnEvent }}', '{{ json_encode($dataSource ?? '') }}','{{$sId}}')"
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
        Alpine.data('dropdownComponent', (initialData = [], dataType, modelName, text, dataSourceFunction, placeholder, triggerOn, triggerOnEvent, dataSource, sId) => ({
            values: [],
            selectedValue: null,
            currentPlaceholder: placeholder,
            text: text,
            dataSourceFunction: dataSourceFunction,
            dataSource: dataSource,
            dataType: dataType,
            collection: initialData,
            sId: sId,

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
                let iModels = this.$wire.get('{{ $iModel }}');

                console.log('data of imodel and another one ', iModels);

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

                            console.log(data, 'my data of variable')
                        })
                    } else if (this.dataType === 'pointer') {
                        console.log(this.dataSource, 'variable name')
                        const data = this.$wire.get('companyAddresses');
                        console.log(data, 'another datasource')
                        this.populate(data);

                    }
                    console.log(this.dataSource == 'cards.0.units', 'truth value')


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
                console.log(this.sId, 'the sid ')
                console.log(this.$el, 'the el')

               this.$el = this.sId;


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
                        console.log(_this.selectedValue, 'selectedValue')
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