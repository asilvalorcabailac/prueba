




<div>Este correo contiene el respaldo de que usted ha generado la encuesta de Somnolencia San Ltda. </div>
<div>Fecha: <span style="color: #3F7FBF">{{ now() }}</span> </div>
<div>RUT: <span style="color: #3F7FBF">{{ $rut }}</span> </div>
<div>Nombre: <span style="color: #3F7FBF"> {{ $nombre }} </span></div>
<div>Correo: <span style="color: #3F7FBF"> {{ $correo }} </span></div>
<div>Edad: <span style="color: #3F7FBF"> {{ $edad }} </span></div>
<div>Cargo: <span style="color: #3F7FBF"> {{ $cargo }} </span></div>
<div>Faena o Área Negocio: <span style="color: #3F7FBF">{{ $anegocio }}</span> </div>
<div>Turno: <span style="color: #3F7FBF"> {{ $turno }} </span></div>
<div>Dirección (Hogar): <span style="color: #3F7FBF">{{ $direccion }}</span> </div>
<div>Ciudad: <span style="color: #3F7FBF">{{ $ciudad }}</span> </div>
<div>Teléfono Contacto: <span style="color: #3F7FBF">{{ $telefono }}</span> </div>
@if($vista_cansada)
    <div>¿Siente la vista cansada?:<span style="color: #3F7FBF"> {{ $vista_cansada }} </span> </div>
@endif
@if($rigidez_movimientos)
    <div>¿Siente rigidez o torpeza en los movimientos?:<span style="color: #3F7FBF"> {{ $rigidez_movimientos }}  </span></div>
@endif
@if($poca_firmeza )
    <div>¿Se siente poco firme o inseguro al estar de pie?: <span style="color: #3F7FBF"> {{ $rigidez_movimientos }} </span></div>
@endif
@if($cansancio_piernas )
    <div>¿Tiene cansancio en las piernas?:  <span style="color: #3F7FBF">{{ $cansancio_piernas }} </span> </div>
@endif
@if($durmio_menos )
    <div>¿Previo al turno durmió menos de 5 horas?<span style="color: #3F7FBF">{{ $durmio_menos }} </span></div>
@endif
@if($mareado )
    <div>¿Se siente mareado?</div>
@endif
@if($actividad_fisica )
    <div>¿Usted ha realizado actividad física más de lo habitual previo a su turno de trabajo?<span style="color: #3F7FBF">{{ $actividad_fisica }} </span></div>
@endif
@if($pesadez_cabeza)
    <div>¿Siente pesadez en la cabeza?: <span style="color: #3F7FBF"> {{ $pesadez_cabeza }} </span> </div>
@endif
@if($hombros_entumecidos )
    <div>¿Siente los hombros entumecidos?<span style="color: #3F7FBF"> {{ $hombros_entumecidos }} </span></div>
@endif
@if($siente_mal )
    <div>¿Se siente mal?<span style="color: #3F7FBF"> {{ $siente_mal }} </span></div>
@endif
