<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\UserProjectService;

class UserProjectList extends Component
{
    public function render(UserProjectService $userProjectService)
    {
        return view('livewire.user-project-list', ['userProjects' => $userProjectService->allUserProjects()]);
    }
}
