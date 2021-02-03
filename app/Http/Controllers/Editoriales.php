<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;

class Editoriales extends Controller
{
    public function index(){
        
        //editoriales
        $editoriales = DB::table('editorial as edi')

        ->select('edi.id','edi.nombre','edi.direccion', 'edi.ciudad',
         'edi.telefono')

        ->get(); 
                
                return view('editoriales.visualizar',['editoriales'=>$editoriales]);
        
        }


//REGISTRAR

        public function formularioReg(){

        
        
            return view('editoriales.form_registro');
    
        }
        
        public function registrar(Request $request){
            //Aqui se hace el registro de la categoria y productos en la base de datos
            $edit = new Editorial();
            $edit->nombre = $request->input('nombreEdi');
            $edit->direccion = $request->input('direccionEdi');
            $edit->ciudad = $request->input('ciudadEdi');
            $edit->telefono = $request->input('telefonoEdi');   
         
            $edit->save();
            return redirect()->route('listadoEditoriales');
            
      
        }


//ACTUALIZAR
        public function form_actualizar($id){

            
        $editorial = Editorial::findOrFail($id);
        
        return view('editoriales.form_actualizar',compact('editorial'));
    
        }
    
        public function actualizar(Request $request, $id){
            // Realizar la actualizacion en la base de datos
            $edit = Editorial::findOrFail($id);
            $edit->nombre = $request->input('nombreEdi');
            $edit->direccion = $request->input('direccionEdi');
            $edit->ciudad = $request->input('ciudadEdi');
            $edit->telefono = $request->input('telefonoEdi');      
        
            $edit->save();
            return redirect()->route('listadoEditoriales');
        }
    






}
