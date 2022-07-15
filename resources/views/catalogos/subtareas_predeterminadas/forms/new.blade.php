

   <form  class="formNuevaSubTareaPredefinida" id="formNuevaSubTareaPredefinida" method="POST">

    {{ csrf_field() }}

<div class="modal-dialog" role="document">
<div class="modal-content">
   <div class="modal-header d-flex align-items-center">
   <h4 class="modal-title" id="myModalLabel">
   Agregar Sub Tarea
   </h4>
   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
        <form class="form-horizontal">



        <div class="form-group mb-3">
            <label for="tarea" class="control-label">Tarea</label>
            <select id="fk_id_tareas_predefinidas" name="fk_id_tareas_predefinidas" class="form-control select2"  style="height: 36px; width: 100%" required>
            @foreach ($tareas as $tarea)
            <option value="{{$tarea->id}}"><strong>{{$tarea->tarea_predefinida}}</strong>
                <p><strong> &nbsp;&nbsp;Categoria: &nbsp;{{$tarea->categoria}}</p>
               </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
          <label class="col-md-12">Sub Tarea</label>
          <div class="col-md-12">
           <input type="text" id="sub_tarea_predefinida" name="sub_tarea_predefinida" class="form-control" placeholder="Nombre de la Sub Tarea"/>
          </div>
        </div>


        </form>
   </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal">Guardar </button>
        <button type="button" id ="cerrarModalNuevaSubTareaPredefinida"class="btn btn-default waves-effect" data-bs-dismiss="modal"> Cancelar</button>
    </div>
  </div>
</div>


</form>
