<div id="info-header-modal-2" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Editar Tarea </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formEditarTarea" id="formEditarTarea" method="POST">
                                <input type="hidden" id="editar_id" name="tarea[id]">
                                <div class="form-body">
                                    <h4 class="card-title">Datos Generales</h4>
                                    <hr class="mt-0 mb-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="control-label">Personal Asignado</label>
                                                    <div class="col-md-12">
                                                        <select id="editar_fk_id_users_asignado" name="tarea[fk_id_users_asignado]" class="form-control form-select "></select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="control-label">Cliente</label>
                                                    <div class="col-md-12">
                                                        <select id="editar_fk_id_clientes" name="tarea[fk_id_clientes]" class="form-control form-select "> </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div id="editarCampoDinamico" class="row"></div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="control-label">Fecha y Hora Inicio</label>
                                                    <div class="col-md-12">
                                                    <input type="datetime-local" class="form-control" id="editar_fecha_inicio" name="tarea[fecha_inicio]" >
                                                    {{-- <small class="form-control-feedback">
                                                        This field has error.
                                                    </small> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="control-label">Fecha y Hora Final</label>
                                                    <div class="col-md-12">
                                                    <input type="datetime-local" class="form-control" id="editar_fecha_final"  name="tarea[fecha_final]">
                                                    {{-- <small class="form-control-feedback">
                                                        This field has error.
                                                    </small> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="control-label">Prioridad</label>
                                                    <div class="col-md-12">
                                                        <select id="editar_fk_id_prioridades" name="tarea[fk_id_prioridades]" class="form-control form-select estados">
                                                            <option value="1">Baja</option>
                                                            <option value="2">Media</option>
                                                            <option value="3">Alta</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="control-label">Estatus de la Tarea</label>
                                                    <div class="col-md-12">
                                                        <select id="editar_fk_id_estatus" name="tarea[fk_id_estatus]" class="form-control form-select estados">
                                                            <option value="1">En proceso</option>
                                                            <option value="2">Pendiente</option>
                                                            <option value="3">Terminado</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Adjuntar Archivo</label>
                                                    <input type="hidden" name="archivo[fk_id_users]" value="{{ Auth::user()->id }}">
                                                    <input class="form-control" type="file" name="archivo_tarea">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
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
