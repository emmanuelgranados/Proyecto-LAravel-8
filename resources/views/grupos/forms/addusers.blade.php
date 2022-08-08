<style>


// Only included because button labels aren't showing

.moveall::after {
  content: attr(title);

}


// Custom styling form
.form-control option {
    padding: 10px;
    border-bottom: 1px solid #d48815;
}

</style>

            <form  class="formAddUsers" id="formAddUsers" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

           <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">
                           Agregar Integrantes al Grupo
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal form-material">
                            <div class="form-group mb-3">

                                <input type="hidden" id="fk_id_grupos" name="fk_id_grupos" value="{{old('fk_id_grupos')}}" required/>

                                <div class="card-body">

                                    <select class="integrantes" name="fk_id_users[]" id="integrantes" multiple>
                                    </select>

                                  </div>

                             </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal"> Guardar</button>
                          <button type="button"  id="cerrarModalAgregarUsers" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->

            </form>
