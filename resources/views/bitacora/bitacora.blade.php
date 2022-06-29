@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($usuarios)}} --}}
@section('content')

<div id="main-wrapper">

    <div class="page-wrapper">
        <div class="page-breadcrumb border-bottom">
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
                    <h5 class="font-weight-medium text-uppercase mb-0">Bitácora</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Bitácora</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bitácora</li>
                        </ol>
                    </nav>
                    <button class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#info-header-modal"><i class="mdi mdi-account-plus"></i> Nuevo Tarea </button>

                    {{-- Formulario para crear nuevos clientes --}}

                     @include('bitacora.forms.nuevo')

                    {{-- Fomularios para editar cliente --}}

                    {{-- @include('bitacora.forms.editar') --}}
                </div>
            </div>

            <div class="page-content container-fluid">
                <div class="row">
                    <input type="hidden" id="id_usuario" value="{{ Auth::user()->id }}">

                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <h5 class="card-title p-3 card-header mb-0">Integrantes del Grupo</h5>
                          <div class="p-3">
                            <ul class="list-style-none chat-list" id="listaUsuariosGrupo"></ul>
                          </div>
                        </div>
                      </div>

                    <div class="col-lg-4 d-flex align-items-stretch">

                      <div class="card w-100">
                        <div class="d-flex align-items-center px-3 py-4 border-bottom">
                          <div>
                            <h4 class="card-title font-weight-medium">Lista de Taras Activas</h4>
                            {{-- <h5 class="card-subtitle mb-0">This Months Task</h5> --}}
                          </div>
                          <div class="ms-auto">
                            {{-- <button class="btn btn-danger text-white btn-rounded" data-bs-toggle="modal" data-bs-target="#addtask">
                              Add Task
                            </button> --}}
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="todo-widget">
                            <ul class="list-task todo-list list-group mb-0" data-role="tasklist" id="listaTareasActivas">
                              {{-- <li class="list-group-item border-0 mb-0 pb-3 pe-3 ps-0" data-role="task">
                                <div class="form-check border-start border-2 border-info ps-1">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputSchedule" name="inputCheckboxesSchedule">
                                  <label for="inputSchedule" class="form-check-label ps-2 fw-normal">
                                    <span>Give salary to employee</span>
                                  </label>
                                </div>
                              </li> --}}
                              {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="
                                    form-check
                                    border-start border-2 border-danger
                                    ps-1
                                    d-flex
                                  ">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputCall" name="inputCheckboxesCall">
                                  <label for="inputCall" class="form-check-label ps-2 fw-normal">
                                    <span>Give Purchase report to</span>
                                    <span class="badge bg-light-danger text-danger">Today</span>
                                  </label>
                                </div>
                                <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                                  <li class="list-inline-item">
                                    <img class="rounded-circle" src="../../assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka" data-bs-original-title="">
                                  </li>
                                  <li class="list-inline-item">
                                    <img class="rounded-circle" src="../../assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina" data-bs-original-title="">
                                  </li>
                                </ul>
                              </li> --}}
                              {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="
                                    form-check
                                    border-start border-2 border-primary
                                    ps-1
                                  ">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputBook" name="inputCheckboxesBook">
                                  <label for="inputBook" class="form-check-label ps-2 fw-normal">
                                    <span>Book flight for holiday</span>
                                  </label>
                                </div>
                                <div class="
                                    item-date
                                    fs-2
                                    ps-4
                                    ms-3
                                    text-muted
                                    d-inline-block
                                  ">
                                  26 jun 2021
                                </div>
                              </li>
                              <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="
                                    form-check
                                    border-start border-2 border-warning
                                    ps-1
                                  ">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputForward" name="inputCheckboxesForward">
                                  <label for="inputForward" class="form-check-label ps-2 fw-normal">
                                    <span>Forward all tasks</span>
                                    <span class="badge bg-light-warning text-warning">2 weeks</span>
                                  </label>
                                </div>
                                <div class="
                                    item-date
                                    fs-2
                                    ps-4
                                    ms-3
                                    text-muted
                                    d-inline-block
                                  ">
                                  26 jun 2021
                                </div>
                              </li> --}}
                              {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="
                                    form-check
                                    border-start border-2 border-primary
                                    ps-1
                                  ">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputRecieve" name="inputCheckboxesRecieve">
                                  <label for="inputRecieve" class="form-check-label ps-2 fw-normal">
                                    <span>Recieve shipment</span>
                                  </label>
                                </div>
                                <div class="
                                    item-date
                                    fs-2
                                    ps-4
                                    ms-3
                                    text-muted
                                    d-inline-block
                                  ">
                                  26 jun 2021
                                </div>
                              </li>
                              <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="
                                    form-check
                                    border-start border-2 border-info
                                    ps-1
                                  ">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputpayment" name="inputCheckboxespayment">
                                  <label for="inputpayment" class="form-check-label ps-2 fw-normal">
                                    <span>Send payment today</span>
                                  </label>
                                </div>
                                <div class="
                                    item-date
                                    fs-2
                                    ps-4
                                    ms-3
                                    text-muted
                                    d-inline-block
                                  ">
                                  26 jun 2021
                                </div>
                              </li> --}}
                              {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="
                                    form-check
                                    border-start border-2 border-success
                                    ps-1
                                  ">
                                  <input type="checkbox" class="form-check-input ms-2" id="inputForward2" name="inputCheckboxesd">
                                  <label for="inputForward2" class="form-check-label ps-2 fw-normal">
                                    <span>Important tasks</span>
                                    <span class="badge bg-light-success text-success">2 weeks</span>
                                  </label>
                                </div>
                                <ul class="assignedto list-inline m-0 ps-4 ms-3 mt-2">
                                  <li class="list-inline-item">
                                    <img class="rounded-circle" src="../../assets/images/users/1.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Steave" data-bs-original-title="">
                                  </li>
                                  <li class="list-inline-item">
                                    <img class="rounded-circle" src="../../assets/images/users/2.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Jessica" data-bs-original-title="">
                                  </li>
                                  <li class="list-inline-item">
                                    <img class="rounded-circle" src="../../assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Assign to Selina" data-bs-original-title="">
                                  </li>
                                </ul>
                              </li> --}}
                            </ul>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="addtask" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header d-flex align-items-center">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Add Task
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="form-group">
                                    <label for="text_name">Name</label>
                                    <input type="text" class="form-control" id="text_name" placeholder="Enter your Name">
                                  </div>
                                  <div class="form-group">
                                    <label for="txt_email">Email Address</label>
                                    <input type="email" class="form-control" id="txt_email" placeholder="Enter Email">
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                  Save changes
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <h5 class="card-title p-3 card-header mb-0">Comentarios de la Tarea</h5>
                          <div class="card-body">
                            <div class="chat-box scrollable ps-container ps-theme-default ps-active-y" style="height: 434px" data-ps-id="82206101-6a21-2db6-501a-84bf820abaa5">
                              <!--chat Row -->
                              <ul class="chat-list m-0 p-0" id="listaComentarios"></ul>
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 434px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 211px;"></div></div></div>
                          </div>
                          <div class="card-body border-top">
                            <form class="formComentarios" id="formComentarios" method="POST">
                                <div class="row">

                                    <div class="col-9">
                                        <div class="input-field mt-0 mb-0">
                                            <input type="hidden" name="comentario[fk_id_users]" value="{{ Auth::user()->id }}">
                                            <input type="hidden" id="fk_id_tareas" name="comentario[fk_id_tareas]" value="">
                                            <input type="text" id="nuevoComentario" name="comentario[comentario]" placeholder="Escribe tu comentario" class="form-control border-0">
                                        </div>
                                    </div>
                                    <div class="col-3 text-end">
                                        <button class="btn-circle btn-lg btn-success btn text-white" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                  </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Lista de Tareas</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table customize-table table-striped mb-0 v-middle">
                                    <thead >
                                        <tr>
                                            <td scope="col" class="border-0 font-weight-medium ps-4" >#</td>
                                            <td scope="col" class="border-0 font-weight-medium">Cliente</td>
                                            <td scope="col" class="border-0 font-weight-medium">Tarea</td>
                                            <td scope="col" class="border-0 font-weight-medium">Prioridad</td>
                                            <th scope="col" class="border-0 font-weight-medium">Asigno</td>
                                            <td scope="col" class="border-0 font-weight-medium">Realiza</td>
                                            <td scope="col" class="border-0 font-weight-medium">Fecha Inicio</td>
                                            <td scope="col" class="border-0 font-weight-medium">Fecha Final</td>
                                            <td scope="col" class="border-0 font-weight-medium">Estatus</td>
                                            <td scope="col" class="border-0 font-weight-medium"></td>
                                        </tr>
                                    </thead>
                                    <tbody id="detallesLista" ></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer text-center">
            All Rights Reserved by Ample admin.
        </footer>

    </div>

</div>

@endsection


@section('script')
    <script src="js/bitacora/bitacora.js"></script>
@endsection
