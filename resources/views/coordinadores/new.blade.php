@extends('layouts.app')

@section('content')
	 <div class="row">
    <form class="col s12" method="POST">
     {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nombre" required>
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="text" class="validate" name="paterno" required>
          <label for="icon_telephone">Paterno</label>
        </div>
        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="text" class="validate" name="materno" required>
          <label for="icon_telephone">Materno</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s3">
          <i class="material-icons prefix">email</i>
          <input id="icon_prefix" type="email" class="validate" name="email" required>
          <label for="icon_prefix">e-mail</label>
        </div>
        <div class="input-field col s3">
          <i class="material-icons prefix">local_phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="telefono" required>
          <label for="icon_telephone">Telefono</label>
        </div>
     
      </div>
      <div class="row">
		  <div class="input-field col s3">
		   <i class="material-icons prefix">school</i>
		    <select name="grado" required>
		      <option value="" disabled selected>Escoga una opcion</option>
		      <option value="LIC">Licenciatura</option>
		      <option value="ING">Ingenieria</option>
		      <option value="MTR">Maestria</option>
		      <option value="DR">Doctorado</option>
		    </select>
		    <label>Grado Academico</label>
			</div>
        <div class="input-field col s3">
          <i class="material-icons prefix">work</i>
          <input id="icon_telephone" type="text" class="validate" name="carrera" required>
          <label for="icon_telephone">Carrera</label>
        </div>
     	<div class="row">
     		<input type="submit" value="Enviar" class="btn">
     	</div>
     	@if ($errors->any())
     		@foreach ($errors->get('nombre') as $error)
     			<div class="row">
     				{{ $error }}
     			</div>
     		@endforeach
     	@endif
     	
      </div>
    </form>
  </div>
@endsection