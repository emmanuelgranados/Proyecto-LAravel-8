

   <form  class="formNuevaTareaPredefinida" id="formNuevaTareaPredefinida" method="POST">

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

        <div class="form-group mb-3">
          <label class="col-md-12">Tarea</label>
          <div class="col-md-12">
           <input type="text" id="tarea_predefinida" name="tarea_predefinida" class="form-control" placeholder="Nombre de la Obligación"/>
          </div>
        </div>

        <div class="form-group mb-3">
            <label for="fk_id_categorias_tareas" class="control-label">Categoria</label>
            <select id="fk_id_categorias_tareas" name="fk_id_categorias_tareas"class="form-control select2"  style="height: 36px; width: 100%" required>
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->categoria_tarea}}</option>
            @endforeach
            </select>
        </div>
        </form>
   </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal">Guardar </button>
        <button type="button" id ="cerrarModalNuevaTareaPredefinida"class="btn btn-default waves-effect" data-bs-dismiss="modal"> Cancelar</button>
    </div>
  </div>
</div>


</form>
