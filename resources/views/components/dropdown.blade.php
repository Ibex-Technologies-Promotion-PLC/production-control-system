<div class="field">
    <div {{ $attributes->merge(['class' => 'field']) }}>

        <label>{{ __($label) }}</label>

        @if ($iModel)
        <div class="ui right labeled input" wire:loading.class="disabler">
            <input type="{{ $iType }}" step="any" placeholder="{{ $iPlaceholder }}" wire:model.debounce.500ms="{{ $iModel }}">
            <div x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{ $model }}', '{{ $dataSourceFunction }}', '{{ $placeholder }}')" 
                wire:ignore 
                class="{{ $sClass }} ui @if( ! $basic) label scrolling @endif dropdown" id="{{ $sId }}">
                <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">
                <div class="text default">{{ $placeholder }}</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    {{-- Menu will be populated by Alpine.js --}}
                </div>
            </div>
        </div>
        @else
        <div x-data="dropdownComponent({{ json_encode($collection ?? []) }}, '{{ $model }}','{{$text}}', '{{ $dataSourceFunction }}', '{{ $placeholder }}')" 
             wire:ignore 
             class="{{ $sClass }} ui @if( ! $basic) selection scrolling @endif dropdown" 
             id="{{ $sId }}" 
             wire:loading.class="double loading disabled" 
             wire:target="{{ $triggerOn }}, {{ $triggerOnEvent }}">
             
            <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">
            <div class="text default">{{ $placeholder }}</div>
            <i class="dropdown icon"></i>
            <div class="menu">
                {{-- Menu will be populated by Alpine.js --}}
            </div>
        </div>
        @endif
    </div>

    <div>{{ $right }}</div>
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
                @if ($triggerOnEvent)
                Livewire.on('{{ $triggerOnEvent }}', () => {
                    this.fetchValues();
                });
                @endif
            },

            fetchValues() {
                // Fetch values using Livewire method
                @this.call(dataSourceFunction).then(data => {
                    console.log('Data fetched:', data);
                    this.populate(data);
                }).catch(error => {
                    console.error('Error fetching data:', error);
                });
            },

            populate(data) {
                const textProperty = text;
                const valueProperty = '{{ $value }}';

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
                        selected: @this.get(modelName) == item[valueProperty],
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
                    transition: '{{ $transition }}',
                    clearable: "{{ $clearable }}",
                    fullTextSearch: 'exact',
                    forceSelection: false,
                    onChange(value, text, $choice) {
                        console.log('Dropdown changed:', { value, text });
                        // Update Livewire model when the user selects an item
                        @this.set(modelName, value);

                        // Debug: Ensure the selected value is updated
                        _this.selectedValue = value;
                        console.log('Selected Value:', _this.selectedValue);
                    },
                    message: {
                        addResult: '<b>{term}</b> {{ __('common.add_result') }}',
                        count: '{count} {{ __('common.selected_count') }}',
                        maxSelections: '{{ __('common.max_selections') }}',
                        noResults: '{{ __('common.no_results') }}',
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
