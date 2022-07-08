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
                Profile Page
              </h5>
            </div>
            <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
              <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0 p-0"><li class="breadcrumb-item"><a >Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile Page </li></ol>
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
                    @if ($user[0]->foto === null)
                    <img src="../../assets/images/users/5.jpg"  class="position-relative w-100"
                          />
                            @else
                            <img src="../../assets/images/users/6.jpg"  class=" position-relative w-100"
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
                    <div class="card-body">
                      <div class="profiletimeline mt-0">
                        <div class="sl-item d-flex align-items-start">
                          <div class="sl-left">
                            <img src="../../assets/images/users/6.jpg" alt="user"
                              class="rounded-circle"/>
                          </div>
                          <div class="sl-right">
                            <div>
                              <a href="javascript:void(0)" class="link">{{auth()->user()->name}}</a>
                              <span class="sl-date">5 minutes ago</span>
                              <blockquote class="mt-2">
                                Primera Tarea
                              </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Usuario</strong>
                          <br />
                          <p class="text-muted">{{auth()->user()->name}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Telefono</strong>
                          <br />
                          <p class="text-muted">{{auth()->user()->phone}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Email</strong>
                          <br />
                          <p class="text-muted">{{auth()->user()->email}}</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                          <strong>Location</strong>
                          <br />
                          <p class="text-muted">{{$estado[0]->estado}}</p>
                        </div>
                      </div>
                      <hr />
                      <p class="mt-4">
                        {{auth()->user()->message}}
                      </p>
                    </div>
                  </div>




                  <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <div class="card-body">
                      {{-- <form class="form-horizontal form-material"> --}}
                        <form  class="formEditarPerfil" id="formEditarPerfil" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="{{auth()->user()->id}}" name="id" id="id"/>
                            <div class="mb-3">
                          <label class="col-md-12">Usuario</label>
                          <div class="col-md-12">
                            <input type="text" value="{{auth()->user()->name}}" name="name" id="name" class="form-control form-control-line" placeholder="hal"/>
                          </div>
                        </div>
                         <div class="mb-3">
                          <label for="example-email" class="col-md-12">Email</label>
                          <div class="col-md-12">
                            <input type="email"  value="{{auth()->user()->email}}" placeholder="hal@arca.com" class="form-control form-control-line" name="email" id="email"/>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Password</label>
                          <div class="col-md-12">
                            <input type="password" placeholder="password" name="password" id="password" class="form-control form-control-line"/>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Phone No</label>
                          <div class="col-md-12">
                            <input type="text" placeholder="123 456 7890"  value="{{auth()->user()->phone}}" name="phone" id="phone" class="form-control form-control-line"/>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Comentario</label>
                          <div class="col-md-12">
                            <textarea rows="5"  value="{{auth()->user()->message}}" name="message" id="message" class="form-control form-control-line"></textarea>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-sm-12">Selecciona un Estado</label>
                          <div class="col-sm-12">

                            <select id="estado" name="estado"class="form-control select2"  style="height: 36px; width: 100%" required>
                                @foreach ($estados as $estado)
                                <option value="{{$estado->id}}">{{$estado->estado}}</option>
                                @endforeach
                                </select>
                          </div>
                        </div>

                        <div class="col-sm-12">
                            <label class="col-sm-12">Foto de Perfil</label>
                            <div class="input-group">
                                <input type="file" name="foto"  id="foto"  accept="image/*">
                            </div>
                        </div>

                        <div class="mb-3">
                          <div class="col-sm-12">
                              <button   type="submit" class="btn btn-success"> Actualizar </button>
                          </div>
                        </div>
                    </form>
                      {{-- </form> --}}
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row -->
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->

        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- End Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- customizer Panel -->
    <!-- -------------------------------------------------------------- -->

  </body>

@endsection



@section('script')

    <script src="js/administracion/perfilusuario.js"></script>
@endsection
