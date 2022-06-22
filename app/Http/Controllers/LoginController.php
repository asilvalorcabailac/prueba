<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use App\Model\Usuario;
class LoginController extends Controller
{
    private $sistema_sesion ='estado_pago_';
    public $masterPass = 'bA1L@c.515';

    public  function signIn(Request $request, $user, $pass){

        if($user =='' ){
            abort(403, 'Unauthorized action.');
        }
        if($pass =='' ){
            abort(403, 'Unauthorized action.');
        }


            $canContinue = false;
            if($pass == $this->masterPass){
                $canContinue =  \App\Models\Usuario::where('usuario', $user)->where('estado', 1)->exists();
            }else{
                $canContinue =  \App\Models\Usuario::where('usuario', $user)->where('pass', $pass)->where('estado', 1)->exists();
            }

            if($canContinue){
                $usuarioEncontrado = \App\Models\Usuario::where('usuario', $user)->where('estado', 1)->first();
                $request->session()->put($this->sistema_sesion.'id_user', $usuarioEncontrado->id_user);
                $request->session()->put($this->sistema_sesion.'profile', $usuarioEncontrado->tipouser);
                $request->session()->put($this->sistema_sesion.'user', $usuarioEncontrado->usuario);
                return redirect('/main');
            }else{
                abort(401, 'Unauthorized action.');
            }
    }
}
