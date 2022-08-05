@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($roles)}} --}}
@section('content')


<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.nuevoUsuario')
</div>

<div id="editar-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.editarUsuario')
</div>

<div id="detalle-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.detalleUsuario')
</div>

<div id="detalle-key" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.passwordUsuario')
</div>

<div  id="nuevo-Rol" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @include('administracion.nuevoRol')
</div>


<div id="main-wrapper">

    <div class="page-wrapper">
      <div class="page-breadcrumb border-bottom">
        <div class="row">

          <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-weight-medium text-uppercase mb-0">Usuarios</h5>
          </div>
          <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
            <nav aria-label="breadcrumb" class="mt-2">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a>Administración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
              </ol>
            </nav>
        </div>
        </div>
      </div>

      <div class="page-content container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
          <div class="row no-gutters">
            <div class="col-lg-3 col-md-4 border-right">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <span class="card-title mb-0">Lista de Roles</span>
                </div>
                <hr />
                <ul class="list-style-none">
                 {{-- Lista de Roles --}}
                 <div class="table-responsive">
                    <table class="table table-striped mb-0 v-middle">
                        <thead >
                            <tr>
                                {{-- <td scope="col" class="border-0 font-weight-medium ps-4" >Rol</td> --}}
                                {{-- <td scope="col" class="border-0 font-weight-medium">Usuarios</td> --}}
                            </tr>
                        </thead>
                        <tbody id="ListaRoles" ></tbody>
                    </table>
                  </div>
                </ul>
                <center class="mt-4">
                <button id="agregar_rol" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#nuevo-Rol"><i class="ti-plus me-2"></i>Nuevo Rol</button>
                </center>
              </div>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h3 class="font-weight-medium">
                          Usuarios / Roles
                        </h3>
                      </div>
                    <div class="d-flex justify-content-end">
                        @if(Auth::user()->hasRole('sistemas') ||  Auth::user()->hasRole('socio') )
                        <button id="agregar_usuario"class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#add-contact"><i class="mdi mdi-account-plus"></i> Nuevo usuario </button>
                        @endif
                      </div>
                </div>

                <div class="table-responsive">
                  <table   id="usuarios"  class="table table-striped table-bordered display"  style="width:100%">
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>



    </div>

</div>

@endsection


@section('script')

    <script src="js/administracion/usuarios.js" as></script>
@endsection
