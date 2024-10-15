

<div wire:ignore>
    <label class="font-bold pb-2" for="">{{ $label }}</label>
    <select name="" id="{{ $sId }}" multiple="" {{ $attributes->merge(['class' => 'ui search fluid dropdown'])}} wire:model="{{ $model }}">
        {{ $slot }}
    </select>
</div>


@script
<script>
    $(document).ready(function(){

        var a = [];
        $('#{{ $sId }}').dropdown({
            maxSelections: "{{ $maxSelections }}",
            fullTextSearch: true,
        });
    })
</script>
@endscript