@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
                           
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       
                            <div class="card mb-5">
                            <div class="card-header">
                                 Lista de roles 
                                 <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary float-right"> Crear</a>     
                            </div>
                                <div class="card-body">
                                   <table class='table'>
                                   <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }} </td>
                                            <td>{{ $role->name }} </td>
                                            <td>{{ $role->slug }} </td>
                                            <td> <a  href="{{ route('roles.edit', $role->id) }}" class="btn btn-xs btn-light float-center"> Edit</a>  </td>
                                            <td> <a   href="{{ route('roles.show', $role->id) }}" class="btn btn-xs btn-light float-center"> Ver</a>  </td>
                                             <td> 
                                                {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-danger" > Eliminar</button>
                                                {!! Form::close() !!}
                                              </td>
                                        </tr>
                                          @endforeach
                                    </tbody>
                                   </table>
                                </div>                                                            
                            </div>
                      
                   {{ $roles->links() }}
                </div>
            
    </div>
</div>
@endsection
