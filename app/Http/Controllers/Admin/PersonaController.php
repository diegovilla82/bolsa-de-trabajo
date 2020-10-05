<?php

namespace App\Http\Controllers\Admin;

use App\Persona;
use Illuminate\Http\Request;
use App\Rubro;
use App\Localidad;
use App\Profesion;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$isEditor = auth()->user()->hasRole('editor');

        //$personas = Persona::orderBy('id', 'DESC')->paginate(5);

        return view('personas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $profesiones = Profesion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $rubros = Rubro::orderBy('nombre', 'ASC')->get();

        return view('personas.create', compact('localidades','rubros', 'profesiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $persona = Persona::create($request->all());

        $request->validate([
            'file' => 'image|max:2048'
        ]);

        if($request->file('file'))
        {
            //$path = Storage::disk('public')->put('image', $request->file('file'));
            $imagenes = $request->file('file')->store('public/imagenes');

            $url = Storage::url($imagenes);

            //$persona->fill(['imagen' => asset($path)])->save();
            $persona->fill(['imagen' => asset($url)])->save();
        }

        $persona->activo = 1;

        if($persona->profesion_id != null)
        {
            $persona->profesional = 1;
        }

        if($persona->matricula != null)
        {
            $persona->matriculado = 1;
        }



        $persona->save();

        $persona->rubros()->attach($request->get('rubros'));

        return redirect()->route('personas.edit', $persona->id)->with('info', 'La persona se creo con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        //-- politica de seguridad, dada de alta en el AuthServiceProvider
       // $this->authorize('pass', $post);

        return view('persona.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);

       // return $persona;
        //$this->authorize('pass', $post);

        $localidades = Localidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $profesiones = Profesion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $rubros = Rubro::orderBy('nombre', 'ASC')->get();

        return view('personas.edit', compact('persona', 'localidades', 'rubros', 'profesiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validar

        $persona = Persona::find($id);
        //-- politica de seguridad, dada de alta en el AuthServiceProvider
        //$this->authorize('pass', $post);

        $persona->fill($request->except(['imagen']))->save();

        if($request->file('file'))
        {
            //$path = Storage::disk('public')->put('image', $request->file('file'));
            $imagenes = $request->file('file')->store('public/imagenes');

            $url = Storage::url($imagenes);

            //$persona->fill(['imagen' => asset($path)])->save();
            $persona->fill(['imagen' => $url])->save();
        }

        if($persona->profesion_id != null)
        {
            $persona->profesional = 1;
        }

        if($persona->matricula != null)
        {
            $persona->matriculado = 1;
        }

        $persona->save();

        $persona->rubros()->sync($request->get('rubros'));

        return redirect()->route('personas.edit', $persona->id)->with('info', 'La persona se actualizo con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona =Persona::find($id);
        //-- politica de seguridad, dada de alta en el AuthServiceProvider
        //$this->authorize('pass', $post);

        $persona->delete();

        return back()->with('info', 'La persona se elimino correctamente.');
    }
}
