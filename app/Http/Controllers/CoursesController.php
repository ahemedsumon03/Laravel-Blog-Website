<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;

class CoursesController extends Controller
{
    public function CoursesIndex()
    {
        $courses = CourseModel::OrderBy('id','desc')->get();

        return view('Courses',[
            'courses'=>$courses
        ]);
    }
}