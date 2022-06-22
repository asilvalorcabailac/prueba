<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public $table = "estado_pago_contratos";
    protected $primaryKey = 'id_contrato';
    public $timestamps = false;
}
