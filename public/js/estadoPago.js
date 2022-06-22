function datatabla() {

    $("#estadoPagoTable").DataTable({
        "columnDefs": [
            {"className": "dt-center", "targets": "_all"}
          ],
                   dom: 'Bfrtip',
        buttons: [{
            text: '<button id="agregar" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus-circle" ></span> Agregar</button>',
            className: 'sin_borde'
                    },{
                            extend: 'excel',
                            text: "<button class='btn btn-success'><span class='fa fa-file-excel-o' ></span> Exportar</button>",
            className: 'sin_borde'
                } ],
        lengthMenu: [60, 90, 120, 150],
        paging: true,
        pageLength: 10,
        ajax: {
            url: "getestadopagos",
            type: "get",
            dataSrc: function(data) {

                for (var i = 0; i <= data.length - 1; i++) {
                    data[i].look =   `<button  class='btn btn-primary ver_estado_pago' btn-sm data-opcion='ver' data-id='${data[i].id_estado_pago}'>
                                        <span class='fa fa-eye'>Ver</span>
                                    </button>`;
                    data[i].edit = (data[i].estado ==3)?`<button  class='btn btn-warning btn-sm editar_estado_pago' data-opcion='editar' data-id='${data[i].id_estado_pago}'>
                                        <span class='fa fa-pencil'>Editar</span>
                                    </button>`:``;
                    data[i].periodos = `<span style='display:none'>${data[i].periodo_anio}${data[i].periodo_mes}</span>${data[i].periodo_mes}-${data[i].periodo_anio}`;

                }

                console.log(data);
                return data;
            }
        },
        columns: [
            //{data: 'rownum','sClass':'dt-body-center'},
            { "data": "anegocio" },
            { "data": "periodos" },
            { "data": "fecha_ingreso" },
            { "data": "estado" },
            { "data": "edit" },
            { "data": "look" },
        ],

        order: [[1, "desc"], [0, "asc"]]
    });

}

$(document).ready(function() {
    datatabla();

});
