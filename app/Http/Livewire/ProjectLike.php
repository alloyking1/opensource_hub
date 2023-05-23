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
    public $likedByUser;

    public function like()
    {
        $like = Like::where('user_id', Auth::id())->where('project_id', $this->projectId)->first();
        if ($like !== null) {
            switch ($like->liked) {
                case (true):
                    $like->update(['liked' => false]);
                    break;
                case (false):
                    $like->update(['liked' => true]);
                    break;
                default:
                    return false;
            }
        } else {
            Like::create([
                'user_id' => Auth::id(),
                'project_id' => $this->projectId,
                'liked' => true
            ]);
        }

        $this->emit('refreshComponent');
    }


    public function render()
    {

        return view('livewire.project-like');
    }
}
