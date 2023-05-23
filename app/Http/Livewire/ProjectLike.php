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
        $this->createLike(Auth::id(), $this->projectId);
        $this->emit('refreshComponent');
    }


    public function render()
    {

        return view('livewire.project-like');
    }
}
