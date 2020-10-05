@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Editar Role</h5>
                {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method'=>'put', 'files' => true]) !!}
                    @include('admin.roles.partials.form')
                    {{ Form::button('<i class="far fa-save"></i> GUARDAR', ['type' => 'submit', 'class' => 'btn btn-primary  btn-block mt-3'] )  }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
