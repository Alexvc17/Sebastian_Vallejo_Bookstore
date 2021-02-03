@extends('principal')
@section('content')

<br><br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <div class="col-md-6"><h2><em> <strong>Lista de Editoriales <a href="{{route('registroEdi')}}" class="btn btn-success btn-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Registrar</a></strong> </em></h2>
  
  
  </div>
  
<table class="table">
<br>
<thead>

<tr>
    <th scope="col">#</th>    
    <th scope="col">Nombre</th>
    <th scope="col">Direccion</th>
    <th scope="col">Ciudad</th>
    <th scope="col">Teléfono</th>
    <th scope="col">Opciones</th>
</tr>

</thead>


</tbody>
@foreach($editoriales as $e)
        <tr>
            <td>{{$e ->id}}</td>
            <td>{{$e ->nombre}}</td>
            <td>{{$e ->direccion}}</td>
            <td>{{$e ->ciudad}}</td>
            <td>{{$e ->telefono}}</td>
           
            <td>
            <a class="btn btn-primary btn-sm active" role="button" aria-pressed="true" href="{{route('form_actualizarEditorial', $e->id)}}" >  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Actualizar </a>
    &nbsp&nbsp&nbsp&nbsp
   
            </td>
        </tr>
@endforeach
</tbody>


</table>  
    
  </div>
</div>

  
  
  </div>
  <div class="col-md-1"></div>
</div>
@stop