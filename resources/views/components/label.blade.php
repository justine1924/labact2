@props(['value'])

<label {{ $attributes->merge(['class' => 'peer-placeholder-shown peer-focus py-2 text-sm text-gray-700 dark:text-gray-200 block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
