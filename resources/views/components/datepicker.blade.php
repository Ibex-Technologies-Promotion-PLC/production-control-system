<div {{ $attributes->merge(['class' => 'field']) }} wire:ignore>
    <label>{{ __($label) }}</label>
    <div class="ui calendar" id="{{ $dId }}">
        <div class="ui input left icon">
            <i class="calendar icon"></i>
            <input type="text" placeholder="{{ __($placeholder) }}">
        </div>
    </div>
    @error($model)
        <p class="text-red-500 py-2">{{ ucfirst($message) }}</p>
    @enderror
</div>

<script>
    $(document).ready(function() {
        $('#{{ $dId }}')
            .calendar({
                type: '{{ $type }}', // could be date, datetime, etc.
                today: true,
                touchReadonly: false,
                // Initial date setting
                @if($initialDate)
                    initialDate: new Date('{{ $initialDate }}'),
                @endif
                // Disabled days of the week
                @if($disabledDays)
                    disabledDaysOfWeek: [{{ $disabledDays }}],
                @endif
                // Start mode, calendar display setting
                startMode: 'day',
                ampm: false, // 24-hour format
                onSelect: function(date, mode) {
                    console.log(new Date(date));
                    // Pass the date value to Livewire model
                    @this.set('{{ $model }}', new Date(date).toISOString()); // ISO format for GC
                },
                // Format the selected date to be displayed in DD.MM.YYYY
                formatter: {
                    date: function (date, settings) {
                        if (!date) return '';
                        var day = date.getDate();
                        var month = date.getMonth() + 1; // months are zero-indexed
                        var year = date.getFullYear();
                        return (day < 10 ? '0' : '') + day + '.' + (month < 10 ? '0' : '') + month + '.' + year;
                    }
                },
                // Localization and text for the Gregorian calendar
                text: {
                    days: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    today: 'Today',
                    now: 'Now',
                    am: 'AM',
                    pm: 'PM'
                }
            });
    });
</script>
