<div id="modal_nueva_tarea_predefinida" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Nuevo Tarea Papuuuuus</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formNuevaTarea" id="formNuevaTarea" method="POST">
                                <div class="form-body">
                                    <h4 class="card-title">Datos Generales</h4>
                                    <hr class="mt-0 mb-1">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="mb-3">
                                                    <label class="control-label">Personal Asignado</label>
                                                    <div class="col-md-12">
                                                        <input type="hidden" name="tarea[fk_id_users_alta]" value="{{ Auth::user()->id }}">
                                                        <select id="fk_id_users_asignado" name="tarea[fk_id_users_asignado]" class="form-control form-select "></select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Cliente</label>
                                                    <div class="col-md-12">
                                                    {{-- <input type="text" class="form-control nuevoTarea" name="tarea[rfc]" placeholder="XAXX010101000"> --}}
                                                    <select id="predefinida_fk_id_clientes" name="tarea[fk_id_clientes]" class="form-control form-select ">

                                                    </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-8">

                                                <div class="mb-3">
                                                    <label class="control-label">Tarea Predefinida</label>
                                                    <div class="col-md-12">
                                                        <select id="fk_id_tareas_predefinidas" name="tarea[fk_id_tareas_predefinidas]" class="form-control form-select "></select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="campoDinamico" ></div>


                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Fecha y Hora Inicio</label>
                                                    <div class="col-md-12">
                                                    <input type="datetime-local" class="form-control" name="tarea[fecha_inicio]" >
                                                    {{-- <small class="form-control-feedback">
                                                        This field has error.
                                                    </small> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="control-label">Fecha y Hora Final</label>
                                                    <div class="col-md-12">
                                                    <input type="datetime-local" class="form-control" name="tarea[fecha_final]">
                                                    {{-- <small class="form-control-feedback">
                                                        This field has error.
                                                    </small> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label>Comentario</label>
                                                    <input type="hidden" name="comentario[fk_id_users]" value="{{ Auth::user()->id }}">
                                                    <textarea class="form-control" rows="5" name="comentario[comentario]"></textarea>
                                                  </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="mb-3">
                                                    <label class="control-label">Prioridad</label>
                                                    <div class="col-md-12">
                                                        <select name="tarea[fk_id_prioridades]" class="form-control form-select estados">
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
                                                        <select name="tarea[fk_id_estatus]" class="form-control form-select estados">
                                                            <option value="1">En proceso</option>
                                                            <option value="2" selected>Pendiente</option>
                                                            <option value="3">Terminado</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




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
