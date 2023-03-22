<div>
    @foreach ($projects as $project )
        <h1>{{ $project->name }}</h1> 
        <p>{{ $project->description }}</p>
        <p>{{ Str::substr($project->body,0, 100) }}</p>

        <hr>
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
    <button wire:click.prevent="loadMore" class="p-4 bg-blue-500 text-white">Load more</button>
</div>