@props(['text', 'position' => 'left'])

<p {{ $attributes->merge(['class' => 'text-md font-thin tracking-wide text-gray-500 pb-1 my-10 text-'.$position]) }}>
    {{ $text }}
</p>