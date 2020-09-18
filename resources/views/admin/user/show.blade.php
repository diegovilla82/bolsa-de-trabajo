@extends('layouts.app')

@section('content')
<div class="card" >
  
  <div class="card-body">
  <h5 class="card-title"> Entrada</h5>
    <ul>
        <li>
            {{ Form::label('Name', 'Nombre: ') }}
            {{ $user->name }}
        </li>
        
    </ul>
  
  </div>
</div>

@endsection