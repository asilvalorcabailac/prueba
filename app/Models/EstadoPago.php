<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPago extends Model
{
    public $table = "estado_pago_estado_pago";
    protected $primaryKey = 'id_estado_pago';
    public $timestamps = false;
}
