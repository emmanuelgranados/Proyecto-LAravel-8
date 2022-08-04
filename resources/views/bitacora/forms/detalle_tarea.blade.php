<div id="modal_detalle_tareas" class="modal fade " tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Detalle de la Tarea </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body bg-light">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="card bg-light">
                            <div class="row">
                                <div class="col-lg-8">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title" id="detalle_tarea"></h4>
                                      <div id="detalle_sub_tarea"></div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Mensajes</h4>
                                      <ul class="list-unstyled mt-5" id="detalle_comentarios"></ul>
                                    </div>
                                  </div>

                                </div>
                                <div class="col-lg-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title mb-0">Información de la Tarea</h4>
                                    </div>
                                    <div class="card-body bg-light">
                                      <div class="row text-center">
                                        <div class="col-6 my-2 text-start" id="detalle_estatus">

                                        </div>
                                        <div class="col-6 my-2" id="detalle_fecha_inicio"></div>
                                      </div>
                                    </div>
                                    <div class="card-body">
                                      <h5 class="pt-3">Asigno</h5>
                                      <span id="detalle_usuarios_alta"></span>
                                      <h5 class="mt-4">Realiza</h5>
                                      <span class="detalle_usuarios_asignado"></span>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body text-center">
                                      <h4 class="card-title">Información del Usuario</h4>
                                      <div class="profile-pic mb-3 mt-3">
                                        <img src="../../assets/images/users/5.jpg" class="rounded-circle" alt="user" width="150">
                                        <h4 class="mt-3 mb-0 detalle_usuarios_asignado" ></h4>
                                        <a id="detalle_usuarios_asignado_email"></a>
                                      </div>
                                    </div>


                                  </div>

                                  <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Archivos Adjuntos</h4>
                                        <div id="visitor">

                                            <ul class="list-group" id="detalle_archivos">

                                            </ul>

                                        </div>
                                    </div>
                                </div>



                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
