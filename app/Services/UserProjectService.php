<?php

namespace App\Services;

use App\Models\User;

class UserProjectService
{

    public function allUserProjects()
    {
        //fix pagination
        return $userProjects = User::with('projects')->get();
    }

    public function likedUserProjects()
    {
        $likedProjects = User::with('like')->where('liked', true)->get();
    }
}
