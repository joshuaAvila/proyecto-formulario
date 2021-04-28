<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('Usuario.cliente');
    }

    public function guardar(){
        
    }
}
