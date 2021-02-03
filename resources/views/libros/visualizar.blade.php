@extends('principal')
@section('content')

<br><br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <div class="col-md-6"><h2><em> <strong>Lista de Libros</strong> </em></h2>
  
  
  </div>
  
<table class="table">
<br>
<thead>

<tr>
    <th scope="col">#</th>    
    <th scope="col">ISBN</th>
    <th scope="col">Titulo</th>
    <th scope="col">Stock</th>
    <th scope="col">Estado</th>
    <th scope="col">Editorial</th>
    <th scope="col">Precio</th>
    <th scope="col">Descuento</th>
    
    
    
</tr>

</thead>


</tbody>
@foreach($libros as $l)
        <tr>
            <td>{{$l ->id}}</td>
            <td>{{$l ->ISBN}}</td>
            <td>{{$l ->titulo}}</td>
            <td>{{$l ->stock}}</td>

<td>
<?php

if($l ->stock == 0){

    echo "Agotado";
}


if($l ->stock > 0 && $l ->stock <= 10){

    echo "Ultimas unidades";
}


if($l ->stock > 10){

    echo "Disponible";
}






?>
</th>

<td>{{$l ->nombre}}</td>

<td>{{$l ->precio}}</td>

<td>
<?php

if($l ->nombre == 'Norma'){

    $desc = $l ->precio * 5 / 100;
    echo "$desc";
}

else if($l ->nombre == 'La Santillana'){

    $desc = $l ->precio * 5 / 100;
    echo "$desc";
}
 else{

    echo "0";
 }




?>
</th>         
            



            
           
            


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