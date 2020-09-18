<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'apellido','telefono','activo','cuil','localidad_id','profesion_id', 'profesional', 'matricula', 'matriculado', 'se_destaca', 'facebook', 'instegram'
    ];

    public function rubros()
    {
        return $this->belongsToMany(Rubro::class);
    }
}
