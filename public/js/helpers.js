function llenarFecha(){

    var meses = new Array("Enero", "Febrero", "Marzo","Abril", "Mayo", "Junio","Julio", "Agosto", "Septiembre","Octubre","Noviembre", "Diciembre");
    for(var i = 1; i <= 12; i++ ){
      $("#mes").append('<option value="'+i+'">'+meses[i - 1]+'</option>');
    }

    var periodo = 0;
    var mon = 0;
    $.ajax({
      url: "currentdate",
      dataType: "JSON",
      async: false,
    }).done(function(resp) {
      periodo =  resp['year'];
      mon =  resp['mon'];

    }).fail(function(error) {
      console.log("error periodo: "+error);

    });



    for(var j = periodo - 1; j <= periodo + 2; j++ ){
      console.log("periodo: "+j);
      $("#periodo").append('<option value="'+j+'">'+j+'</option>');

    }
    $('.selectpicker').selectpicker('refresh');
}

function getCurrentDate(){

    let currentDate = {};
    $.ajax({
        url: "currentdate",
        dataType: "JSON",
        async: false,
      }).done(function(resp) {
        currentDate = resp;

      }).fail(function(error) {
        console.log("error periodo: "+error);

      });

      return currentDate;
}
function refrechSelectPicker(){
    $('.selectpicker').selectpicker('refresh');
}

function getAnegocioByUser(){
    let anegocio = [{}];
    $.ajax({
        url: "getanegociobyuser",
        datatype: "JSON",
        async:false
      }).done(function(resp){
        anegocio = resp;
      });
      return anegocio;
}

$("body").on('click','#agregar', function(event) {
    cont_elemento = 0;

   $("#section-button").show();
   $(".bloquear").attr("readonly",false);
   $(".ocultar-select").show();
   $(".mostrar").hide();
   $(".ocultar2").show();
   $("#titulo-ventana").text("INGRESO DETALLE ESTADO DE PAGO");
   $("#firma").hide();
   $(".tr_agregada").remove();
   $(".tr_agregada_adicional").remove();
   $("#limpiar").trigger('click');
   $("#anegocio").val('');
   $("#contrato").val('');
   $("#anegocio").html('<option value="">Seleccionar</option>');
   $("#mes").val('');
   $("#periodo").val('');
   $('.selectpicker').selectpicker('refresh');
   $("#reemplazar_adjunto").show();
   $("#eliminar_adjunto").show();
   $("#opciones").val('agregar');
   $("#agregar_item").show();
   $("#span_button").show();
   $("#section-button-aprobar").hide();
   $("#iestado").val('');
   $("#observaciones").attr('readonly', false);

   let currentDate = getCurrentDate();
   if(currentDate()){
    periodo =  currentDate['year'];
    mon =  currentDate['mon'];
    $("#mes").selectpicker('val',parseInt(mon));
    $("#periodo").selectpicker('val',parseInt(periodo));
    $("#fecha").val(currentDate['mday']+'-'+currentDate['mon']+'-'+currentDate['year']);
   }

    let contador_anegocio = 0;
    let optionAnegocio = '';
    let idAnegocio ='';
    getAnegocioByUser().forEach(function(item, index){

        optionAnegocio = optionAnegocio.concat("<option value='"+item['id_anegocio']+"'>"+item['anegocio']+"</option>")
        idAnegocio = item['id_anegocio'];
        contador_anegocio++;
        if(contador_anegocio==1){
           buscarDetalleContrato(idAnegocio);
           $(".selectpicker#anegocio").html('');
            refrechSelectPicker();
        }
        $(".selectpicker#anegocio").append(optionAnegocio);
        refrechSelectPicker();
    });
});
