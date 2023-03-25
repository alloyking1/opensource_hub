@props([
    'text',
    'position' => 'left'
])

<h1 {{ $attributes->merge(['class' => 'text-6xl font-bold scroll-py-10 my-10 text-'.$position])}}>
    {{ $text }}
</h1>