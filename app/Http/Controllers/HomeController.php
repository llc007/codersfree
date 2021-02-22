<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {

//        Recupero los cursos con status 3 y los ordeno por orden descendente
        $courses = Course::where('status','3')->latest('id')->get()->take(12);


        return view('welcome',compact('courses'));
    }
}
