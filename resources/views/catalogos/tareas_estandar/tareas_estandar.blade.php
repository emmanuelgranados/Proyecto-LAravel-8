@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($roles)}} --}}
@section('content')



<div id="add-tarea" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('catalogos.tareas_estandar.forms.new')
</div>

<div id="edit-tarea" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('catalogos.tareas_estandar.forms.edit')
</div>



<div id="main-wrapper">

    <div class="page-wrapper">
      <div class="page-breadcrumb border-bottom">
        <div class="row">

          <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-weight-medium text-uppercase mb-0">Tareas Estandar</h5>
          </div>
          <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
            <nav aria-label="breadcrumb" class="mt-2">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a >Catalogos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tareas Estandar</li>
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

            <div class="col-lg-12 col-md-12">
              <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h3 class="font-weight-medium">
                        Catalogos / Tareas Estandar
                        </h3>
                      </div>
                    <div class="d-flex justify-content-end">
                        @if(Auth::user()->hasRole('sistemas') || Auth::user()->hasRole('socio'))
                        <button id="agregar_tarea_estandar"class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#add-tarea"><i class="mdi mdi-account-plus"></i> Nueva Tarea</button>
                        @endif
                      </div>
                </div>

                <div class="table-responsive">
                  <table   id="tareas_estandar"  class="table table-striped table-bordered display"  style="width:100%">
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

    <script src="js/catalogos/tareas_estandar.js"></script>
@endsection
