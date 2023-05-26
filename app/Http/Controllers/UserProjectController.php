<?php

namespace App\Http\Controllers;

use App\Http\Livewire\UserProjectList;
use Illuminate\Http\Request;
use App\Services\UserProjectService;
use Illuminate\Support\Facades\Auth;

class UserProjectController extends Controller
{
    public function index(UserProjectService $userProjectService)
    {
        return view('profile.projects.user-project-list');
    }
}
