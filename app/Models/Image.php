<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    // Para permitir la asignación masiva
    // Ningún campo de esta tabla va a estar protegido
    protected $guarded = [];

    use HasFactory;

    public function imageable()
    {
        return $this->morphTo();
    }
}
