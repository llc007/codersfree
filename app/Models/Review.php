<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


//    Relacion inversa uno a muchos con USer
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //    Relacion inversa uno a muchos con Course
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
