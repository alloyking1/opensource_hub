<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

use App\Models\Like;
use App\Traits\LikeTrait;
use Illuminate\Support\Facades\Auth;

class ProjectList extends Component
{
    use LikeTrait;

    public $pages = 50;
    // public $perPage;
    protected $listeners = ['refreshComponent' => '$refresh'];


    public function loadMore()
    {
        $this->pages += 10;
    }

    public function likedByUser($projectId)
    {
        return $this->isLikedBy(Auth::id(), $projectId);
    }


    public function render()
    {
        $projects = Project::with(['likes', 'user'])->paginate($this->pages);
        return view('livewire.project-list', [
            'projects' =>  $projects
        ]);
    }
}
