<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @foreach ($projects as $project )
            {{-- <x-elements.section> --}}
                    <x-elements.card :name="$project->name" :description="$project->description" :body="$project->body" :stack="$project->stack"/>
            {{-- </x-elements.section> --}}
            @endforeach
    </div>
    <div>
        x-data="{
            observe () {
                let observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            @this.call('loadMore')
                        }
                    })
                }, {
                    root: null
                })
    
                observer.observe(this.$el)
            }
        }"
        x-init="observe">
    </div>
    {{-- <button wire:click.prevent="loadMore" class="p-4 bg-blue-500 text-white">Load more</button> --}}
</div>