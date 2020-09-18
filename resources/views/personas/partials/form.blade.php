{{-- {{ Form::hidden('user_id', auth()->user()->id) }} --}}
<ul class="list-group">
  <li class="list-group-item"><div class="form-group">
   {{ Form::label('localidad_id', 'Localidades') }}
   {{ Form::select('localidad_id', $localidades, null, ['class' => 'form-control', 'id' => 'localidad_id']) }}
  </div></li>
  <li class="list-group-item"><div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
  </div></li>
  <li class="list-group-item"><div class="form-group">
    {{ Form::label('apellido', 'Apellido') }}
     {{ Form::text('apellido', null, ['class' => 'form-control', 'id' => 'apellido']) }}
  </div></li>
  <li class="list-group-item"><div class="form-group">
    {{ Form::label('telefono', 'Telefono') }}
     {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
  </div></li>
  <li class="list-group-item"><div class="form-group">
    {{ Form::label('email', 'E-mail') }}
     {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
  </div></li>
  <li class="list-group-item"><div class="form-group">
    {{ Form::label('cuil', 'CUIL') }}
     {{ Form::text('cuil', null, ['class' => 'form-control', 'id' => 'cuil']) }}
  </div></li>
  {{-- <li class="list-group-item"><div class="form-group">
    {{ Form::label('file', 'Imagen: ') }}
     {{ Form::file('file') }}
  </div></li> --}}
  {{-- <li class="list-group-item">
      <div class="form-group">
        {{ Form::label('status', 'Estado') }}
        <label class="ml-2">
          {{ Form::radio('status', 'PUBLISHED') }} Publicado
        </label>
        <label class="ml-2">
          {{ Form::radio('status', 'DRAFT') }} Borrador
        </label>
      </div>
  </li> --}}
  <li class="list-group-item"><div class="form-group">
   {{ Form::label('profesion_id', 'Profesiones') }}
   {{ Form::select('profesion_id', $profesiones, null, ['class' => 'form-control', 'id' => 'profesion_id']) }}
  </div></li>
  <li class="list-group-item"><div class="form-group">
    {{ Form::label('matricula', 'Matricula') }}
     {{ Form::text('matricula', null, ['class' => 'form-control', 'id' => 'matricula']) }}
  </div></li>
  <li class="list-group-item">
    <div class="form-group">
      {{ Form::label('rubros', 'Rubros') }}
        @foreach($rubros as $rubro)
        <label class="ml-2">
          {{ Form::checkbox('rubros[]', $rubro->id) }} {{ $rubro->nombre }}
        </label>
        @endforeach
    </div>
</li>

  <li class="list-group-item">
     {{ Form::label('se_destaca', 'Se especializa') }}
     {{  Form::textarea('se_destaca', null, ['class' => 'form-control', 'id' => 'se_destaca', 'rows' => '5'])  }}
  </li>
</ul>

@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}" ></script>
<script>
    function convertToSlug(str)
{
    str = str.replace(/^\s+|\s+$/g, ''); // trim
  str = str.toLowerCase();

  // remove accents, swap ñ for n, etc
  var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
  var to   = "aaaaaeeeeeiiiiooooouuuunc------";
  for (var i=0, l=from.length ; i<l ; i++) {
    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
  }

  str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
    .replace(/\s+/g, '-') // collapse whitespace and replace by -
    .replace(/-+/g, '-'); // collapse dashes

  return str;
}

</script>

@endsection
