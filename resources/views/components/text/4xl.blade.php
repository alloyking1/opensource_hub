@props(['text'])

<h1 {{ $attributes->merge(['class' => 'text-4xl font-bold scroll-py-10 text-center']) }}>
    {{ $text }}
</h1>