<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    private $sistema_sesion ='estado_pago_';
    public function index(){
        if( session($this->sistema_sesion.'user')=='' ){
            abort(404);
        }
        return view('main');
    }

}
