<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //EL user es el usuario autentificado
    public function enrolled(User $user, Course $course)
    {
        //Verifica si un alumno se encuentra matriculado en el $course
        // Al final debe retonrnar un booleano


        return $course->students->contains($user->id);

    }

    public function published(?User $user, Course $course){

        if($course->status == 3){
            return true;
        }else {
            return false;
        }

    }

}
