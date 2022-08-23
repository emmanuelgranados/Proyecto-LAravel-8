
            <form  class="formNuevoGrupo" id="formNuevoGrupo" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

           <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">
                            Integrantes
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <ul class="list-style-none">
                                {{-- Lista de Roles --}}
                                <div class="table-responsive">
                                   <table class="table table-striped mb-0 v-middle">
                                       <thead >
                                           <tr>
                                               <td scope="col" class="border-0 font-weight-medium">Usuario</td>
                                               <td scope="col" class="border-0 font-weight-medium ps-4">Rol</td>
                                            </tr>
                                       </thead>
                                       <tbody id="integrantes" ></tbody>
                                   </table>
                                 </div>
                               </ul>
                        </div>

                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->

            </form>
