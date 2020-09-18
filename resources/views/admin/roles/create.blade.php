@extends('layouts.app')

@section('content')
<div class="card" >
  
  <div class="card-body">
  <div class="row">
    <h5 class="card-title">Crear Entrada</h5>
   
  </div> 
    {!! Form::open(['route' => 'roles.store', 'method'=>'posts', 'files' => true]) !!}
        @include('admin.roles.partials.form')
         {{ Form::submit('Crear', ['class' => 'btn btn-primary float-right mt-3'])}}
    {!! Form::close() !!}
  
  </div>
</div>

@endsection
