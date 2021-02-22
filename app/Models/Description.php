<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //    Relacion uno a uno inversa
//Con Lesson

    public function lesson(){

        return $this->belongsTo('App\Models\Lesson');
    }

//    Relacion muchos a muchos
//Con USers

public function users(){
        return $this->belongsToMany('App\Models\User');
}


}
