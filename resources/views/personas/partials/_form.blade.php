{!! csrf_field() !!}

<div class="panel panel-default">


  <h4>Datos personales</h4>
  <hr />
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
              <label class="control-label" for="nombre">Nombre:</label>
              <div class="controls">
                {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
                {!! $errors->first('nombre', '<span>:message</span>') !!}
              </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
              <label class="control-label" for="nombre">Apellido:</label>
              <div class="controls">
                <input class="form-control" type="text" name="apellido" value="{{ old('apellido', $persona->apellido) }}">
                {!! $errors->first('apellido', '<span>:message</span>') !!}
              </div>
        </div>
    </div>
  </div>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">CUIL:</label>
            <div class="controls">
              <input class="form-control" type="text" name="cuil" value="{{ old('cuil', $persona->cuil) }}">
              {!! $errors->first('cuil', '<span>:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
              <label class="control-label" for="nombre">Localidades:</label>
              <div class="controls">
                {!! Form::select('localidad_id', $localidades, null, ['class' => 'form-control' , 'placeholder' => 'SELECCIONAR LOCALIDAD']) !!}
                {!! $errors->first('localidad_id', '<span>:message</span>') !!}
              </div>
        </div>
    </div>
  </div>
   <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">Teléfono:</label>
            <div class="controls">
              <input class="form-control" type="text" name="telefono" value="{{ old('telefono', $persona->telefono) }}">
              {!! $errors->first('telefono', '<span>:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">E-mail:</label>
            <div class="controls">
              <input class="form-control" type="text" name="email" value="{{ old('email', $persona->email) }}">
              {!! $errors->first('email', '<span>:message</span>') !!}
            </div>
        </div>
    </div>
  </div>
     <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">Facebook:</label>
            <div class="controls">
              <input class="form-control" type="text" name="facebook" value="{{ old('facebook', $persona->facebook) }}">
              {!! $errors->first('facebook', '<span>:message</span>') !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">Instegram:</label>
            <div class="controls">
              <input class="form-control" type="text" name="instegram" value="{{ old('instegram', $persona->instegram) }}">
              {!! $errors->first('instegram', '<span>:message</span>') !!}
            </div>
        </div>
    </div>
  </div>
  {{-- <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
              <label class="control-label" for="nombre">Activo:</label>
              <div class="controls">
                <input class="" type="checkbox" id="activo" name="activo" {{ $persona->activo == '1'? 'checked':""  }}  >
              </div>
        </div>
    </div>
  </div> --}}
  <h4>Datos laborales</h4>
  <hr />
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">Título:</label>
              <div class="controls">
                {!! Form::select('profesion_id', $profesiones, null, ['class' => 'form-control' , 'placeholder' => 'SELECCIONAR TITULO']) !!}
                {!! $errors->first('profesion_id', '<span>:message</span>') !!}
              </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label class="control-label" for="nombre">Matricula:</label>
            <div class="controls">
              <input class="form-control" type="text" name="matricula" value="{{ old('matricula', $persona->matricula) }}">
              {!! $errors->first('matricula', '<span>:message</span>') !!}
            </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
             {{ Form::label('rubros', 'Rubros') }}
            <div class="controls">
               @foreach($rubros as $rubro)
                <label class="check">
                  {{ Form::checkbox('rubros[]', $rubro->id) }} {{ $rubro->nombre }}
                </label>
              @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label" for="nombre">Se destaca en:</label>
                <div class="controls">
                  <textarea class="form-control" id="se_destaca" name="se_destaca" >{{ old('se_destaca', $persona->se_destaca) }}</textarea>
                </div>
            </div>
        </div>
    </div>

  <hr />
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <button type="submit" class="btn btn-primary btn-lg btn-block  mt-3">
              <i class="fa fa-{{ $icon }}"></i> {{ $buttonText }}
            </button>
      </div>
  </div>


</div>
