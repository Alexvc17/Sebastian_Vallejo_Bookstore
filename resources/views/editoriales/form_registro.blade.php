@extends('principal')
@section('content')


<br>
<br>
<br>

<div class="container">
<h2><em> <strong>Registro de Editoriales</strong> </em></h2>
<br>
<form action="{{url('editoriales/registro')}}" method="POST">
@csrf
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
</span>
        <input type="text" class="form-control" placeholder="Nombre" id="nombreEdi" name="nombreEdi" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

<!--///////////////////////////////////////////-->
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg></span>
        <input type="text" class="form-control" placeholder="Direccion" id="direccionEdi" name="direccionEdi" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
<!--///////////////////////////////////////////-->
<select class="form-select" aria-label="Default select example" name="ciudadEdi" id="ciudadEdi">
  <option selected>Ciudad</option>
  <option value="Bogota">Bogota</option>
  <option value="Cali">Cali</option>
  <option value="Medellin">Medellin</option>
</select>
<!--///////////////////////////////////////////-->
    
<br><br>
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg></span>
        <input type="text" class="form-control" placeholder="Telefono" id="telefonoEdi" name="telefonoEdi" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        
<br>
<br>

        <button type="submit" class="btn btn-primary">Registrar</button>&nbsp&nbsp
        <a type="button" href="{{url('/editorial')}}" class="btn btn-danger">Cancelar</a>
</form>




</div><!--Fin div container-->










@stop