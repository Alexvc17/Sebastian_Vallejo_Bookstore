@extends('principal')
@section('content')




<br>
<br>
<br>

<br>




<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">

  <h2><em><strong>Actualizacion de Editorial</strong></em></h2>
  <hr>
<br>
  <form action="{{route('actualizar_editorial', $editorial->id)}}" method="POST">
@csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="nombreEdi">Nombre</label>
        <input type="text" id="nombreEdi" name="nombreEdi" value="{{$editorial->nombre}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    </div>

     <!-- Etiquetas de tipo number -->
    <div class="form-group">
        <label for="cantidadPro">Direccion</label>
        <input type="text" id='direccionEdi' name='direccionEdi' value="{{$editorial->direccion}}" class="form-control" placeholder="Cantidad" required>
    </div>

     <!-- Etiquetas de tipo number -->
     <select class="form-select" aria-label="Default select example" name="ciudadEdi" id="ciudadEdi">
  <option selected>{{$editorial->ciudad}}</option>
  <option value="Bogota">Bogota</option>
  <option value="Cali">Cali</option>
  <option value="Medellin">Medellin</option>
</select>

<br><br>
     <!-- Etiquetas de tipo number -->
     <div class="form-group">
        <label for="precioPro">Telefono</label>
        <input type="text" id='direccionEdi' name='telefonoEdi' value="{{$editorial->telefono}}"   class="form-control" placeholder="Cantidad" required>
    </div>


    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
    <button type="reset" class="btn btn-secondary btn-sm">Limpiar</button>
    <a type="button" href="{{url('/editorial')}}" class="btn btn-danger btn-sm">Cancelar</a>
</form>


  </div>
  <div class="col-md-2"></div>
</div>



@stop