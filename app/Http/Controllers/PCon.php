<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCon extends Controller
{
    //
    public function index(){
        // $course= array(
        //     "name" => "Programming with Python",
        //     "instructor" => "Mr. David",
        //     "duration" => "4 months",
        //     "start" => "10th February 2022"
        // );
        // $course = (object)$course;
        return view('home.index');
    }
}
