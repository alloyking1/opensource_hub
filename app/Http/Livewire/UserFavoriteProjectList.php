<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Traits\LikeTrait;

class UserFavoriteProjectList extends Component
{
    use LikeTrait;

    public function likedByUser($projectId)
    {
        return $this->isLikedBy(Auth::id(), $projectId);
    }

    public function render()
    {
        return view('livewire.user-favorite-project-list', [
            'projects' =>  $projects = Project::with(['likes', 'user'])->paginate(10)
        ]);
    }
}
