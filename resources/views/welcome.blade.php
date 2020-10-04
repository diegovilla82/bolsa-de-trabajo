@extends('layouts.app')
@section('styles')
 <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center" >

        <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                         <h3 class="display-6 text-center">Buscar contratista</h3>
                    </div>
                </div>

                <hr/>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 mx-auto">
                        <div class="card shadow">
                            <div class="card-body">
                                @include('partials.filtro-caja')
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>
                  <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-12 py-3">
                                            <table class="table table-striped table-bordered" name="table" id="laravel_datatable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>APELLIDO</th>
                                                        <th>NOMBRE</th>
                                                        <th>CUIL</th>
                                                        <th>CELULAR</th>
                                                        <th>VER</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
</div>

@include('partials._modal_contratista')

 @endsection
 @section('scripts')

<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js" ></script>
 <script>
 $(document).ready( function () {

    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nombrecompleto = button.data('nombrecompleto') // Extract info from data-* attributes
    var cuil = button.data('cuil') // Extract info from data-* attributes
    var telefono = button.data('telefono') // Extract info from data-* attributes


    console.log('llega');
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.card-title').text( nombrecompleto)
    modal.find('.card-text').text('CUIL: ' + cuil )
    // modal.find('.modal-body input').val(recipient)
    });

     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  $('#laravel_datatable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-warning',
                        text: '<i class="fa fa-print" > Imprimir </i>',
                        title: 'Listado de contratistas',
                        orientation: 'landscape',
                        defaultStyle: {
                            'alignment': 'center'
                          },
                        //pageSize: 'LEGAL',
                        exportOptions: {
                                    'columns': [1,2,3],// columnas que se imprimen
                                },
                        customize: function ( win ) {
                            debugger;
                            $(win.document.body)
                            .find('table')
                            .addClass( 'compact' )
                            .css( 'font-size', '9pt' )
                            .attr('align', 'center')
                            .css('width', '100%');
                          },
                    }
                ],
         processing: true,
         order: [[0, 'desc']],
         serverSide: true,
         ajax: {
          url: "{{ url('/api/contratistas-filtrados') }}",
          type: 'GET',
          data: function (d) {
              debugger;
             d.localidad_id = $('#localidad_id').val();
             d.rubro_id = $('#rubro_id').val();
          }
         },
         columns: [
                  { data: 'id', name: 'id', visible: false },
                  { data: 'apellido', name: 'apellido' },
                  { data: 'nombre', name: 'nombre' },
                  { data: 'cuil', name: 'cuil' },
                  { data: 'telefono', name: 'telefono' },
                  {
                    "data": null,
                    "render": function ( data, type, full, meta ) {
                        console.log(data.apellido);
                    return "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-nombrecompleto='"+data.apellido+" "+data.nombre+"' data-cuil='"+data.cuil+"' data-telefono='"+data.telefonol+"'>Datos</button>";}
                  }
               ],
        "lengthMenu": [[ 50, -1], [50, "All"]]
      });
   });

  $('#btnFiterSubmitSearch').click(function(){
      //debugger;
     $('#laravel_datatable').DataTable().draw(true);
  });
</script>
@endsection
