<div id="info-header-modal-2" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel-2"> Editar Cliente </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formEditarCliente needs-validation" name="formEditarCliente" method="POST" novalidate>
                                <input type="hidden" id="id_cliente" name="cliente[id]" value="">
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
                                                        <input type="text" class="form-control " id="editar_nombre_cliente" name="cliente[nombre_cliente]" placeholder="google" required>
                                                        {{-- <small class="form-control-feedback">
                                                            This is inline help
                                                        </small> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Razón Social</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control" id="editar_razon_social" name="cliente[razon_social]" placeholder="google S.A de C.V" required>
                                                        {{-- <small class="form-control-feedback">
                                                            This is inline help
                                                        </small> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">RFC</label>
                                                    <div class="col-md-12">
                                                    <input type="text" class="form-control " id="editar_rfc" name="cliente[rfc]" placeholder="XAXX010101000" required>
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
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Correo Electrónico</label>
                                                    <div class="col-md-12">
                                                    <input type="text" class="form-control " id="editar_email" name="cliente[email]" placeholder="ejemplo@gmail.com" required>
                                                    {{-- <small class="form-control-feedback">
                                                        This is inline help
                                                    </small> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Fecha de ingreso como cliente</label>
                                                    <div class="col-md-12">
                                                        <input type="date" class="form-control" id="editar_fecha_ingreso" name="cliente[fecha_ingreso]" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Personal asignado</label>
                                                    <div class="col-md-12">
                                                        <select id="editar_fk_usurio_asignado" name="cliente[fk_id_usuario_asignado]" class="form-control form-select" required></select>
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
                                                    <input type="hidden" id="editar_id_0" name="direcciones[0][id]" class="form-control">
                                                    <input type="text" id="editar_calle_0" name="direcciones[0][calle]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">Número Exterior</label>
                                                <div class="col-md-12">
                                                    <input type="text" id="editar_numero_exterior_0" name="direcciones[0][numero_exterior]" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 ">
                                                <label class="control-label">Número Interior</label>
                                                <div class="col-md-12">
                                                    <input type="text" id="editar_numero_interior_0" name="direcciones[0][numero_interior]" class="form-control" >
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
                                                    <input type="text" id="editar_colonia_0" name="direcciones[0][colonia]" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label">País</label>
                                                <div class="col-md-12">
                                                    <select id="editar_fk_id_paises_0" name="direcciones[0][fk_id_paises]"class="form-control form-select" required>
                                                        @foreach ( $paises as $pais )
                                                            <option value="{{ $pais->id }}">{{ $pais->pais }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="control-label_0">Estado</label>
                                                <div class="col-md-12">
                                                    <select id="editar_fk_id_estados_0" name="direcciones[0][fk_id_estados]" class="form-control form-select estados" required>
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
                                                    <select id="editar_fk_id_municipios_0" name="direcciones[0][fk_id_municipios]" class="form-control form-select municipios " required></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Código Postal</label>
                                                <div class="col-md-12">
                                                    <select id="editar_fk_id_codigos_postales_0" name="direcciones[0][fk_id_codigos_postales]" class="form-control form-select codigosPostales" required></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Teléfono 1</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" id="editar_telefonos_id_0" name="telefonos[0][id]" >
                                                    <input type="text" id="editar_telefonos_telefono_0" name="telefonos[0][telefono]" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label ">Teléfono 2</label>
                                                <div class="col-md-12">
                                                    <input type="hidden" id="editar_telefonos_id_1" name="telefonos[1][id]" >
                                                    <input type="text" id="editar_telefonos_telefono_1" name="telefonos[1][telefono]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="card-title">Obligaciones</h4>
                                <hr class="mt-0 mb-1 card w-100">
                                <div class="card-body">
                                    <!--/row-->
                                    <div class="row" id="editarListaObligaciones"></div>
                                </div>

                                <h4 class="card-title">Tareas Estandar</h4>
                                <hr class="mt-0 mb-1">
                                <div class="card-body">
                                    <div class="row" id="editarListaTareasEstandar"></div>
                                </div>

                                <hr class="mt-0 mb-1">
                                <div class="modal-footer">
                                    <button type="button" id="cerrarModalEditar" class="btn btn-light" data-bs-dismiss="modal"> Cerrar </button>
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
