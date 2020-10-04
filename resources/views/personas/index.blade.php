@extends('layouts.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link href="{{ url('assets/nprogress/nprogress.css') }}" rel="stylesheet">
<link href="{{ url('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                            <div class="card mb-5">
                            <div class="card-header">
                                <h4> <i class='fa fa-list'></i> Listado de contratistas  <a href="{{ route('personas.create') }}" class="btn btn-sm btn-primary float-right"><i class='fa fa-plus'></i>  Contratista</a></h4>

                            </div>
                                <div class="card-body">
                                     <table id="table" class="table" cellspacing="0" width="100%"></table>
                                </div>
                            </div>


                </div>

    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>

<script type="text/javascript">

  var url= "{{ url('lista-personas') }}";
  var table = $('#table').DataTable({
   "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
   "responsive" :true,
   "ajax": url,
   "ordering": false,
   "columns": [
   {"data":"id","visible": false,'title':'ID' },
   {"data":"activo","visible": false,'title':'activo'},
   {
    "data": null,
    "title":"Activo",
    "visible": true,
    "render": function ( data, type, full, meta ) {
        var vin = data.activo;
        if(vin === 0){
        return '<button type="button" class="btn btn-round btn-warning"></button>';
          }else {
              return '<button type="button" class="btn btn-round btn-info"></button>';
          }
        }
   },
   {"data":"localidad","visible": true,'title':'Localidad'},
   {"data":"apellido","visible": true,'title':'Apellido.' },
   {"data":"nombre","visible": true,'title':'Nombre' },
   {"data":"cuil","visible": true,'title':'CUIL' },
   {"data":"telefono","visible": false,'title':'Telefono' },
   {"data":"email","visible": false,'title':'E-mail' },
   {
     "data": null,
     "render": function ( data, type, full, meta ) {
       var str = "{{ URL::to('personas/ID/edit') }}";
       var res = str.replace("ID", data.id);
      return "<a  href='"+res+"' class='btn btn-info btn-xs' width='30px' ><i class='fa fa-edit'></i> Editar</a>";
    }
             }
   ],
   "lengthMenu": [[ 25, -1], [ 10, 25, "TODOS"]],
 });
</script>
@stop
