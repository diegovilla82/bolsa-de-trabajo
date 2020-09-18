@extends('layouts.app')

@section('content')
<div class="card" >
  
  <div class="card-body">
  <h5 class="card-title"> Role</h5>
    <ul>
        <li>
            {{ Form::label('name', 'Nombre: ') }}
            {{ $role->name }}
        </li>
        <li>
            {{ Form::label('slug', 'Slug: ') }}
            {{ $role->slug }}
        </li>
        
    </ul>
  
  </div>
</div>

@endsection