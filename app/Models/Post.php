<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // RELACIONES UNO A MUCHOS (INVERSA)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    // RELACIONES MUCHOS A MUCHOS
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    // RELACIONES POLIMÓRFICAS
    // Relación uno a uno
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
