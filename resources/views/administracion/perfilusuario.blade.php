@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

@section('content')




<body>
    <div id="main-wrapper">

      <div class="page-wrapper">

        <div class="page-breadcrumb border-bottom">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
              <h5 class="font-weight-medium text-uppercase mb-0">
                Perfil
              </h5>
            </div>
            <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
              <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0 p-0"><li class="breadcrumb-item"><a >Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Perfil de Usuario </li></ol>
              </nav>
            </div>
          </div>
        </div>

        <div class="container-fluid page-content">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
              <div class="card">
                <div class="card-body">
                  <center class="mt-4">
                    @if ($foto[0]->foto === null)
                    <img src="../../assets/images/users/5.jpg"  class="position-relative w-100"
                          />
                            @else
                            <img src="public/images/usuarios/{{$foto[0]->foto}}"  class=" position-relative w-100"
                            />
                        @endif
                    <h4 class="card-title mt-2">{{auth()->user()->name}}</h4>
                    <h6 class="card-subtitle">{{auth()->user()->email}}</h6>
                  </center>
                </div>
                <div>

                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                <!-- Tabs -->
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-timeline-tab" data-bs-toggle="pill" href="pages-profile.html#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="pages-profile.html#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="pages-profile.html#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                  </li>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">

                    <div id="timeline">
                        @include('administracion.setings.timeline')
                        </div>
                  </div>


                  <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">

                         <div id="editarperfil">
                         @include('administracion.setings.perfil')
                         </div>
                  </div>


                  <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">

                        <div id="editarperfil">
                        @include('administracion.setings.editarPerfil')
                        </div>
                 </div>

                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>


  </body>

@endsection



@section('script')

    <script src="js/administracion/perfilusuario.js"></script>
@endsection
