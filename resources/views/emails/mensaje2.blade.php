


<div>Un trabajador de su unidad de negocio ha indicado en la encuesta electrónica de Somnolencia una condición.</div>
<div>Faena o Área Negocio: <span style="color: #3F7FBF">{{ $anegocio }}</span> </div>
<div>Nombre: <span style="color: #3F7FBF"> {{ $nombre }} </span></div>
<div>Telefono: <span style="color: #3F7FBF"> {{ $telefono }} </span></div>
<div>Turno: <span style="color: #3F7FBF"> {{ $turno }} </span></div>
</br>
<div style='margin-top: 20px; font-weight: bold'>Condición Relacionada </div>
@if($vista_cansada=='SI')
    <div>¿Siente la vista cansada?:<span style="color: #3F7FBF"> {{ $vista_cansada }} </span> </div>
@endif
@if($rigidez_movimientos=='SI')
    <div>¿Siente rigidez o torpeza en los movimientos?:<span style="color: #3F7FBF"> {{ $rigidez_movimientos }}  </span></div>
@endif
@if($poca_firmeza == 'SI')
    <div>¿Se siente poco firme o inseguro al estar de pie?: <span style="color: #3F7FBF"> {{ $rigidez_movimientos }} </span></div>
@endif
@if($cansancio_piernas == 'SI')
    <div>¿Tiene cansancio en las piernas?:  <span style="color: #3F7FBF">{{ $cansancio_piernas }} </span> </div>
@endif
@if($durmio_menos == 'SI')
    <div>¿Previo al turno durmió menos de 5 horas?<span style="color: #3F7FBF">{{ $durmio_menos }} </span></div>
@endif
@if($mareado == 'SI')
    <div>¿Se siente mareado?</div>
@endif
@if($actividad_fisica == 'SI')
    <div>¿Usted ha realizado actividad física más de lo habitual previo a su turno de trabajo?<span style="color: #3F7FBF">{{ $actividad_fisica }} </span></div>
@endif
@if($pesadez_cabeza == 'SI')
    <div>¿Siente pesadez en la cabeza?: <span style="color: #3F7FBF"> {{ $pesadez_cabeza }} </span> </div>
@endif
@if($hombros_entumecidos == 'SI')
    <div>¿Siente los hombros entumecidos?<span style="color: #3F7FBF"> {{ $hombros_entumecidos }} </span></div>
@endif
@if($siente_mal == 'SI')
    <div>¿Siente los hombros entumecidos?<span style="color: #3F7FBF"> {{ $siente_mal }} </span></div>
@endif

