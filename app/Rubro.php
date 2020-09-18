<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    public function personas()
    {
        return $this->belongsToMany(Persona::class);
    }
}
