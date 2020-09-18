@extends('layouts.app')

@section('content')
<div class="card" >

  <div class="card-body">
  <h5 class="card-title"> Persona</h5>
    <ul>
        <li>
            {{ Form::label('Name', 'Nombre: ') }}
            {{ $persona->nombre }}
        </li>
        <li>
            {{ Form::label('slug', 'Slug: ') }}
            {{ $persona->apellido }}
        </li>
    </ul>

  </div>
</div>

@endsection
