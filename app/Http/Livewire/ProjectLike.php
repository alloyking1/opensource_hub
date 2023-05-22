<?php

namespace App\Http\Livewire;

use App\Traits\LikeTrait;
use Livewire\Component;

use App\Models\Like;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectLike extends Component
{
    use LikeTrait;

    public $projectId;

    public function like()
    {
        $like = Like::updateOrCreate([
            'user_id' => Auth::id(),
            'project_id' => $this->projectId
        ], [
            'liked' => true
        ]);
    }


    public function render()
    {

        return view('livewire.project-like');
    }
}
