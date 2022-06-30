
            <form  class="formAddUsers" id="formAddUsers" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

           <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">
                            Integrantes del Grupo
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal form-material">
                            <div class="form-group mb-3">

                                <input type="hidden" id="fk_id_grupos" name="fk_id_grupos" value="{{old('fk_id_grupos')}}" required/>

                                <div class="mb-3">
                                    <label for="fk_id_users" class="control-label">Intregrantes</label>
                                    <select id="fk_id_users" name="fk_id_users[]"class="form-control select2" value="{{old('fk_id_users[]')}}"  style="height: 36px; width: 100%" required>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
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
