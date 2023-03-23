<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $pages = 1;
    // public $perPage;


    public function loadMore()
    {
        $this->pages += 10;
    }

    public function render()
    {
        // $projects = Project::paginate($this->perPage, ['*'], null, $this->pages);
        $projects = Project::paginate($this->pages);

        return view('livewire.project-list', [
            'projects' =>  $projects
        ]);
    }
}
