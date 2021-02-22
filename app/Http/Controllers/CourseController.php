<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CourseController extends Controller
{
    //

    public function index(){

        return view('courses.index');

    }

    public function show(Course $course){

        $this->authorize('published',$course);

        $similares = Course::where('category_id',$course->id)
            ->where('id','!=',$course->id)
            ->where('status',3)
            ->latest('id')
            ->take(5)
            ->get();

        return view('courses.show',compact('course', 'similares'));

    }

    public function enrolled(Course $course){

        //Para enrolar a un alumno se debe agregar el registro a la relacion
        $course->students()->attach(auth()->user()->id);

        return redirect()->route('courses.status',$course);

    }
}
