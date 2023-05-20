<div>
    <x-elements.display-grid>
        @foreach ($userProjects as $project )
            @foreach ( $project->projects as $item )
            <x-elements.card link="{{ route('project.show', ['id'=>$project->id]) }}" :name="$item->name" :description="$item->description" :body="$item->body" :stack="$item->stack"/>
            @endforeach
        @endforeach
    </x-elements.display-grid>
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
</div>