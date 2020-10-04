<div class="row d-flex  py-2">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
          <div class="form-group">
              {{ Form::select('localidad_id', $localidades, null, ['class' => 'form-control', 'id' => 'localidad_id', 'placeholder' => 'Localidad']) }}
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
          <div class="form-group">
              {{ Form::select('rubro_id', $rubros, null, ['class' => 'form-control', 'id' => 'rubro_id', 'placeholder' => 'Rubro']) }}
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <button  type="text" id="btnFiterSubmitSearch" class="btn btn-primary btn-block">
                   <i class="fas fa-search"></i> BUSCAR
                </button>
        </div>
</div>
