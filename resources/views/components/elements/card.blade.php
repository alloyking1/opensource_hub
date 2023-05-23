@props([
    'id',
    'name',
    'description',
    'body',
    'stack',
    'likeCount' => 0,
    'link' => '#',
    'likedByUser' => false
])


<div {{ $attributes->merge(['class' => 'rounded-md shadow-md bg-white p-6 border-gray-200 h-full']) }}>
    <a href="{{ $link }}">
        {{-- <div class="w-full h-1/2">
            <img class="w-full h-1/2" src="https://images.ctfassets.net/23aumh6u8s0i/7gu8qd0qzmuxWWjYLhZpqo/2bb8a206fe4a86af9414545b5c25c368/laravel" alt="">
        </div> --}}
        <div class="py-4 content-evenly">
            <h1 class="text-3xl font-bold scroll-py-10">{{ $name }}</h1>
            <p class="text-md font-thin tracking-wide text-gray-500 pb-1">{{  substr($description, 0, 100) }}</p>
            <p class="text-xs font-extralight text-gray-700">{{ substr($body, 0, 200)}}</p>

            <div class="flex justify-between">
                <div class="bg-gray-700 rounded-2xl w-auto text-white text-center p-2 mt-2">
                    PHP, laravel
                </div>
                <div class="flex">
                <div class="mt-6 mr-3">
                    <x-text.xs :text="$likeCount" />
                </div>
                
                <div class="rounded-full p-2 mt-2 {{ $likedByUser ? 'bg-blue-400 text-white'  : 'bg-gray-400 text-white' }}">
                <livewire:project-like :projectId="$id" :likedByUser="$likedByUser" :key="'project-' . $id"/>
                </div>
                </div>
               
               
            </div>
        </div>
    </a>
</div>



