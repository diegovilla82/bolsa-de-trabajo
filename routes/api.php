<?php

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Persona;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('contratistas', function(){

    return datatables()->eloquent(App\Persona::query())->toJson();
});

Route::get('contratistas-filtrados', function(){

    //$personasQuery = Persona::query();


    $localidad_id = (!empty($_GET["localidad_id"])) ? $_GET["localidad_id"] : 'null';
    $rubro_id = (!empty($_GET["rubro_id"])) ? $_GET["rubro_id"] : 'null';

      $personasQuery = DB::table('personas')
            ->join('persona_rubro', 'personas.id', '=', 'persona_rubro.persona_id')
            //->join('run', 'users.id', '=', 'orders.user_id')
            ->select('personas.*')
            ->where('personas.localidad_id', $localidad_id)
            ->where('persona_rubro.rubro_id', $rubro_id)
            ->get();
    //$personasQuery->whereRaw("(personas.localidad_id = '".$localidad_id."')");


    $personas = $personasQuery; //->select('*');

    //return $persona;

    return datatables()->of($personas)->make(true);
});
