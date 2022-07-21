
            <form  class="formAddEquipos" id="formAddEquipos" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

           <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header modal-colored-header bg-info text-white">
                          <h4 class="modal-title" id="info-header-modalLabel">
                            Nuevo Equipo
                          </h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                          <form class="form-horizontal form-material">
                            <div class="row">

                                <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="col-md-12">Nombre del Equipo</label>
                                    <div class="col-md-12">
                                     <input type="text" id="nombre_equipo" onkeypress="mayus(this);" name="nombre_equipo" class="form-control" placeholder="ARCA-E1" required/>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="fk_id_marcas" class="control-label">Marca</label>
                                        <select id="fk_id_marcas" name="fk_id_marcas"class="form-control select2"  style="height: 36px; width: 100%" required>
                                        @foreach ($marcas as $marca)
                                        <option value="{{$marca->id}}">{{$marca->marca}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    </div>


                                <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="fk_id_users" class="control-label">Usuario Asignado</label>
                                    <select id="fk_id_users" name="fk_id_users"class="form-control select2"  style="height: 36px; width: 100%" required>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Mac Address</label>
                                      <div class="col-md-12">
                                        <input type="text" id="mac_address" onkeypress="mayus(this);" name="mac_address" class="form-control"  maxlength="17" required/>
                                      </div>
                                    </div>
                                  </div>


                                <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Mac Wifi</label>
                                      <div class="col-md-12">
                                        <input type="text" id="mac_wifi" onkeypress="mayus(this);" name="mac_wifi" class="form-control"  maxlength="17" required/>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Serial Key Windows</label>
                                      <div class="col-md-12">
                                        <input type="text" id="serial_key_windows" onkeypress="mayus(this);" name="serial_key_windows" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Sistema Operativo</label>
                                      <div class="col-md-12">
                                        <input type="text" id="sistema_operativo" onkeypress="mayus(this);" name="sistema_operativo" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="licencia_office" class="control-label">Licencia de Office</label>
                                    <select id="licencia_office" name="licencia_office"class="form-control select2" style="height: 36px; width: 100%" required>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Modelo</label>
                                      <div class="col-md-12">
                                        <input type="text" id="modelo" onkeypress="mayus(this);" name="modelo" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Memoria RAM</label>
                                      <div class="col-md-12">
                                        <input type="text" id="memoria_ram" onkeypress="mayus(this);" name="memoria_ram" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Disco Duro</label>
                                      <div class="col-md-12">
                                        <input type="text" id="disco_duro" onkeypress="mayus(this);" name="disco_duro" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">Procesador</label>
                                      <div class="col-md-12">
                                        <input type="text" id="procesador" onkeypress="mayus(this);" name="procesador" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-md-4">
                                    <div class="mb-3">
                                      <label class="col-md-12">NO. Serie</label>
                                      <div class="col-md-12">
                                        <input type="text" id="numero_de_serie" onkeypress="mayus(this);" name="numero_de_serie" class="form-control" required/>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="garantia" class="control-label">Garantia</label>
                                    <select id="garantia" name="garantia" class="form-control select2" style="height: 36px; width: 100%" required>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label  for="fecha_garantia"  class="control-label">Fecha de Garantia</label>
                                        <div class="col-md-12">
                                            <input type="date" class="form-control" id="fecha_garantia" name="fecha_garantia" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="office" class="control-label">Tipo</label>
                                    <select id="tipo" name="tipo"class="form-control select2" style="height: 36px; width: 100%" required>
                                    <option value="LAPTOP">LAPTOP</option>
                                    <option value="ALL IN ONE">ALL IN ONE</option>
                                    <option value="SERVIDOR">SERVIDOR</option>
                                    </select>
                                </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="status" class="control-label">Status</label>
                                    <select id="status" name="status"class="form-control select2" style="height: 36px; width: 100%" required>
                                    <option value="1">ACTIVO</option>
                                    <option value="2">INACTIVO</option>
                                    </select>
                                </div>
                                </div>






                             </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info waves-effect" data-bs-dismiss="modal"> Guardar</button>
                          <button type="button"  id="cerrarModalAgregarEquipo" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->

            </form>
