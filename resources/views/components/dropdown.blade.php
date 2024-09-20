@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white dark:bg-gray-700', 'dropdownClasses' => ''])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    'none', 'false' => '',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    '60' => 'w-60',
    default => 'w-48',
};
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }} {{ $dropdownClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>

{{-- @push('scripts') --}}
<script>
    $(document).ready(function() {
        var values = [];
        var sId = '#{{ $sId }}';

        // Populate the options initially
        @if(! $initnone)
            fetchValues();
        @endif

        /**
         * If an event specified, populate the select with new options
         */
        @if ($triggerOnEvent)
            livewire.on('{{ $triggerOnEvent }}', function() {
                console.log("{{ $triggerOnEvent }} event triggered for {{ $sId }}!");
                values = []; // Empty values before update
                fetchValues();
            });
        @endif

        /**
         * Populate select options on any DOM update. class or id
         */
        @if ($triggerOn)
            $("{{ $triggerOn }}").on('change', function() {
                values = []; // Empty values before update
                fetchValues();
            });
        @endif

        function fetchValues() {
            @if($collection)
                var data = @json($collection);
                setValues(data);
            @elseif($dataSource)
                let data = @this.get('{{ $dataSource }}');
                setValues(data);
            @else 
                @this.call('{{ $dataSourceFunction }}').then(data => {
                    console.log('{{ $dataSourceFunction }} function populating the ' + sId + ' dropdown');
                    setValues(data);
                });
            @endif
        }

        function setValues(data) {
            console.log(data);
            if(data != null) {
                data.forEach(item => {
                    let text = "{{ $text }}";
                    let textToShowUser = [];

                    // Split the text for display
                    text = text.split(',');
                    text.forEach(function(txt) {
                        textToShowUser.push(item[txt]);
                    });

                    @if($prefix)
                        textToShowUser.unshift("{{ $prefix }}");
                    @endif

                    values.push({
                        name: textToShowUser.join(' - '),
                        value: item.{{ $value }},
                        selected: @this.get('{{ $model }}') == item.{{ $value }},
                    });
                });
                populate(values);
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
    });
</script>
{{-- @endpush --}}

<style>
    .disabler {
        pointer-events: none;
    }
</style>
