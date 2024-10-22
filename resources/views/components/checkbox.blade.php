<div class="flex items-center">
    <input type="checkbox" 
           {!! $attributes->merge(['class' => 'rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800']) !!}
           @if($model) wire:model="{{ $model }}" @endif>
    
    @if($label)
        <label class="ml-2 text-gray-700 dark:text-gray-300">{{ $label }}</label>
    @endif
</div>
