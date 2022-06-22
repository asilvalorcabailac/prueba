<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anegocio extends Model
{
    public $table = "estado_pago_anegocio";
    protected $primaryKey = 'id_anegocio';
    public $timestamps = false;
}
