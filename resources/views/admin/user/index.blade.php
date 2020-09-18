@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
                           
                    @if (session('status'))
                        <div class="alert alert-success" user="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       
                            <div class="card mb-5">
                            <div class="card-header">
                                 Lista de mis entradas 
                                 <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary float-right"> Crear</a>     
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
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }} </td>
                                            <td>{{ $user->name }} </td>
                                            <td>{{ $user->email }} </td>
                                            <td> <a  href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-light float-center"> Edit</a>  </td>
                                            <td> <a   href="{{ route('users.show', $user->id) }}" class="btn btn-xs btn-light float-center"> Ver</a>  </td>
                                             <td> 
                                                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-danger" > Eliminar</button>
                                                {!! Form::close() !!}
                                              </td>
                                        </tr>
                                          @endforeach
                                    </tbody>
                                   </table>
                                </div>                                                            
                            </div>
                      
                   {{ $users->links() }}
                </div>
            
    </div>
</div>
@endsection
