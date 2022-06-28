@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($roles)}} --}}
@section('content')
<style>
    p {
    color: red;
}
</style>

<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.nuevoUsuario')
</div>

<div id="editar-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.editarUsuario')
</div>

<div id="detalle-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.detalleUsuario')
</div>

<div id="delete-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('administracion.deleteUsuario')
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
                <li class="breadcrumb-item"><a href="index.html">Administración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
              </ol>
            </nav>
            @if(Auth::user()->hasRole('sistemas'))
            <button class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#add-contact"><i class="mdi mdi-account-plus"></i> Nuevo usuario </button>
            @endif
        </div>
        </div>
      </div>

      <div class="page-content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Lista de usuarios</h5>
              </div>
              <div class="table-responsive">
                <table   id="usuarios"  class="table table-striped table-bordered display">
                </table>
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

    <script src="js/administracion/usuarios.js" as></script>
@endsection
