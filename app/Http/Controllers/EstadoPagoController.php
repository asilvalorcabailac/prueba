<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EstadoPagoController extends Controller
{
    private $sistema_sesion ='estado_pago_';
    public function index(){
        if( session($this->sistema_sesion.'user')=='' ){
            abort(401, 'Unauthorized user');
        }
        return view('estado_pago');
    }

    public function getEstadoPagos(){
        if( session($this->sistema_sesion.'user')=='' ){
            abort(401, 'Unauthorized user');
        }

        $EstadosPagos = DB::table('estado_pago_estado_pago AS ep')
        ->select('a.anegocio', DB::raw("concat(ep.periodo_mes,'-',ep.periodo_anio) as periodos"), 'ep.fecha_ingreso',
         'ep.id_estado_pago', 'e.estado', 'ep.periodo_mes', 'ep.periodo_anio')
        ->join('estado_pago_anegocio AS a', 'a.id_anegocio', '=', 'ep.id_anegocio')
        ->join('estado_pago_asignacion_anegocio AS aa', 'aa.id_anegocio', '=', 'a.id_anegocio')
        ->join('estado_pago_estado AS e', 'e.id_estado', '=', 'ep.id_estado')
        ->where('aa.id_usuario', '=',session($this->sistema_sesion.'id_user'))
        ->get();

        return response()->json($EstadosPagos);
    }
}
