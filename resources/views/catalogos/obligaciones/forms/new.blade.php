

   <form  class="formNuevaObligacion" id="formNuevaObligacion" method="POST">

    {{ csrf_field() }}

<div class="modal-dialog" role="document">
<div class="modal-content">
   <div class="modal-header d-flex align-items-center">
   <h4 class="modal-title" id="myModalLabel">
   Agregar Obligación
   </h4>
   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
        <form class="form-horizontal">
        <div class="form-group mb-3">
          <label class="col-md-12">Nombre</label>
          <div class="col-md-12">
           <input type="text" id="obligacion" name="obligacion" class="form-control" placeholder="Nombre de la Obligación"/>
          </div>
        </div>
        </form>
   </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal">Guardar </button>
        <button type="button" id ="cerrarModalNuevaObligacion"class="btn btn-default waves-effect" data-bs-dismiss="modal"> Cancelar</button>
    </div>
  </div>
</div>


</form>
