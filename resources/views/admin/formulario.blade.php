<form name='form1' id='form1'>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="h3">Datos Generales</div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Área de Negocio:</th>
                                <td>
                                    <select class="selectpicker ocultar-select" id='anegocio' name='anegocio ' data-requerido='1' data-nombre='Area de Negocio' data-width="200px">
                                        <option value=''>Seleccionar</option>
                                    </select>
                                    <input type='text' class="mostrar form-control" readonly id='anegocio_' name='anegocio_'>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>AMD.CTO Bailac:</th>
                                <td><input type="text" class="form-control" id="adm_bailac" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Periodo de Cobro:</th>
                                <th>
                                    <table width="200" border="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="selectpicker ocultar-select ocultar-select2 ocultar" id='mes'  name='mes' data-requerido='1' data-container="body"  data-width="114px">
                                                        <option value=''>Seleccionar</option>
                                                    </select>
                                                    <input type="text" name="mes_" id='mes_' class='mostrar bloquear form-control' style="width: 100px;">
                                                </td>
                                                <td>
                                                    <select class="selectpicker ocultar-select ocultar-select2 ocultar" id='periodo'  name='periodo' data-requerido='1' data-container="body"  data-width="114px">
                                                        <option value=''>Seleccionar</option>
                                                    </select>
                                                    <input type="text" name="periodo_" id='periodo_' class='mostrar bloquear form-control' style="width: 100px;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Cliente:</th>
                                <th><input type="text" class="form-control" id="cliente" readonly></th>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- FIN PANEL 2 -->
                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Rut:</th>
                                <td><input type="text" class="form-control" id="rut_cliente" readonly></td>
                            </tr>
                        </tbody>
                         <tbody>
                            <tr>
                                <th>AMD.CTO Cliente:</th>
                                <td><input type="text" class="form-control" id="adm_cliente" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- FIN PANEL 3 -->
            </div><! --/END 1ST ROW OF PANELS -->
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> DETALLE DEL SERVICIO COBRADO </h4>
                            <table  class="table table-striped table-advance table-hover" cellspacing="0" cellpadding="0" id='tab_servicio_bd'>
                                <tr class='white' >
                                    <th>N°&nbsp;</th>
                                    <th>Servicio Contrato</th>
                                    <th>UM</th>
                                    <th>Clasificación del Ingreso</th>
                                    <th>N°&nbsp; E.P.</th>
                                    <th>Cant.</th>
                                    <th>Moneda</th>
                                    <th>Monto Reajustado</th>
                                    <th>Monto E.Pago</th>
                                    <th>Diferencia Mes</th>
                                    <th>%</th>
                                    <th>Monto Unitario</th>
                                    <th>Monto Total</th>
                                    <th>Destino</th>
                                    <th>Ad.</th>
                                    <th><span class='fa fa-eye'></span></th>
                                    <th></th>
                                </tr>
                            </table>
                        </table>
                        <table class="table table-striped table-advance table-hover" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>SUB TOTAL E.P CONTRATO:</td>
                                <td><input type="text" class="form-control" id="subtotal_servicio" readonly></td>
                            </tr>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> DETALLE DEL SERVICIO ADICIONAL <span style='display: none !important;' id='span_button'><button type="button" class='btn btn-primary ocultar2' id='agregar_item'><span class="fa fa-plus-circle" ></span></button></span></h4>
                            <table class="table table-striped table-advance table-hover" cellspacing="0" cellpadding="0" id='tab_servicio_adicional'>
                                <tr class='white'>
                                    <th>N°</th>
                                    <th>Servicio Contrato</th>
                                    <th>UM</th>
                                    <th>Clasificación de Ingreso</th>
                                    <th>Detalle</th>
                                    <th>Cant.</th>
                                    <th>Precio Unitario</th>
                                    <th>Valor Total</th>
                                    <th>Destino</th>
                                    <th>Ad.</th>
                                    <th></th>
                                </tr>
                            </table>
                        </table>
                        <table class="table table-striped table-advance table-hover" cellspacing="0" cellpadding="0" id='tab_servicio_adicional'>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>SUB TOTAL ADICIONAL:</td>
                                <td><input type="text" class="form-control" id="subtotal_adicional" readonly></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>TOTAL GLOBAL :</td>
                                <td><input type="text" class="form-control" id="sumadeTotales" readonly></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> OBSERVACIÓN</h4>
                <div class="form-inline" role="form">
                    <textarea  rows="3" style="width:100%" id='observaciones' class='bloquear'></textarea>
                </div>
            </div>
        </div>
    </div>
    <div id='firma' style='width: 100%; text-align: center; border-right: auto; border-left: auto;'><img src="" id='img-firma' style='width: 100px; height: auto'></div>
        <div style="clear: both;">
            </br>
            <div style='margin-left: 10px;' id='section-button'>
                <input id="archivo" type="file" name="archivo" style='display:none' data-servicio='' data-tipo='' />
                <a href=""   id='link_adjunto' target="_blank">&nbsp;&nbsp;&nbsp;</a>
                <button type="button" id='enviar' class="btn btn-success"><span class="fa fa-save"></span> Guardar</button>
                <button type="reset" id='limpiar' class="btn btn-warning"><span class="fa fa-refresh"></span> Limpiar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id='cerrar'>Cerrar</button>

            </div>
            <div style='margin-left: 10px;' id='section-button-aprobar'>
                <button type="button" id='aprobar' class="btn btn-primary"><span class="fa fa-check"></span> Aprobar</button>
                <button type="reset" id='rechazar' class="btn btn-danger"><span class="fa fa-times"></span> Rechazar</button>
                <input type="hidden" name="rechazo_comentario" id="rechazo_comentario" >
            </div>

        </div>
    </div>
</br>
</br>
</br>
</form>
<input type="hidden" name="opciones" id='opciones' >
<input type="hidden" name="iestado" id='iestado' >
