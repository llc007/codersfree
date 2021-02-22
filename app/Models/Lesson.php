<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }


    //    Relacion uno a muchos inversas
//    con Section

    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

// con Platform
    public function platform(){

        return $this->belongsTo('App\Models\Platform');
    }

//    Relacion uno a uno
//Con Description

    public function description(){

        return $this->hasOne('App\Models\Description');
    }

//    Relacion uno a uno polimorfica
//CON RESOURCE
    public function resource(){

        return $this->morphOne('App\Models\Resource','resourceable');
    }

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }




    //    Relacion uno a muchos polimorfica
//CON Comment
    public function comments(){

        return $this->morphMany('App\Models\Comment','commentable');
    }

    //CON Reaction
    public function reactions(){

        return $this->morphMany('App\Models\Reaction','reactionable');
    }


}
