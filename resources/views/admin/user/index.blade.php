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
                                 <h4> <i class="fas fa-users"></i> Listado de usuarios  <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary float-right"><i class='fa fa-plus'></i>  Usuario</a></h4>
                                </div>
                                <div class="card-body">
                                   <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                   </table>
                                </div>
                            </div>
                </div>
    </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">

  var url= "{{ url('api/lista-de-usuarios') }}";
  var table = $('#table').DataTable({
   "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
   "responsive" :true,
   "ajax": url,
   "ordering": false,
   "columns": [
   {"data":"id","visible": true,'title':'ID' },
   {"data":"name","visible": true,'title':'Nombre' },
   {"data":"email","visible": true,'title':'E-mail' },
   {
     "data": null,
     "render": function ( data, type, full, meta ) {
       var str = "{{ URL::to('admin/users/ID/edit') }}";
       var res = str.replace("ID", data.id);
      return "<a  href='"+res+"' class='btn btn-info btn-xs' width='30px' ><i class='fa fa-edit'></i> Editar</a>";
    }
    }
   ],
   "lengthMenu": [[10, 25, -1], [ 10, 25, "TODOS"]],
 });
</script>
@stop
