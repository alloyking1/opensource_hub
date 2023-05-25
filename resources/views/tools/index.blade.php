
<x-app-layout>
    <x-text.sub-header title="All open source tools"/>
 
     <x-elements.wrapper class="py-20">
         <div class="md:max-w-4xl mx-auto">
            
            <x-elements.display-grid>
                {{-- @foreach ($userProjects as $project )
                    @foreach ( $project->projects as $item )
                    <x-elements.card link="{{ route('project.show', ['id'=>$project->id]) }}" :name="$item->name" :description="$item->description" :body="$item->body" :stack="$item->stack"/>
                    @endforeach
                @endforeach --}}
                @php
                    $i = 1;
                @endphp
               @while ($i < 6)
               <x-elements.tools-card name="project anme" description="this is suppose to be a long description" site="https://laraveldev.pro" social="socila media"/>
                @php
                    $i++;
                @endphp
               @endwhile
            </x-elements.display-grid>
     </x-elements.wrapper>
 </x-app-layout>
 