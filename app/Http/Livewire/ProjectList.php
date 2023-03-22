<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $pages = 10;

    public function loadMore()
    {
        $this->pages += 10;
    }

    public function render()
    {
        return view('livewire.project-list', [
            'projects' =>  Project::paginate($this->pages),
        ]);
    }
}
