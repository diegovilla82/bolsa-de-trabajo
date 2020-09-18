@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
         <h2>Editar Persona</h2>
        <div class="card" >

        <div class="card-body">

        <hr />
            {!! Form::model($persona, ['route' => ['personas.update', $persona->id], 'method'=>'put', 'files' => true]) !!}
                @include('personas.partials._form',['buttonText' => 'ACTUALIZAR' ,'title' => 'Editar Persona' ,'icon' => 'edit' ])

            {!! Form::close() !!}

        </div>
        </div>
    </div>
</div>
@endsection
