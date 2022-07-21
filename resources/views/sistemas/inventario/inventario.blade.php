@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($roles)}} --}}
@section('content')



<div id="nuevo_equipo" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    @include('sistemas.inventario.forms.nuevo')
</div>

<div id="editar_equipo" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    @include('sistemas.inventario.forms.editar')
</div>

<div id="detalle_equipo" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    @include('sistemas.inventario.forms.detalle')
</div>


<div id="codigoqr_equipo" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    @include('sistemas.inventario.forms.codigoqr')
</div>




<div id="main-wrapper" >

    <div class="page-wrapper">
      <div class="page-breadcrumb border-bottom">
        <div class="row">

          <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-weight-medium text-uppercase mb-0">Sistemas</h5>
          </div>
          <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
            <nav aria-label="breadcrumb" class="mt-2">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a >Sistemas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inventario de Equipos</li>
              </ol>
            </nav>
        </div>
        </div>
      </div>

      <div class="page-content" style="max-width: 1950px; padding: 30px; padding-top:30px">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
          <div class="row">


              <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h3 class="font-weight-medium">
                        Sistemas / Inventario de Equipos
                        </h3>
                      </div>
                    <div class="d-flex justify-content-end">
                        @if(Auth::user()->hasRole('sistemas'))
                        <button id="agregar_equipo"class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#nuevo_equipo"><i class="mdi mdi-account-plus"></i> Nuevo Equipo</button>
                        @endif
                      </div>
                </div>

                <div class="table-responsive pr-2">
                  <table   id="equipos"  class="table table-striped table-bordered display" style="width:90%">
                  </table>

                </div>
              </div>

          </div>
        </div>

      </div>

    </div>

</div>

@endsection


@section('script')
    <script src="js/easy.qrcode.min.js"></script>
    <script src="js/sistemas/inventario.js"></script>
@endsection
