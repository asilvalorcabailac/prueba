<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AnegocioController extends Controller
{
    private $sistema_sesion ='estado_pago_';
    public function getAnegocioByUserId(){
        if( session($this->sistema_sesion.'user')=='' ){
            abort(401, 'Unauthorized user');
        }

        $EstadosPagos = DB::table('estado_pago_anegocio AS a')
        ->select('a.anegocio', 'a.id_anegocio')
        ->join('estado_pago_asignacion_anegocio AS asig', 'asig.id_anegocio', '=', 'a.id_anegocio')
        ->where('asig.id_usuario', '=',session($this->sistema_sesion.'id_user'))
        ->get();
        return response()->json($EstadosPagos);
    }


}
