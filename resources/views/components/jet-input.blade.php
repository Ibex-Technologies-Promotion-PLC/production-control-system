@props(['disabled' => false])

<input 
    {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge(['class' => 'block w-full border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm transition duration-150 ease-in-out hover:border-indigo-400 dark:hover:border-indigo-500 px-3 py-2 text-sm']) !!} 
    placeholder="{{ $placeholder ?? '' }}" 
    aria-label="{{ $label ?? 'Input' }}"
>
