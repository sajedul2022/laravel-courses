<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($slug){
        $course = Course::where('slug', $slug)->with('platform', 'topics', 'series')->first();

        // test view
        // return response()->json($course);

        // wrong page
        if(empty($course)){
            return abort(404);
        }

        return view('course.single',[
            'course'=> $course,
        ]);
    }
}
