<form  class="formEditTareasEstandar" id="formEditTareasEstandar" method="POST">

    {{ csrf_field() }}

<div class="modal-dialog" role="document">
<div class="modal-content">
   <div class="modal-header d-flex align-items-center">
   <h4 class="modal-title" id="myModalLabel">
   Agregar Tarea
   </h4>
   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
        <form class="form-horizontal">
            <input type="hidden" name="id" id="id_tarea_estandar" required>
        <div class="form-group mb-3">
          <label class="col-md-12">Tarea Estandar</label>
          <div class="col-md-12">
           <input type="text" id="tarea_estandared" name="tarea_estandar" class="form-control" placeholder="Nombre de la Tarea"/>
          </div>
        </div>

        </form>
   </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal">Guardar </button>
        <button type="button" id ="cerrarModalEditarTareaEstandar"class="btn btn-default waves-effect" data-bs-dismiss="modal"> Cancelar</button>
    </div>
  </div>
</div>


</form>
