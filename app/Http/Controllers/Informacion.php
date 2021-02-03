<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Informacion extends Controller
{
    public function index(){

        return view('informacion');
    }
    
}
