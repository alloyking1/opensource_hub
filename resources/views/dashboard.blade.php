<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-elements.wrapper class="pt-10">
        <livewire:project-list/>
    </x-elements.wrapper>
</x-app-layout>
