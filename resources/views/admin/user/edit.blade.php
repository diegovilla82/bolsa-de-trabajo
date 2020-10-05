@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
<div class="card" >

  <div class="card-body">
  <h5 class="card-title">Editar Usuario</h5>
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'put', 'files' => true]) !!}
        @include('admin.user.partials.form')
         {{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block mt-3'])}}
    {!! Form::close() !!}

  </div>
</div>

  </div>
</div>
@endsection
