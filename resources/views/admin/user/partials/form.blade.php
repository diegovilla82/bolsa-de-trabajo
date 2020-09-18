{{ Form::hidden('user_id', auth()->user()->id) }}
<ul class="list-group">

  <li class="list-group-item"><div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }} 
  </div></li>
  
  <li class="list-group-item">
    <div class="form-group">
      {{ Form::label('roles', 'Roles') }}
      <ul>
        @foreach($roles as $role)
        
        <li>
        <label class="ml-2"> 
          {{ Form::checkbox('roles[]', $role->id) }} {{ $role->name }}
        </label>
        </li>
        @endforeach
        </ul>
    </div>
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
    $(document).ready(function(){
       
        $("#name, #slug").keyup(function(){
            //alert("The text has been changed.");
            //debugger;
            //alert(convertToSlug(this.value))
            var slug = convertToSlug(this.value);
            $('#slug').val(slug);
            });
    });

    CKEDITOR.config.height = 300;
    CKEDITOR.config.width = 'auto';

    CKEDITOR.replace('body');
  //  CKEDITOR.replace('excerpt');
</script>

@endsection