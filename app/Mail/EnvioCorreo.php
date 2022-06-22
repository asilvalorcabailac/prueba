<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnvioCorreo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nombre='';
    public $rut='';
    public $edad='';
    public $cargo='';
    public $anegocio='';
    public $correo='';
    public $turno='';
    public $vista_cansada='';
    public $rigidez_movimientos='';
    public $poca_firmeza='';
    public $cansancio_piernas='';
    public $durmio_menos='';
    public $mareado='';
    public $actividad_fisica='';
    public $pesadez_cabeza='';
    public $hombros_entumecidos='';
    public $siente_mal='';
    public $direccion='';
    public $telefono='';
    public $ciudad='';
    public $tipo='';



    public function __construct($data)
    {
       $this->nombre = $data['nombre'];
       $this->rut = $data['rut'];
       $this->edad = $data['edad'];
       $this->cargo = $data['cargo'];
       $this->correo = $data['correo'];
       $this->turno = $data['turno'];
       $this->anegocio = $data['anegocio'];
       $this->vista_cansada = $data['vista_cansada'];
       $this->rigidez_movimientos = $data['rigidez_movimientos'];
       $this->poca_firmeza = $data['poca_firmeza'];
       $this->cansancio_piernas = $data['cansancio_piernas'];
       $this->durmio_menos = $data['durmio_menos'];
       $this->mareado = $data['mareado'];
       $this->actividad_fisica = $data['actividad_fisica'];
       $this->pesadez_cabeza = $data['pesadez_cabeza'];
       $this->hombros_entumecidos = $data['hombros_entumecidos'];
       $this->siente_mal = $data['siente_mal'];
       $this->telefono = $data['telefono'];
       $this->ciudad = $data['ciudad'];
       $this->direccion = $data['direccion'];
       $this->tipo = $data['tipo'];

    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->tipo ==1){
            return $this->view('emails.mensajeusuario2')
        ->from('somnolencia@bailac.cl', 'Somnolencia Candelaria')
        ->subject("Respaldo Encuesta Somnolencia Canedelaria Bailac San Ltda");

        }else if($this->tipo ==2){
            return $this->view('emails.mensaje2')
        ->from('somnolencia@bailac.cl', 'Somnolencia Candelaria')
        ->subject("Alerta de encuesta electrónica  Somnolencia Canedelaria");
        }

    }
}
