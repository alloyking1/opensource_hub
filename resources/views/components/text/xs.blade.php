@props(['text', 'position' => 'left'])

<p {{ $attributes->merge(['class' => 'text-xs font-thin text-gray-400 text-'.$position]) }}>
    {{ $text }}
    sdfsdsd
</p>