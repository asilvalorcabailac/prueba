@extends('admin.plantilla')
@section('titulo', 'Estados de pagos')

@section('css')
    <!--  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}" />
     daterange picker -->
     <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/jquery.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}" />
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" />
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
      <!-- Select2 -->
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" />
      <!-- Toastr -->
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" />
      <!-- Bootstrap4 Duallistbox -->
      <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}" />
      <style>

.validaCampo{
      border: 1px solid #FFA50D;
}
.modal-header{
  background: rgb(224, 224, 224);
}
.sin_borde{
  border: 0px solid !important;
  background: transparent !important;
  padding: 0px !important;

}

.mostrar, .estado{
  display: none;
}

.tamano-modal{
  width: 95% !important;
}

.input{
  background: transparent;
  border: 0px solid;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {

  background-color: #BFBFBF !important;
}
.white{
  color: #FFF !important;
}

.btn {
  display: inline-block !important;
  padding: 6px 12px !important;
  margin-bottom: 0 !important;
  font-size: 14px !important;
  font-weight: normal !important;
  line-height: 1.42857143 !important;
  text-align: center !important;
  white-space: nowrap !important;
  vertical-align: middle !important;
  cursor: pointer !important;
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
      -ms-user-select: none !important;
          user-select: none !important;
  background-image: none !important;
  border: 1px solid transparent !important;
  border-radius: 4px !important;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
  outline: thin dotted !important;
  outline: 5px auto -webkit-focus-ring-color !important;
  outline-offset: -2px !important;
}
.btn:hover,
.btn:focus {
  color: #333 !important;
  text-decoration: none !important;
}
.btn:active,
.btn.active {
  background-image: none !important;
  outline: 0 !important;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important;
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important;
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  pointer-events: none !important;
  cursor: not-allowed !important;
  filter: alpha(opacity=65) !important;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
  opacity: .65 !important;
}
.btn-default {
  color: #333 !important;
  background-color: #fff !important;
  border-color: #ccc !important;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333 !important;
  background-color: #e6e6e6 !important;
  border-color: #adadad !important;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none !important;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff !important;
  border-color: #ccc !important;
}
.btn-default .badge {
  color: #fff !important;
  background-color: #333 !important;
}
.btn-primary {
  color: #fff !important;
  background-color: #428bca !important;
  border-color: #357ebd !important;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #3071a9 !important;
  border-color: #285e8e !important;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none !important;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #428bca !important;
  border-color: #357ebd !important;
}
.btn-primary .badge {
  color: #428bca !important;
  background-color: #fff !important;
}
.btn-success {
  color: #fff !important;
  background-color: #5cb85c !important;
  border-color: #4cae4c !important;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff !important;
  background-color: #449d44 !important;
  border-color: #398439 !important;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none !important;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c !important;
  border-color: #4cae4c !important;
}
.btn-success .badge {
  color: #5cb85c !important;
  background-color: #fff !important;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de !important;
  border-color: #46b8da !important;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff !important;
  background-color: #31b0d5 !important;
  border-color: #269abc !important;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de !important;
  border-color: #46b8da !important;
}
.btn-info .badge {
  color: #5bc0de !important;
  background-color: #fff !important;
}
.btn-warning {
  color: #fff !important;
  background-color: #f0ad4e !important;
  border-color: #eea236 !important;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff !important;
  background-color: #ec971f !important;
  border-color: #d58512 !important;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e !important;
  border-color: #eea236 !important;
}
.btn-warning .badge {
  color: #f0ad4e !important;
  background-color: #fff !important;
}
.btn-danger {
  color: #fff !important;
  background-color: #d9534f !important;
  border-color: #d43f3a !important;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff !important;
  background-color: #c9302c !important;
  border-color: #ac2925 !important;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none !important;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #d9534f !important;
  border-color: #d43f3a !important;
}
.btn-danger .badge {
  color: #d9534f !important;
  background-color: #fff !important;
}
.btn-link {
  font-weight: normal !important;
  color: #428bca !important;
  cursor: pointer !important;
  border-radius: 0 !important;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent !important;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent !important;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496 !important;
  text-decoration: underline !important;
  background-color: transparent !important;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777 !important;
  text-decoration: none !important;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px !important;
  font-size: 18px !important;
  line-height: 1.33 !important;
  border-radius: 6px !important;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px !important;
  font-size: 12px !important;
  line-height: 1.5 !important;
  border-radius: 3px !important;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px !important;
  font-size: 12px !important;
  line-height: 1.5 !important;
  border-radius: 3px !important;
}
.btn-block {
  display: block !important;
  width: 100% !important;
}
.btn-block + .btn-block {
  margin-top: 5px !important;
}
.cursor{
  cursor: pointer;
  cursor: hand;
}
.test + .tooltip > .tooltip-inner {
    background-color: #73AD21 !important;
    color: #FFFFFF ;
    border: 1px solid green !important;
    padding: 15px !important;
    font-size: 20px !important;
}

/* Tooltip on top */
.test + .tooltip.top > .tooltip-arrow {
    border-top: 5px solid green !important;
}

/* Tooltip on bottom */
.test + .tooltip.bottom > .tooltip-arrow {
    border-bottom: 5px solid blue !important;
}

/* Tooltip on left */
.test + .tooltip.left > .tooltip-arrow {
    border-left: 5px solid red !important;
}

/* Tooltip on right */
.test + .tooltip.right > .tooltip-arrow {
    border-right: 5px solid black !important;
}

.mayusculas{
  text-transform: uppercase
}

.modal-xl { max-width:98%!important; }


</style>
      <!-- Theme style -->
@endsection

@section('miga')
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    </ol>
@endsection

@section('contenido')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <table id="estadoPagoTable" class="display cell-border compact letra_mediana" style='width: 100%!important'>
            <thead>
                <tr>
                    <th>Anegocio</th>
                    <th>Periodo</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Ver</th>
                </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection

@section('seccion_script')
  <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
     <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/jszip.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('js/mostrarToast.js') }}"></script>
    <script src="{{ asset('js/estadoPago.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
@endsection

@section('modal')
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ingreso Detalle</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            @include('admin.formulario')
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='enviar' class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="modal-xl2">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Gráficos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection



