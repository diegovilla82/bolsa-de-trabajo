<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubro;
use App\Localidad;

class FrontendController extends Controller
{
    public function welcome()
    {
        $localidades = Localidad::pluck('nombre', 'id');
        $rubros = Rubro::pluck('nombre', 'id');

        //return $localidades;
        return view('welcome', compact('localidades','rubros'));
    }
}
