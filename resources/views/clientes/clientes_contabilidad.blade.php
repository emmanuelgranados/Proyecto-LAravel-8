@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

@section('content')

<div id="main-wrapper">

    <div class="page-wrapper">
        <div class="page-breadcrumb border-bottom">
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
                    <h5 class="font-weight-medium text-uppercase mb-0">Clientes Contablidad</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a>Clientes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contabilidad</li>
                        </ol>
                    </nav>
                    <button class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#info-header-modal"><i class="mdi mdi-account-plus"></i> Nuevo Cliente </button>

                    {{-- Formulario para crear nuevos clientes --}}

                     @include('clientes.forms.contabilidad_nuevo')

                    {{-- Fomularios para editar cliente --}}

                    @include('clientes.forms.editar')

                </div>
            </div>

            <div class="page-content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Lista de clientes</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table customize-table table-striped mb-0 v-middle">
                                    <thead >
                                        <tr>
                                            <td scope="col" class="border-0 font-weight-medium ps-4" >#</td>
                                            <td scope="col" class="border-0 font-weight-medium">Nombre Cliente</td>
                                            <td scope="col" class="border-0 font-weight-medium">Razón Social</td>
                                            <td scope="col" class="border-0 font-weight-medium">RFC</td>
                                            <th scope="col" class="border-0 font-weight-medium">Correo Electronico</td>
                                            <td scope="col" class="border-0 font-weight-medium">Fecha de Ingreso</td>
                                            <td scope="col" class="border-0 font-weight-medium">Personal Asignado</td>
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
    <script src="js/clientes/clientes_contabilidad.js" as></script>
@endsection
