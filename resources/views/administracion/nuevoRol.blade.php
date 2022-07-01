

   <form  class="formNuevoRol" id="formNuevoRol" method="POST">

                {{ csrf_field() }}

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center">
          <h4 class="modal-title" id="myModalLabel">
            Agregar Rol
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group mb-3">
              <label class="col-md-12">Nombre</label>
              <div class="col-md-12">
               <input type="text" id="namerol" name="name" class="form-control" placeholder="Nombre"/>
              </div>
            </div>
            <div class="form-group mb-3">
              <label class="col-md-12">Descripción</label>
              <div class="col-md-12">
                <input type="text" id="descripcionrol" name="description" class="form-control" placeholder="Descripción"/>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal">Guardar </button>
          <button type="button" id ="cerrarModalNuevoRol"class="btn btn-default waves-effect" data-bs-dismiss="modal"> Cancelar</button>
        </div>
      </div>
    </div>


            </form>
