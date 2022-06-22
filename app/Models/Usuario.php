<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public $table = "estado_pago_usuarios";
    protected $primaryKey = 'id_user';
    public $timestamps = false;
    //protected $connection = 'compras';




}
