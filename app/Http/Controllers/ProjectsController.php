<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;

class ProjectsController extends Controller
{
    public function ProjectsIndex()
    {
        $projects = ProjectModel::OrderBy('id','desc')->get();

        return view('Projects',[
            'projects'=>$projects
        ]);
    }
}
