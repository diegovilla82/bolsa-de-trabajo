@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card" >
            <div class="card-body">

                    <h5 class="card-title">Crear Role</h5>

                    {!! Form::open(['route' => 'roles.store', 'method'=>'posts', 'files' => true]) !!}
                        @include('admin.roles.partials.form')
                        {{ Form::submit('Crear', ['class' => 'btn btn-primary btn-block mt-3'])}}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
