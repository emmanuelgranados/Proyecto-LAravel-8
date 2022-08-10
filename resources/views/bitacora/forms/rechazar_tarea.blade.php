<div id="modal_rechazar_tarea" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Rechazar Tarea </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formRechazarTarea" id="formRechazarTarea" method="POST" enctype="multipart/form-data">

                                <div class="form-body">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label>Motivo Del Rechazo</label>
                                                    <input type="hidden" name="comentario[fk_id_users]" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" id="rechazar_tarea_id" name="comentario[fk_id_tareas]">
                                                    <textarea class="form-control" rows="5" name="comentario[comentario]"></textarea>
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Adjuntar Archivo</label>
                                            <input type="hidden" name="archivo[fk_id_users]" value="{{ Auth::user()->id }}">
                                            <input class="form-control" type="file" id="archivo_tarea" name="archivo_tarea">
                                        </div>


                                    </div>
                                </div>


                                <hr class="mt-0 mb-1">
                                <div class="modal-footer">
                                    <button type="button" id="cerrarModalRechazar" class="btn btn-light" data-bs-dismiss="modal"> Cerrar </button>
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
