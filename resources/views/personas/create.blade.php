@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
    <h2>Cargar Persona</h2>
        <div class="card" >

        <div class="card-body">
            {!! Form::open(['route' => 'personas.store', 'method'=>'posts', 'files' => true]) !!}
                @include('personas.partials._form', ['buttonText' => 'GUARDAR' ,'title' => 'Crear Persona' ,'icon' => 'floppy-disk' ,'persona'=> new App\Persona])

            {!! Form::close() !!}

        </div>
        </div>
    </div>
</div>


@endsection
