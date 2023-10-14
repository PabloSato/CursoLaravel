<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    // Recuperamos el usuario al que pertenece el perfil
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
