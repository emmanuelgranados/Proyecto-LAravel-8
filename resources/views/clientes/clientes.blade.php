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
                    <h5 class="font-weight-medium text-uppercase mb-0">Clientes</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Clientes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                        </ol>
                    </nav>
                    <button class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#info-header-modal"><i class="mdi mdi-account-plus"></i> Nuevo Cliente </button>

                    <div id="info-header-modal" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" >
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-info text-white">
                                    <h4 class="modal-title" id="info-header-modalLabel"> Nuevo Cliente </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <form  class="formNuevoCliente" id="formNuevoCliente" method="POST">
                                                    <div class="form-body">
                                                        <h4 class="card-title">Datos Generales</h4>
                                                        <hr class="mt-0 mb-1">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Nombre o Razón Social</label>
                                                                    <div class="col-md-12">
                                                                    <input type="text" class="form-control nuevoCliente" name="cliente[nombre_razon_social]" placeholder="google S.A de C.V">
                                                                    {{-- <small class="form-control-feedback">
                                                                        This is inline help
                                                                    </small> --}}
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">RFC</label>
                                                                    <div class="col-md-12">
                                                                    <input type="text" class="form-control nuevoCliente" name="cliente[rfc]" placeholder="XAXX010101000">
                                                                    {{-- <small class="form-control-feedback">
                                                                        This field has error.
                                                                    </small> --}}
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Correo Electrónico</label>
                                                                    <div class="col-md-12">
                                                                    <input type="text" class="form-control nuevoCliente" name="cliente[email]" placeholder="ejemplo@gmail.com">
                                                                    {{-- <small class="form-control-feedback">
                                                                        This is inline help
                                                                    </small> --}}
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Página Web</label>
                                                                    <div class="col-md-12">
                                                                    <input type="text" class="form-control nuevoCliente" name="cliente[pagina_web]" placeholder="www.google.com">
                                                                    {{-- <small class="form-control-feedback">
                                                                        This field has error.
                                                                    </small> --}}
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="card-title">Dirección</h4>
                                                    <hr class="mt-0 mb-1">
                                                    <div class="card-body">
                                                    <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Calle</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Número Exterior</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 ">
                                                                    <label class="control-label">Número Interior</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="mb-3 row">
                                                                    <label class="control-label">Colonia</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Código Postal</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">País</label>
                                                                    <div class="col-md-12">
                                                                        <select class="form-control form-select">
                                                                            <option>Country 1</option>
                                                                            <option>Country 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Estado</label>
                                                                    <div class="col-md-12">
                                                                        <select class="form-control form-select">
                                                                            <option>Country 1</option>
                                                                            <option>Country 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Municipio</label>
                                                                    <div class="col-md-12">
                                                                        <select class="form-control form-select">
                                                                            <option>Country 1</option>
                                                                            <option>Country 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Teléfono 1</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label ">Teléfono 2</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0 mb-1">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"> Cerrar </button>
                                                        <button type="submit"class="btn btn-light-info text-info font-weight-medium"> Guardar </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            Manage
                                        </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {{-- @foreach ($usuarios as $usuario )
                                    <tr>
                                        <th>{{$usuario->id}}</th>
                                        <th>{{$usuario->name}}</th>
                                        <th>{{$usuario->email}}</th>
                                        <th>{{$usuario->nombreRol}}</th>
                                            @if ($usuario->activo == 1)
                                            <th> <span class="badge bg-light-success text-success fw-normal"> Activo</span></th>
                                            @elseif ($usuario->activo == 0)
                                            <th><span class="badge bg-light-warning text-warning fw-normal">Inactivo</span></th>
                                            @endif
                                        <th>
                                            <button title="Detalles" onclick="detalle_usuario({{$usuario->id}})" class="btn text-center btn-small btn-link font-weight-bold boton" id="datalles" type="submit" data-toggle="modal" data-target="#changeModal"><i data-feather="eye" class="feather-sm fill-white"></i></button>
                                            <button title="Editar" onclick="editar_usuario({{$usuario->id}})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" id="edit" type="submit" data-toggle="modal" data-target="#changeModal"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                            <button title="Eliminar" onclick="delete_usuario({{$usuario->id}})" class="btn text-center btn-small btn-link font-weight-bold botoncheckdelete" id="detele" type="submit" data-toggle="modal" data-target="#changeModal"><i data-feather="trash-2" class="feather-sm fill-white"></i></button>
                                        </th>

                                    </tr>
                                    @endforeach --}}


                                    </tbody>
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
    <script src="js/clientes/clientes.js" as></script>
@endsection
