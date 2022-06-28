
            <form  class="formNuevoUsuario" id="formNuevoUsuario" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

           <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">
                            Nuevo Usuario
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal form-material">
                            <div class="form-group mb-3">

                              <div class="mb-3">
                                <label for="name"class="control-label">Nombre de Usuario</label>
                                <input type="text" id="name" name="name" max="50" value="{{old('name')}}" class="form-control" placeholder="Nombre de Usaurio" required/>
                                </div>

                              <div class="mb-3">
                                <label for="email"class="control-label">Correo Electronico</label>
                                <input type="text" id="email" name="email" max="50" value="{{old('email')}}" class="form-control" placeholder="usuario@arca.com" required/>
                                </div>

                              <div class="mb-3">
                                <label for="password" class="control-label">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control" required/>
                               </div>

                              <div class="mb-3">
                                <label for="rol" class="control-label">Rol</label>
                                <select id="rol_alta" name="roles[]"class="form-control select2"  style="height: 36px; width: 100%" required>
                                @foreach ($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                                @endforeach
                                </select>
                            </div>
                             </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal"> Guardar</button>
                          <button type="button"  id="cerrarModalNuevo" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->

            </form>
