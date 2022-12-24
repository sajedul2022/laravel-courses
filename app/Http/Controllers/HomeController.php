<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Series;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function home(){

        // series
        $series = Series::take(4)->get();
        // dd($series);

        // feature courses
        $featureCourses = Course::take(6)->get();

        return view('welcome',[
            'series'=> $series,
            'courses'=> $featureCourses,
        ]);
    }


}
