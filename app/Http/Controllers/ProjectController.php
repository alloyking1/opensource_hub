<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::find($id),
        ]);
    }
}
