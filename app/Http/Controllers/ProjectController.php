<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Enums\ProjectCategoryEnum;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create', [
            'category' => ProjectCategoryEnum::class,
        ]);
    }

    public function save(ProjectCreateRequest $request)
    {
        $project = Project::updateOrCreate($request->except('_token'));
        // $project->category->
        // $session->ha TODO return flash message of success
        return view('dashboard');
    }

    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::find($id),
        ]);
    }
}
