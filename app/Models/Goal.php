<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //    Relacion uno a muchos inversa
//COn Course

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
