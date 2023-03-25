@props(['text', 'position' => 'left'])

<h2 {{ $attributes->merge(['class' => 'text-2xl font-bold scroll-py-10 my-10 text-'.$position]) }}>
    {{ $text }}
</h2>