<div class="field">
    <div {{ $attributes->merge(['class' => 'field']) }}>
        <label>{{ __($label) }}</label>

        @if ($iModel)
        <div x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{ $model }}', '{{ $text }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}')" 
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
        <div x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{ $model }}', '{{ $text }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}')" 
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
