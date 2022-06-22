<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContratoController extends Controller
{
    public function getContratoWithServicios($id){

        $administradorFound = \App\Models\Anegocio::where('id_anegocio', $id)->first();
        $contrato = DB::table('contrato_contrato AS c')
        ->select('c.id_contrato', 'c.contrato', 'c.fecha_ingreso', 'c.fecha_vencimiento', 'c.id_estado_contrato', 'e.estado')
        ->join('contrato_estado AS e', 'e.id_estado', '=', 'c.id_estado_contrato')
        ->get();


    }
}
