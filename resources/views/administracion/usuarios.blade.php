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
                <table class="table no-wrap user-table mb-0">
                  <thead class="table-light">
                    <tr>
                      <td scope="col" class="border-0 font-weight-medium ps-4" >
                        #
                      </td>
                      <td scope="col" class="border-0 font-weight-medium">
                      Nombre
                      </td>
                      <td scope="col" class="border-0 font-weight-medium">
                        Email
                      </td>
                      <td scope="col" class="border-0 font-weight-medium">
                        Rol
                      </td>
                      <th scope="col" class="border-0 font-weight-medium">
                        Status
                      </td>
                      <td scope="col" class="border-0 font-weight-medium">
                        Acciones
                      </td>
                    </tr>
                  </thead>


                    <tbody id="detallesLista" ></tbody>
                {{-- @foreach ($usuarios as $usuario )
                <tr>
                    <th>{{$usuario->id}}</th>
                    <th>{{$usuario->name}}</th>
                    <th>{{$usuario->email}}</th>
                    <th>{{$usuario->rol}}</th>
                        @if ($usuario->activo == 1)
                        <th> <span class="badge bg-light-success text-success fw-normal"> Activo</span></th>
                         @elseif ($usuario->activo == 0)
                         <th><span class="badge bg-light-warning text-warning fw-normal">Inactivo</span></th>
                        @endif
                    <th>
                        <button title="Detalles" onclick="detalle_usuario({{$usuario->id}})" class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#detalle-contact" ><i data-feather="eye" class="feather-sm fill-white"></i></button>
                        <button title="Editar" onclick="editar_usuario({{$usuario->id}})"    class="btn text-center btn-small btn-link font-weight-bold boton"  data-bs-toggle="modal" data-bs-target="#editar-contact"><i class="fa fa-edit" aria-hidden="true"></i></button>
                        <button title="Eliminar" onclick="delete_usuario({{$usuario->id}})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" data-bs-toggle="modal" data-bs-target="#delete-contact"><i data-feather="trash-2" class="feather-sm fill-white"></i></button>
                    </th>

                </tr>
                @endforeach --}}



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
