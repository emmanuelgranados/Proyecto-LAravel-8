@section('lefsidebar')
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" style="background-color: #493c2d;">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" style="background-color: #493c2d;">
                    <li class="sidebar-item">
                        <a href="{{ route('inicio') }}" class="sidebar-link  waves-dark profile-dd" href="javascript:void(0)"
                            aria-expanded="false"><img src="../../assets/images/users/1.jpg" class="rounded-circle ms-2"
                                width="30" /><span class="hide-menu">Sección de {{auth()->user()->name}} </span>
                        </a>
                    </li>
                    @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Administración</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('usuarios') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Usuarios </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('grupos') }}" class="sidebar-link">
                                        <i class="mdi mdi-cards-variant"></i>
                                        <span class="hide-menu"> Grupos </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false">
                            <i class="mdi mdi-note-text"></i>
                            <span class="hide-menu">Bitacora</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('bitacora') }}" class="sidebar-link">
                                    <i class="mdi mdi-cards-variant"></i>
                                    <span class="hide-menu">Bitacaora</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('clientes') }}" >
                                <i class="mdi mdi-account-card-details"></i>
                                <span class="hide-menu">Clientes</span>
                            </a>
                        </li>
                    @endif
                    @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-chart-pie"></i>
                                <span class="hide-menu">Reportes</span>

                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('reportes') }}" class="sidebar-link">
                                        <i class="mdi mdi-box-shadow"></i>
                                        <span class="hide-menu"> Reportes </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    @endif

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@endsection
