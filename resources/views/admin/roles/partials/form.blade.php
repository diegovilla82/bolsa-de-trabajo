
<ul class="list-group">
  
  <li class="list-group-item">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }} 
    </div>
  </li>
   <li class="list-group-item">
    <div class="form-group">
      <label for="exampleInputEmail1">Slug</label>
      {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }} 
    </div>
  </li>
  <li class="list-group-item">
    <div class="form-group">
      <label >Descripción</label>
      {{ Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) }} 
    </div>
  </li>
  
  <li class="list-group-item"><div class="form-group">
    <label > {{ Form::radio('special', 'all-access') }} Acceso total </label>
    <label > {{ Form::radio('special', 'no-access') }} Ningún acceso </label>
  </div></li>
  
  <li class="list-group-item">
    <div class="form-group">
      <h3>Lista de permisos</h3>
      <ul>
        @foreach($permissions as $permission)
        
        <li>
        <label class="ml-2"> 
          {{ Form::checkbox('permissions[]', $permission->id, null) }} {{ $permission->name }}
        </label>
        </li>
        @endforeach
        </ul>
    </div>
</li>
  
</ul>
