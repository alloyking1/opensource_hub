<div>
    @foreach ($projects as $project )
        <x-elements.section class="flex flex-row">
            <x-elements.card :name="$project->name" :description="$project->description" :body="$project->body" :stack="$project->stack"/>
        </x-elements.section>
       
    @endforeach
    <div
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