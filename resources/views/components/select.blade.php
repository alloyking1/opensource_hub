{{-- @props([
    'name',
    'label',
])

<div {{ $attributes }}>
    <div class="flex justify-between">
        <label for="{{ $name }}" class="block text-xs font-normal text-purple-900 pl-3">{{ $label }}</label>
    </div>
    <div class="mt-0.5">
        <select name="{{ $name }}" id="{{ $name }}"
                class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-full shadow-sm appearance-none focus:outline-none focus:ring-purple-500"
            {{ $attributes }}>
            {{ $slot }}
        </select>
        <x-form.error :errors="$errors" :name="$name" />
    </div>
</div> --}}


<select name="" id="" {{ $attributes->merge(['class' => 'w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
    {{$slot}}
</select>