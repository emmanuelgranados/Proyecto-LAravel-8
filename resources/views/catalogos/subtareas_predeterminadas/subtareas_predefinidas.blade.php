@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($roles)}} --}}
@section('content')



<div id="add-tarea" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('catalogos.subtareas_predeterminadas.forms.new')
</div>

<div id="edit-tarea" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @include('catalogos.subtareas_predeterminadas.forms.edit')
</div>



<div id="main-wrapper">

    <div class="page-wrapper">
      <div class="page-breadcrumb border-bottom">
        <div class="row">

          <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-weight-medium text-uppercase mb-0">Sub Tareas Predefinidas</h5>
          </div>
          <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
            <nav aria-label="breadcrumb" class="mt-2">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a >Catalogos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sub Tareas Predefinidas</li>
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

            <div class="col-lg-9 col-md-8">
              <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h3 class="font-weight-medium">
                        Catalogos / Sub Tareas Predefinidas
                        </h3>
                      </div>
                    <div class="d-flex justify-content-end">
                        @if(Auth::user()->hasRole('sistemas'))
                        <button id="agregar_subtarea_predefinida"class="btn btn-success text-white ms-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#add-tarea"><i class="mdi mdi-account-plus"></i> Nueva Sub Tarea</button>
                        @endif
                      </div>
                </div>

                <div class="table-responsive">
                  <table   id="sub_tareas_predefinidas"  class="table table-striped table-bordered display"  style="width:100%">
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

    <script src="js/catalogos/sub_tareas_predefinidas.js"></script>
@endsection
