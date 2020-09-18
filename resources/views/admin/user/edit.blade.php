@extends('layouts.app')

@section('content')
<div class="card" >
  
  <div class="card-body">
  <h5 class="card-title">Editar Usuario</h5>
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'put', 'files' => true]) !!}
        @include('admin.user.partials.form') 
         {{ Form::submit('Guardar', ['class' => 'btn btn-primary float-right mt-3'])}}
    {!! Form::close() !!}
  
  </div>
</div>

@endsection
