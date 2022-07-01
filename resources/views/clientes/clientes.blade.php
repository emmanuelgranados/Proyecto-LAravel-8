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
                            <li class="breadcrumb-item"><a>Clientes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                        </ol>
                    </nav>
                    <button class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#info-header-modal"><i class="mdi mdi-account-plus"></i> Nuevo Cliente </button>

                    {{-- Formulario para crear nuevos clientes --}}

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
                                                                        <input type="text" name="cliente[direcciones][0][calle]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Número Exterior</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" name="cliente[direcciones][0][numero_exterior]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 ">
                                                                    <label class="control-label">Número Interior</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" name="cliente[direcciones][0][numero_interior]" class="form-control">
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
                                                                        <input type="text" name="cliente[direcciones][0][colonia]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->

                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">País</label>
                                                                    <div class="col-md-12">
                                                                        <select  name="cliente[direcciones][0][fk_id_paises]"class="form-control form-select">
                                                                            @foreach ( $paises as $pais )
                                                                                <option value="{{ $pais->id }}">{{ $pais->pais }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Estado</label>
                                                                    <div class="col-md-12">
                                                                        <select name="cliente[direcciones][0][fk_id_estados]" class="form-control form-select estados">
                                                                            @foreach ( $estados as $estado )
                                                                                <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Municipio</label>
                                                                    <div class="col-md-12">
                                                                        <select name="cliente[direcciones][0][fk_id_municipios]" class="form-control form-select municipios">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Código Postal</label>
                                                                    <div class="col-md-12">
                                                                        <select name="cliente[direcciones][0][fk_id_codigos_postales]" class="form-control form-select codigosPostales">
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
                                                                        <input type="text" name="cliente[direcciones][0][telefonos][][telefono]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label ">Teléfono 2</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" name="cliente[direcciones][0][telefonos][][telefono]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0 mb-1">
                                                    <div class="modal-footer">
                                                        <button type="button" id="cerrarModalNuevo" class="btn btn-light" data-bs-dismiss="modal"> Cerrar </button>
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

                    {{-- Fomularios para editar cliente --}}
                    <div id="info-header-modal-2" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel-2" aria-hidden="true">
                        <div class="modal-dialog modal-xl" >
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-info text-white">
                                    <h4 class="modal-title" id="info-header-modalLabel-2"> Editar Cliente </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <form  class="formEditarCliente" id="formEditarCliente" method="POST">
                                                    <div class="form-body">
                                                        <h4 class="card-title">Datos Generales</h4>
                                                        <hr class="mt-0 mb-1">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Nombre o Razón Social</label>
                                                                    <div class="col-md-12">
                                                                    <input type="hidden" id="editar_id" name="cliente[id]">
                                                                    <input type="text" class="form-control nuevoCliente" id="editar_nombre_razon_social" name="cliente[nombre_razon_social]" placeholder="google S.A de C.V">
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
                                                                    <input type="text" class="form-control nuevoCliente" id="editar_rfc" name="cliente[rfc]" placeholder="XAXX010101000">
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
                                                                    <input type="text" class="form-control nuevoCliente" id="editar_email" name="cliente[email]" placeholder="ejemplo@gmail.com">
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
                                                                    <input type="text" class="form-control nuevoCliente" id="editar_pagina_web" name="cliente[pagina_web]" placeholder="www.google.com">
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
                                                                        <input type="hidden" id="editar_id_0" name="direcciones[0][id]" class="form-control">
                                                                        <input type="text" id="editar_calle_0" name="direcciones[0][calle]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Número Exterior</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="editar_numero_exterior_0" name="direcciones[0][numero_exterior]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 ">
                                                                    <label class="control-label">Número Interior</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="editar_numero_interior_0" name="direcciones[0][numero_interior]" class="form-control">
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
                                                                        <input type="text" id="editar_colonia_0" name="direcciones[0][colonia]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">País</label>
                                                                    <div class="col-md-12">
                                                                        <select id="editar_fk_id_paises_0" name="direcciones[0][fk_id_paises]"class="form-control form-select">
                                                                            @foreach ( $paises as $pais )
                                                                                <option value="{{ $pais->id }}">{{ $pais->pais }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label_0">Estado</label>
                                                                    <div class="col-md-12">
                                                                        <select id="editar_fk_id_estados_0" name="direcciones[0][fk_id_estados]" class="form-control form-select estados">
                                                                            @foreach ( $estados as $estado )
                                                                                <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Municipio</label>
                                                                    <div class="col-md-12">
                                                                        <select id="editar_fk_id_municipios_0" name="direcciones[0][fk_id_municipios]" class="form-control form-select municipios "></select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Código Postal</label>
                                                                    <div class="col-md-12">
                                                                        <select id="editar_fk_id_codigos_postales_0" name="direcciones[0][fk_id_codigos_postales]" class="form-control form-select codigosPostales">
                                                                            <option value="1">Country 1</option>
                                                                            <option value="2">Country 2</option>
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
                                                                        <input type="hidden" id="editar_telefonos_id_0" name="telefonos[0][id]" >
                                                                        <input type="text" id="editar_telefonos_telefono_0" name="telefonos[0][telefono]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label ">Teléfono 2</label>
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" id="editar_telefonos_id_1" name="telefonos[1][id]" >
                                                                        <input type="text" id="editar_telefonos_telefono_1" name="telefonos[1][telefono]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0 mb-1">
                                                    <div class="modal-footer">
                                                        <button type="button" id="cerrarModalEditar" class="btn btn-light" data-bs-dismiss="modal"> Cerrar </button>
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
                                <table class="table customize-table table-striped mb-0 v-middle">
                                    <thead >
                                        <tr>
                                            <td scope="col" class="border-0 font-weight-medium ps-4" >#</td>
                                            <td scope="col" class="border-0 font-weight-medium">Nombre o Rázon Social</td>
                                            <td scope="col" class="border-0 font-weight-medium">RFC</td>
                                            <th scope="col" class="border-0 font-weight-medium">Correo Electronico</td>
                                            <td scope="col" class="border-0 font-weight-medium">Página Web</td>
                                            <td scope="col" class="border-0 font-weight-medium">Acciones</td>
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
    <script src="js/clientes/clientes.js" as></script>
@endsection
