
    <div class="card-body">
        {!! Form::open([
            'id' => 'alta_form',
            'type' => 'POST',
            'action' => 'Administracion\PerfilUsuarioController@editar_perfil',
            'enctype'=>'multipart/form-data'
        ]) !!}

            <input type="hidden" value="{{auth()->user()->id}}" name="id" id="id"/>
            <div class="mb-3">
          <label class="col-md-12">Usuario</label>
          <div class="col-md-12">
            <input type="text"  name="name" id="name" class="form-control form-control-line" placeholder="hal"/>
          </div>
        </div>
         <div class="mb-3">
          <label for="example-email" class="col-md-12">Email</label>
          <div class="col-md-12">
            <input  class="form-control form-control-line"  type="email" name="email" id="email"  placeholder="hal@arca.com"/>
          </div>
        </div>
        {{-- <div class="mb-3">
          <label class="col-md-12">Password</label>
          <div class="col-md-12">
            <input type="password" placeholder="password" name="password" id="password" class="form-control form-control-line"/>
          </div>
        </div> --}}
        <div class="mb-3">
          <label class="col-md-12">Phone No</label>
          <div class="col-md-12">
            <input type="text" placeholder="123 456 7890"   name="phone" id="phone" class="form-control form-control-line"/>
          </div>
        </div>
        <div class="mb-3">
          <label class="col-md-12">Comentario</label>
          <div class="col-md-12">
            <textarea rows="5"  name="message" id="message" class="form-control form-control-line"></textarea>
          </div>
        </div>
        <div class="mb-3">
          <label class="col-sm-6">Selecciona un Estado</label>
          <div class="col-sm-6">

            <select id="estado" name="estado"class="form-control select2"  style="height: 36px; width: 100%" required>
                @foreach ($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->estado}}</option>
                @endforeach
                </select>
          </div>
        </div>

        <div class="col-sm-12">
            <label class="col-sm-12">Foto de Perfil</label>
            <div class="input-group">
                <input type="file" name="foto"  id="foto"  accept="image/*">
            </div>
        </div>

        <div class="mb-3">
          <div class="col-sm-4">
              <button   type="submit" class="btn btn-success"> Actualizar </button>
          </div>
        </div>
    </form>
      {{-- </form> --}}
    </div>

