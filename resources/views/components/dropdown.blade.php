
<div class="field">
    <div {{ $attributes->merge(['class' => 'field']) }} >

        
        <label>{{ __($label)}}</label>
       
    
        @if ($iModel)
        <div class="ui right labeled input" wire:loading.class="disabler">
            <input type="{{ $iType }}" step="any" placeholder="{{ $iPlaceholder }}" wire:model.debounce.500ms="{{ $iModel }}">
            <div wire:ignore class="{{ $sClass }} ui @if( ! $basic) label scrolling @endif dropdown" id="{{ $sId }}"> 
                <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">            
                <div class="text default">{{ $placeholder }}</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    {{-- options handling by javascript --}}
                </div>
            </div>
        </div>
        @else
        <div class="{{ $sClass }} ui @if( ! $basic) selection scrolling @endif dropdown" id="{{ $sId }}" wire:ignore wire:loading.class="double loading disabled" wire:target="{{ $triggerOn }}, {{ $triggerOnEvent }}"> 
            <input type="hidden" name="{{ $model }}" wire:model.lazy="{{ $model }}">            
            <div class="text default">{{ $placeholder }}</div>
            <i class="dropdown icon"></i>
            <div class="menu">
            </div>
        </div>
        @endif
    </div>

    <div>{{ $right }}</div>



</div>
@script
<script>
    $(document).ready(function () {

        var values = [];
        var value = [];

        var sId = '#{{ $sId }}';

        var initnone = @json($initnone);  
        console.log(initnone,'init none')
        if (!initnone){
            fetchValues();

        }

        // If an event is specified, populate the select with new options
        var triggerOnEvent = @json($triggerOnEvent);  
        console.log(triggerOnEvent,"event triggered")

        if (triggerOnEvent){
            Livewire.on( triggerOnEvent , function () {
            console.log("{{ $triggerOnEvent }} event triggered for {{ $sId }}!");
            values = []; // Empty values before update
            fetchValues();
        });
        }
       

        // Populate select options on any DOM update
        @if ($triggerOn)
        $("{{ $triggerOn }}").on('change', function () {
            values = []; // Empty values before update
            fetchValues();
        });
        @endif

        function fetchValues() {

    @if ($collection)
    console.log('collection')
        // Check if collection exists and is an array
        if (Array.isArray(@json($collection))) {
            var data = @json($collection);

            setValues(data);
        } else {
            console.error('Collection is not defined or is not an array.');
        }
    @elseif ($dataSource)
    console.log('collection1')

        // Check if data source exists
        let data = @this.get('{{ $dataSource }}');
        if (data) {
            setValues(data);
        } else {
            console.error('Data source is not defined or returned null.');
        }
    @else
        // If no collection or data source, call the function to get data
        @this.call('{{ $dataSourceFunction }}').then(data => {
            if (data) {
                console.log('{{ $dataSourceFunction }} function populating the ' + sId + ' dropdown');
                setValues(data);
            } else {
                console.error('{{ $dataSourceFunction }} did not return any data.');
            }
        }).catch(error => {
            console.error('Error calling dataSourceFunction:', error);
        });
    @endif
       
}

        function setValues(data) {
            if (data != null) {
                data.forEach(item => {
                    console.log("{{$model}}",'model is here')

                    let text = "{{ $text }}";
                    let textArray = [];
                    let textToShowUser = [];

                    // Split the text for display
                    text = text.split(',');


                    text.forEach(function (txt) {
                        textToShowUser.push(item[txt]);
                        textArray.push(item['ctg_name'])

                    });                    

                    @if ($prefix)
                    textToShowUser.unshift("{{ $prefix }}");
                    textArray.unshift("{{ $prefix }}");

                    @endif

                    values.push({
                        name: textToShowUser.join(' - '),
                        value: item.{{ $value }},
                        selected: @this.get('{{ $model }}') == item.{{ $value }},
                    });
                    value.push({
                        name: textArray.join(' - '),
                        value: item.{{ $value }},
                        selected: @this.get('{{ $model }}') == item.{{ $value }},
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
                placeholder: '{{ __($placeholder) }}',
                transition: '{{ $transition }}',
                ignoreCase: false,
                match: 'text', // Search within text
                forceSelection: false, // Allow deselection
                clearable: "{{ $clearable }}",
                fullTextSearch: 'exact',
                message: {
                    addResult: '<b>{term}</b> ekle',
                    count: '{count} adet seçildi',
                    maxSelections: 'En fazla {maxCount} seçilebilir',
                    noResults: '{{ __('common.no_results') }}',
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
                transition: '{{ $transition }}',
                ignoreCase: false,
                match: 'text', // Search within text
                forceSelection: false, // Allow deselection
                clearable: "{{ $clearable }}",
                fullTextSearch: 'exact',
                message: {
                    addResult: '<b>{term}</b> ekle',
                    count: '{count} adet seçildi',
                    maxSelections: 'En fazla {maxCount} seçilebilir',
                    noResults: '{{ __('common.no_results') }}',
                },
            });
            console.log('%c' + sId + ' population completed!', 'font-size: 10px; color: green;');
        }
    });
</script>
@endscript


<style>
    .disabler {
        pointer-events: none;
    }
</style>