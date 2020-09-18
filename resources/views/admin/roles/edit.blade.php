@extends('layouts.app')

@section('content')
<div class="card" >
  
  <div class="card-body">
  <h5 class="card-title">Editar Role</h5>
    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method'=>'put', 'files' => true]) !!}
        @include('admin.roles.partials.form')
         {{ Form::submit('Guardar', ['class' => 'btn btn-primary float-right mt-3'])}}
    {!! Form::close() !!}
  
  </div>
</div>

@endsection
