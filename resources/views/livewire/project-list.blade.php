<div>
    <x-elements.display-grid>
        @foreach ($projects as $project )
        {{ $this->likedByUser($project->id) }}
       
            <x-elements.card link="{{ route('project.show', ['id'=>$project->id]) }}" 
                :id="$project->id" 
                :name="$project->name" 
                :description="$project->description" 
                :body="$project->body" 
                :likeCount="$project->likes->count()"
                :stack="$project->stack"/>
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