<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TearmsController extends Controller
{
    public function TearmsIndex()
    {
        return view('Tearms');
    }
}
