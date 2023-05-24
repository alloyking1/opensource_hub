<div>
    <x-elements.display-grid>
        @foreach ($projects as $project )
            <x-elements.card link="{{ route('project.show', ['id'=>$project->id]) }}" 
                :id="$project->id" 
                :name="$project->name" 
                :description="$project->description" 
                :body="$project->body" 
                :likeCount="$project->likes->where('liked',true)->count()"
                :stack="$project->stack"
                :likedByUser="$this->likedByUser($project->id)"/>
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