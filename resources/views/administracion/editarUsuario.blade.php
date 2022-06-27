
            <form  class="formeditarUsuario" id="formeditarUsuario" method="POST">

                <div class="modal-dialog">
                           <div class="modal-content">
                             <div class="modal-header d-flex align-items-center">
                               <h4 class="modal-title" id="myModalLabel">
                                 Editar Usuario
                               </h4>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                               <form class="form-horizontal form-material">
                                 <div class="form-group mb-3">
                                   <div class="mb-3">
                                     <label for="name"class="control-label">Nombre de Usuario</label>
                                     <input type="text" id="name" name="usuario[name]"class="form-control" placeholder="Nombre de Usaurio"/>
                                   </div>
                                   <div class="mb-3">
                                     <label for="email"class="control-label">Correo Electronico</label>
                                     <input type="text" id="email" name="usuario[email]"class="form-control" placeholder="usuario@arca.com"/>
                                   </div>
                                   <div class="mb-3">
                                     <label for="password" class="control-label">Status</label>
                                     <div class="custom-control custom-switch my-2">
                                        <input type="checkbox" id="edit_user_status" name="edit_user_status" class="custom-control-input">
                                        <label class="custom-control-label" for="edit_user_status"></label>
                                    </div>
                                    </div>
                                   <div class="mb-3">
                                     <label for="rol" class="control-label">Rol</label>

                                     <select id="rol_alta_ed" name="usuario[roles[]]"class="form-control select2"  style="height: 36px; width: 100%">
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
                               <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancelar</button>
                             </div>
                           </div>
                           <!-- /.modal-content -->
                         </div>
                         <!-- /.modal-dialog -->

                 </form>
