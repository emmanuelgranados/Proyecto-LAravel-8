<div id="info-header-modal" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Nuevo Cliente </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formNuevoCliente" id="formNuevoCliente" method="POST">
                                <div class="form-body">
                                    <h4 class="card-title">Datos Generales</h4>
                                    <hr class="mt-0 mb-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Nombre o Razón Social</label>
                                                <div class="col-md-12">
                                                <input type="text" class="form-control nuevoCliente" name="cliente[nombre_razon_social]" placeholder="google S.A de C.V">
                                                {{-- <small class="form-control-feedback">
                                                    This is inline help
                                                </small> --}}
                                                </div>
                                            </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">RFC</label>
                                                <div class="col-md-12">
                                                <input type="text" class="form-control nuevoCliente" name="cliente[rfc]" placeholder="XAXX010101000">
                                                {{-- <small class="form-control-feedback">
                                                    This field has error.
                                                </small> --}}
                                                </div>
                                            </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Correo Electrónico</label>
                                                <div class="col-md-12">
                                                <input type="text" class="form-control nuevoCliente" name="cliente[email]" placeholder="ejemplo@gmail.com">
                                                {{-- <small class="form-control-feedback">
                                                    This is inline help
                                                </small> --}}
                                                </div>
                                            </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Página Web</label>
                                                <div class="col-md-12">
                                                    <input type="hidden"  id="prospecto" name="cliente[prospecto]" value="0">
                                                <input type="text" class="form-control nuevoCliente" name="cliente[pagina_web]" placeholder="www.google.com">
                                                {{-- <small class="form-control-feedback">
                                                    This field has error.
                                                </small> --}}
                                                </div>
                                            </div>
                                            </div>
                                            <!--/span-->
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
                                                    <input type="text" name="cliente[direcciones][0][calle]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Número Exterior</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][numero_exterior]" class="form-control">
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
                                                    <input type="text" name="cliente[direcciones][0][colonia]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">País</label>
                                                <div class="col-md-12">
                                                    <select  name="cliente[direcciones][0][fk_id_paises]"class="form-control form-select">
                                                        @foreach ( $paises as $pais )
                                                            <option value="{{ $pais->id }}">{{ $pais->pais }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Estado</label>
                                                <div class="col-md-12">
                                                    <select name="cliente[direcciones][0][fk_id_estados]" class="form-control form-select estados">
                                                        @foreach ( $estados as $estado )
                                                            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Municipio</label>
                                                <div class="col-md-12">
                                                    <select name="cliente[direcciones][0][fk_id_municipios]" class="form-control form-select municipios">

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Código Postal</label>
                                                <div class="col-md-12">
                                                    <select name="cliente[direcciones][0][fk_id_codigos_postales]" class="form-control form-select codigosPostales">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Teléfono 1</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="cliente[direcciones][0][telefonos][][telefono]" class="form-control">
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
                                    <!--/row-->
                                    <div class="row" id="listaObligaciones">
                                                    {{-- <input type="text" name="cliente[direcciones][0][calle]" class="form-control"> --}}
                                    </div>
                                </div>

                                <h4 class="card-title">Tareas Predeterminadas</h4>
                                <hr class="mt-0 mb-1">
                                <div class="card-body">
                                    <div class="accordion " id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tareasContabilidad" aria-expanded="false" aria-controls="tareasContabilidad">
                                              Contabilidad
                                            </button>
                                          </h2>
                                          <div id="tareasContabilidad" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                            <div class="accordion-body">
                                                <ul class="list-group" id="listaTareasContabilidad"></ul>
                                            </div>

                                          </div>
                                        </div>
                                        {{-- <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                              Defensa
                                            </button>
                                          </h2>
                                          <div id="flush-collapseTwo" class="accordion-collapse collapse " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample" style="">
                                            <div class="accordion-body">
                                                <ul class="list-group" id="listaTareasDefensa"></ul>
                                            </div>
                                          </div>
                                        </div> --}}
                                    </div>
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
