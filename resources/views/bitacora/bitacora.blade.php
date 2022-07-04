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
                            <li class="breadcrumb-item"><a >Bitácora</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bitácora</li>
                        </ol>
                    </nav>
                    @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2  || Auth::user()->fk_id_roles == 3 )
                        <button id="nuevaTarea" class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#info-header-modal"><i class="mdi mdi-account-plus"></i> Nueva Tarea </button>

                    @endif

                    {{-- Formulario para crear nuevos clientes --}}

                     @include('bitacora.forms.nuevo')

                    {{-- Fomularios para editar cliente --}}

                    @include('bitacora.forms.editar')
                </div>
            </div>

            <div class="page-content container-fluid">
                <div class="row">
                    <input type="hidden" id="id_usuario" value="{{ Auth::user()->id }}">

                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="d-flex align-items-center px-3 py-4 border-bottom">
                                <div>
                                    <h4 class="card-title">Integrantes del Grupo</h4>
                                </div>
                                @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                                    <div class="ms-auto">
                                        <div class="dropdown ">
                                            <button class="btn btn-secondary dropdown-toggle" id="grupos" type="button" data-bs-toggle="dropdown" aria-expanded="false">Grupos</button>
                                            <ul class="dropdown-menu" aria-labelledby="grupos" id="listaGrupos" style=""></ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
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
                          </div>
                          <div class="ms-auto"></div>
                        </div>
                        <div class="card-body">
                          <div class="todo-widget">
                            <ul class="list-task todo-list list-group mb-0" data-role="tasklist" id="listaTareasActivas"></ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <h4 class="card-title p-3 card-header mb-0">Comentarios de la Tarea</h4>
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















                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Tickets</h4>

                          <div class="table-responsive mt-4">
                            <table
                              id="zero_config"
                              class="table table-bordered no-wrap fs-3"
                            >
                              <thead>
                                <tr>
                                  <th>Status</th>
                                  <th>Title</th>
                                  <th>ID</th>
                                  <th>Product</th>
                                  <th>Created by</th>
                                  <th>Date</th>
                                  <th>Agent</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-warning
                                        text-warning
                                        font-weight-medium
                                      "
                                      >In Progress</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Elegant Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >276377</a
                                    >
                                  </td>
                                  <td>Elegant Admin</td>
                                  <td>Eric Pratt</td>
                                  <td>2021/05/01</td>
                                  <td>Fazz</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-danger
                                        text-danger
                                        font-weight-medium
                                      "
                                      >Closed</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >AdminX Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1234251</a
                                    >
                                  </td>
                                  <td>AdminX Admin</td>
                                  <td>Nirav Joshi</td>
                                  <td>2021/05/11</td>
                                  <td>Steve</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-success
                                        text-success
                                        font-weight-medium
                                      "
                                      >Opened</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Admin-Pro Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1020345</a
                                    >
                                  </td>
                                  <td>Admin-Pro</td>
                                  <td>Vishal Bhatt</td>
                                  <td>2021/04/01</td>
                                  <td>John</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-warning
                                        text-warning
                                        font-weight-medium
                                      "
                                      >In Progress</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Elegant Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >7810203</a
                                    >
                                  </td>
                                  <td>Elegant Admin</td>
                                  <td>Eric Pratt</td>
                                  <td>2021/01/01</td>
                                  <td>Fazz</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-warning
                                        text-warning
                                        font-weight-medium
                                      "
                                      >In Progress</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >AdminX Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >2103450</a
                                    >
                                  </td>
                                  <td>AdminX Admin</td>
                                  <td>Nirav Joshi</td>
                                  <td>2021/05/01</td>
                                  <td>John</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-warning
                                        text-warning
                                        font-weight-medium
                                      "
                                      >In Progress</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Admin-Pro Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >2140530</a
                                    >
                                  </td>
                                  <td>Admin-Pro</td>
                                  <td>Vishal Bhatt</td>
                                  <td>2021/07/01</td>
                                  <td>Steve</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-success
                                        text-success
                                        font-weight-medium
                                      "
                                      >Opened</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Elegant Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >4500123</a
                                    >
                                  </td>
                                  <td>Elegant Admin</td>
                                  <td>Eric Pratt</td>
                                  <td>2021/05/10</td>
                                  <td>Fazz</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-danger
                                        text-danger
                                        font-weight-medium
                                      "
                                      >Closed</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Elegant Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1230450</a
                                    >
                                  </td>
                                  <td>Elegant Admin</td>
                                  <td>Eric Pratt</td>
                                  <td>2021/05/14</td>
                                  <td>John</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-danger
                                        text-danger
                                        font-weight-medium
                                      "
                                      >Closed</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >AdminX Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1240503</a
                                    >
                                  </td>
                                  <td>AdminX Admin</td>
                                  <td>Nirav Joshi</td>
                                  <td>2021/02/01</td>
                                  <td>Steve</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-success
                                        text-success
                                        font-weight-medium
                                      "
                                      >Opened</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Admin-Pro Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1250304</a
                                    >
                                  </td>
                                  <td>Admin-Pro</td>
                                  <td>Vishal Bhatt</td>
                                  <td>2021/05/21</td>
                                  <td>Fazz</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-success
                                        text-success
                                        font-weight-medium
                                      "
                                      >Opened</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Elegant Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1470250</a
                                    >
                                  </td>
                                  <td>Elegant Admin</td>
                                  <td>Eric Pratt</td>
                                  <td>2021/05/11</td>
                                  <td>John</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-danger
                                        text-danger
                                        font-weight-medium
                                      "
                                      >Closed</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >Admin-Pro Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1450023</a
                                    >
                                  </td>
                                  <td>Admin-Pro</td>
                                  <td>Vishal Bhatt</td>
                                  <td>2021/05/13</td>
                                  <td>Steve</td>
                                </tr>
                                <tr>
                                  <td>
                                    <span
                                      class="
                                        badge
                                        bg-light-warning
                                        text-warning
                                        font-weight-medium
                                      "
                                      >In Progress</span
                                    >
                                  </td>
                                  <td>
                                    <a
                                      href="ticket-detail.html"
                                      class="font-weight-medium link"
                                      >AdminX Theme Side Menu Open OnClick</a
                                    >
                                  </td>
                                  <td>
                                    <a href="ticket-detail.html" class="fw-bold link"
                                      >1420530</a
                                    >
                                  </td>
                                  <td>AdminX Admin</td>
                                  <td>Nirav Joshi</td>
                                  <td>2021/10/01</td>
                                  <td>Fazz</td>
                                </tr>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th>Status</th>
                                  <th>Title</th>
                                  <th>ID</th>
                                  <th>Product</th>
                                  <th>Created by</th>
                                  <th>Date</th>
                                  <th>Agent</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
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

    <script>
        $("#zero_config").DataTable();
      </script>
@endsection
