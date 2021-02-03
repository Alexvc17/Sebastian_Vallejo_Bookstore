<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class Libros extends Controller
{
    public function index(){
        
       //Libros
       $libros = DB::table('libro as lib')

       ->join('editorial as edi', 'lib.editorial', '=', 'edi.id')
       //select sirve como atributo para visualizar unicamente los atributos que yo desee que aparezcan
       ->select('lib.id','lib.ISBN','lib.titulo','lib.precio', 'lib.stock', 'edi.nombre')
       
       //nombre de la tabla ;  atributo de la tabla productos; que sea igual; al id dela tabla categorias
       ->get(); 
               //procedemos a enviar esa informacion a la vista
               return view('libros.visualizar',['libros'=>$libros]);
        
        }
}
