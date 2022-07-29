<div id="modal_archivos_tareas" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h4 class="modal-title" id="info-header-modalLabel"> Archivos Adjuntos </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form  class="formNuevaTarea" id="formNuevaTarea" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    {{-- <h4 class="card-title">Datos Generales</h4>
                                    <hr class="mt-0 mb-1"> --}}
                                    <div class="card-body">

                                        <div class="table-responsive mt-4">
                                            <table id="listaArchivosTareas" class="table table-bordered no-wrap fs-3 display" style="width:100%"></table>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
