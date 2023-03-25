
<x-app-layout>
   <x-text.sub-header :title="$project->name"/>

    <x-elements.wrapper class="pt-10">
        <div class="md:max-w-4xl mx-auto">
           
            
            <x-text.6xl :text="$project->name"/>
            <x-text.2xl :text="$project->description" class="text-gray-500"/>
            <x-text.p :text="$project->body"/>
            
            <x-text.p text="Stack:" class="italics"/> 
            <x-elements.stack-badge>
                PHP, Laravel
            </x-elements.stack-badge>
            <x-text.p text="Team:" class="italics"/>
            <x-text.p text="social media handles:" class="italics"/>
       
             
        </div>            
    </x-elements.wrapper>
</x-app-layout>
