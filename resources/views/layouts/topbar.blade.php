
@section('topbar')
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header border-end">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
            class="nav-toggler waves-effect waves-light d-block d-md-none"
            href="javascript:void(0)"
            ><i class="ti-menu ti-close"></i
            ></a>
            <a class="navbar-brand" >
            <!-- Logo icon -->
            <b class="logo-icon">
                <img src="../../assets/images/logos/logo2.png" alt="homepage" class="dark-logo" />
                <img src="../../assets/images/logos/logo2.png" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
                <!-- dark Logo text -->
                <img src="../../assets/images/logos/logotexto.png" alt="homepage" class="dark-logo" />
                <img src="../../assets/images/logos/logotexto.png" class="light-logo" alt="homepage" />

            </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
            class="topbartoggler d-block d-md-none waves-effect waves-light"
            href="javascript:void(0)"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            ><i class="ti-more"></i
            ></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto" >
            <li class="nav-item d-none d-md-block">
                <a
                class="nav-link sidebartoggler waves-effect waves-light"
                href="javascript:void(0)"
                data-sidebartype="mini-sidebar"
                ><i class="mdi mdi-menu fs-5"></i
                ></a>
            </li>

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle waves-effect waves-dark"

                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >

                {{-- @if ($foto[0]->foto === null)
                    <img src="../../assets/images/users/5.jpg"  class="rounded-circle" width="30"/>
                @else
                    <img src="public/images/usuarios/{{$foto[0]->foto}}" class="rounded-circle" width="30" />
                @endif --}}
                <span class="ms-2 font-weight-medium">{{auth()->user()->name}}</span
                ><span class="fas fa-angle-down ms-2"></span>
                </a>
                <div
                class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                "
                >
                <div
                    class="
                    d-flex
                    no-block
                    align-items-center
                    p-3
                    bg-info
                    text-white
                    mb-2
                    "
                >
                    <div class="">
                    {{-- <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                    /> --}}
                    {{-- @if ($foto[0]->foto === null)
                        <img src="../../assets/images/users/5.jpg"  class="rounded-circle" width="60" />
                    @else
                        <img src="public/images/usuarios/{{$foto[0]->foto}}" class="rounded-circle" width="60"/>
                    @endif --}}
                    </div>
                    <div class="ms-2">
                    <h4 class="mb-0 text-white">{{auth()->user()->name}}</h4>
                    <p class="mb-0">{{auth()->user()->email}}</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{ route('perfilUsuario') }}" ><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>Mi perfil</a>


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}"
                    ><i
                    data-feather="log-out"
                    class="feather-sm text-danger me-1 ms-1"
                    ></i>Cerrar Sessión</a>

            </li>
            </ul>
        </div>
        </nav>
    </header>
@endsection
