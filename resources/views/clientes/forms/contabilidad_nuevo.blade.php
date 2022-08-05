<div id="info-header-modal" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Nuevo Cliente Contabilidad </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formNuevoCliente needs-validation" id="formNuevoCliente" method="POST" novalidate>
                                <input type="hidden"  id="prospecto" name="cliente[prospecto]" value="0">
                                <input type="hidden" name="cliente[tipo_servicio]" value="1">
                                <div class="form-body">
                                    <h4 class="card-title">Datos Generales</h4>
                                    <hr class="mt-0 mb-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Nombre del cliente</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control nuevoCliente" name="cliente[nombre_cliente]" placeholder="google" required>
                                                        <small class="invalid-feedback">
                                                            Falta un nombre del cliente
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Razón Social</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control nuevoCliente" name="cliente[razon_social]" placeholder="google S.A de C.V" required>
                                                        <small class="invalid-feedback">
                                                            Falta la razon social del cliente
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">RFC</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control nuevoCliente" name="cliente[rfc]" placeholder="XAXX010101000"  required>
                                                        <small class="invalid-feedback">
                                                            Falta el RFC del cliente
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Correo Electrónico</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control nuevoCliente" name="cliente[email]" placeholder="ejemplo@gmail.com" required>
                                                    <small class="invalid-feedback">
                                                        Falta el correo del cliente
                                                    </small>
                                                </div>
                                            </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Fecha de ingreso como cliente</label>
                                                    <div class="col-md-12">
                                                        <input type="date" class="form-control nuevoCliente" name="cliente[fecha_ingreso]" required>
                                                        <small class="invalid-feedback">
                                                            Falta la fecha de ingreso del cliente
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Personal asignado</label>
                                                    <div class="col-md-12">
                                                        <select id="personalAsignado" name="cliente[fk_id_usuario_asignado]" class="form-control form-select" required></select>
                                                        <small class="invalid-feedback">
                                                            Falta seleccionar alguien del personal
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title">Dirección</h4>
                                <hr class="mt-0 mb-1">
                                <div class="card-body">
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Calle</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][calle]" class="form-control" required>
                                                    <small class="invalid-feedback">
                                                        Falta la calle
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Número Exterior</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][numero_exterior]" class="form-control" required>
                                                    <small class="invalid-feedback">
                                                        Falta el nuemero exterior
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 ">
                                                <label class="control-label">Número Interior</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][numero_interior]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="mb-3 row">
                                                <label class="control-label">Colonia</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][colonia]" class="form-control" required>
                                                    <small class="invalid-feedback">
                                                        Falta la colonia
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">País</label>
                                                <div class="col-md-12">
                                                    <select id="selectPais" name="cliente[direcciones][0][fk_id_paises]"class="form-control form-select" required>
                                                        @foreach ( $paises as $pais )
                                                            <option value="{{ $pais->id }}">{{ $pais->pais }}</option>
                                                        @endforeach
                                                    </select>
                                                    <small class="invalid-feedback">
                                                        Falta seleccionar el país
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Estado</label>
                                                <div class="col-md-12">
                                                    <select name="cliente[direcciones][0][fk_id_estados]" class="form-control form-select estados" required>
                                                        @foreach ( $estados as $estado )
                                                            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
                                                        @endforeach
                                                    </select>
                                                    <small class="invalid-feedback">
                                                        Falta seleccionar el estado
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Municipio</label>
                                                <div class="col-md-12">
                                                    <select name="cliente[direcciones][0][fk_id_municipios]" class="form-control form-select municipios" required></select>
                                                    <small class="invalid-feedback">
                                                        Falta seleccionar el municipio
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Código Postal</label>
                                                <div class="col-md-12">
                                                    <select name="cliente[direcciones][0][fk_id_codigos_postales]" class="form-control form-select codigosPostales" required></select>
                                                    <small class="invalid-feedback">
                                                        Falta seleccionar el codigo postal
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Teléfono 1</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][telefonos][][telefono]" class="form-control" required>
                                                    <small class="invalid-feedback">
                                                        Falta el telefono
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label ">Teléfono 2</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][telefonos][][telefono]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="card-title">Obligaciones</h4>
                                <hr class="mt-0 mb-1 card w-100">
                                <div class="card-body">
                                    <div class="row" id="listaObligaciones"></div>
                                </div>

                                <h4 class="card-title">Tareas Estandar</h4>
                                <hr class="mt-0 mb-1">
                                <div class="card-body">
                                    <div class="row" id="listaTareasEstandar"></div>
                                </div>

                                <hr class="mt-0 mb-1">
                                <div class="modal-footer">
                                    <button type="button" id="cerrarModalNuevo" class="btn btn-light" data-bs-dismiss="modal"> Cerrar </button>
                                    <button type="submit"class="btn btn-light-info text-info font-weight-medium"> Guardar </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      "use strict";
      window.addEventListener(
        "load",
        function () {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName("needs-validation");
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(
            forms,
            function (form) {
              form.addEventListener(
                "submit",
                function (event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add("was-validated");
                },
                false
              );
            }
          );
        },
        false
      );
    })();
  </script>
