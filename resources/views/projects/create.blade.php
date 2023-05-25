
<x-app-layout>
    <x-text.sub-header title="Add open-source project"/>
 
     <x-elements.wrapper class="py-20">
         <div class="md:max-w-4xl mx-auto">
            
            <x-elements.card-plain>
                <form method="POST" action="{{ route('project.save') }}">
                    @csrf
            
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Project Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Project Description')" />
                        <x-text-area id="description" class="block mt-1 w-full" type="text" cols="30" rows=5 :value="old('description')" name="description" required autofocus/>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
            
                    <!-- about project -->
                    <div class="mt-4">
                        <x-input-label for="body" :value="__('About Project')" />
                        <x-text-area id="body" class="block mt-1 w-full" type="text" cols="30" rows=10 :value="old('body')" name="body" required/>
                        <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    </div>
            
                    <div class="mt-4">
                        <x-input-label for="stack" :value="__('Project Stack')" />
                        <x-text.xs text="Enter tech stacks seperated with comma" />
                        <x-text-input id="stack" class="block mt-1 w-full" type="text" :value="old('stack')" name="stack" required autofocus />
                        <x-input-error :messages="$errors->get('stack')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="stack" :value="__('Project Category')" />
                        <x-select>
                            @foreach (\App\Enums\ProjectCategoryEnum::cases() as $category )
                                <x-select-options :name="$category->value" :value="$category->value"/>
                            @endforeach
                        </x-select>
                    </div>

            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
              
         </x-elements.card-plain>            
     </x-elements.wrapper>
 </x-app-layout>
 