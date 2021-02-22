<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
//    Para agregar un contador -> para acceder usar $this->students_count
    protected $withCount = ['students', 'reviews'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

//    Agregar un atributo al modelo para acceder desde el controlador usar rating sin parentesis
//Ejemplo Course:find(2)->rating;  <- en el controller
//Si no hay reviews se enviara un 5
    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    //Query Scopes
    public function scopeCategory($query, $category_id)
    {

        if ($category_id) {
            return $query->where('category_id', $category_id);
        }

    }

    public function scopeLevel($query, $level_id)
    {

        if ($level_id) {
            return $query->where('level_id', $level_id);
        }

    }

    public function getRouteKeyName()
    {
        return "slug";
    }



    //    Relacion  uno a muchos
    //
    // con Review
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

//    Con Requirement
    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }

    //    Con Goal
    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }

    //    Con Audience
    public function audiences()
    {
        return $this->hasMany('App\Models\Audience');
    }

    //    Con Sections
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }


//    Relacion uno a muchos inversa (PROFESOR)
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');

    }


//    Relacion muchos a muchos inversa (ALUMNOS)
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }


//    Relacion uno a muchos inversa con Level
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    //    Relacion uno a muchos inversa con Category
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    //    Relacion uno a muchos inversa con Price
    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }

//    Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

//    Relacion a traves
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
