<div>
    <x-elements.display-grid>
        @foreach ($projects as $project )
            <x-elements.card link="{{ route('project.show', ['id'=>$project->id]) }}" :name="$project->name" :description="$project->description" :body="$project->body" :stack="$project->stack"/>
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