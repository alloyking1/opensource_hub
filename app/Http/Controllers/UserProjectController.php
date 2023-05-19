<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProjectController extends Controller
{
    public function index()
    {
        // return all auth user projects
        return view('profile.projects.own');
    }
}
