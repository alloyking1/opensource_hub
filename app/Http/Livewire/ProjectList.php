<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class ProjectList extends Component
{
    public $pages = 10;
    // public $perPage;
    protected $listeners = ['refreshComponent' => '$refresh'];


    public function loadMore()
    {
        $this->pages += 10;
    }

    public function likedByUser($projectId)
    {
        return (bool) Like::where('user_id', Auth::id())->Where('project_id', $projectId)->Where('liked', true)->exists();
    }

    public function render()
    {
        $projects = Project::with(['likes', 'user'])->paginate($this->pages);
        return view('livewire.project-list', [
            'projects' =>  $projects
        ]);
    }
}
