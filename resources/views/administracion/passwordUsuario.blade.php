<form  class="formPasswordUsuario" id="formPasswordUsuario" method="POST">

    {{ csrf_field() }}

<div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">
                            Cambiar Contraseña
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal form-material">
                            <div class="form-group mb-3">

                                <input type="hidden" id="id_user_password" name="id" value="{{old('id')}}" required/>

                                <div class="mb-3">
                                    <label for="password" class="control-label">Nueva Contraseña</label>
                                    <input type="password" id="newpassword" name="password"   class="form-control" required/>
                                   </div>

                                   <div class="mb-3">
                                    <label for="password" class="control-label">Repite Contraseña</label>
                                    <input type="password" id="reppassword" name="reppassword" class="form-control" required/>
                                   </div>


                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal"> Save</button>
                          <button type="button" id="cerrarModalPassword" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->

</form>
