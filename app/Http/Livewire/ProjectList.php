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


    public function loadMore()
    {
        $this->pages += 10;
    }

    public function likedByUser($projectId)
    {
        return (bool) Like::where('user_id', Auth::id())->andWhere('project_id', $projectId)->andWhere('liked', true)->get();
    }

    public function render()
    {
        $projects = Project::with(['likes', 'user'])->paginate($this->pages);
        return view('livewire.project-list', [
            'projects' =>  $projects
        ]);
    }
}
