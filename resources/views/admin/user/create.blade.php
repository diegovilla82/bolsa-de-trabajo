@extends('layouts.app')

@section('content')
<div class="card" >
  
  <div class="card-body">
  <h5 class="card-title">Crear Usuario</h5>
    {!! Form::open(['route' => 'users.store', 'method'=>'posts', 'files' => true]) !!}
        {{-- @include('admin.users.partials.form') --}}
         {{ Form::submit('Crear', ['class' => 'btn btn-primary float-right mt-3'])}}
    {!! Form::close() !!}
  
  </div>
</div>

@endsection
