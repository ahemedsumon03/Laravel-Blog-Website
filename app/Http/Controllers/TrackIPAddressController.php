<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IPaddressModel;
use App\ServiceModel;
use App\CourseModel;
use App\ProjectModel;
use App\ReviewModel;

class TrackIPAddressController extends Controller
{
    function TrackIp()
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $timeDate = date('Y-m-d h:i:sa');

        IPaddressModel::insert(['ip_address'=>$ip_address,'time'=>$timeDate]);

        $services = ServiceModel::all();
        $courses = CourseModel::OrderBy('id','desc')->limit(6)->get();
        $project = ProjectModel::OrderBy('id','desc')->limit(10)->get();
        $review = ReviewModel::OrderBy('id','desc')->limit(5)->get();


        return view('Home',[
            'services'=>$services,
            'courses'=>$courses,
            'project'=>$project,
            'review'=>$review,
        ]);
    }
}
