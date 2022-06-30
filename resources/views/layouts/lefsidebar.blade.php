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
                        <a class="sidebar-link has-arrow waves-effect waves-dark profile-dd" href="javascript:void(0)"
                            aria-expanded="false"><img src="../../assets/images/users/1.jpg" class="rounded-circle ms-2"
                                width="30" /><span class="hide-menu">Sección de {{auth()->user()->name}} </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('perfilUsuario') }}" class="sidebar-link">
                                    <i class="ti-user"></i>
                                    <span class="hide-menu"> My Profile </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i class="ti-wallet"></i>
                                    <span class="hide-menu"> My Balance </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i class="ti-email"></i>
                                    <span class="hide-menu"> Inbox </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i class="ti-settings"></i>
                                    <span class="hide-menu"> Account Setting </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                    <i class="fas fa-power-off"></i>
                                    <span class="hide-menu"> Logout </span>
                                </a>
                            </li>
                        </ul>
                    </li>
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
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('clientes') }}" >
                            <i class="mdi mdi-account-card-details"></i>
                            <span class="hide-menu">Clientes</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false">
                            <i class="mdi mdi-chart-pie"></i>
                            <span class="hide-menu">Reportes</span>

                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="ui-accordian.html" class="sidebar-link">
                                    <i class="mdi mdi-box-shadow"></i>
                                    <span class="hide-menu"> Accordian</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-badge.html" class="sidebar-link">
                                    <i class="mdi mdi-application"></i>
                                    <span class="hide-menu"> Badge</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-buttons.html" class="sidebar-link">
                                    <i class="mdi mdi-toggle-switch"></i>
                                    <span class="hide-menu"> Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-modals.html" class="sidebar-link">
                                    <i class="mdi mdi-tablet"></i>
                                    <span class="hide-menu"> Modals</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-tab.html" class="sidebar-link">
                                    <i class="mdi mdi-sort-variant"></i>
                                    <span class="hide-menu"> Tab</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-tooltip-popover.html" class="sidebar-link">
                                    <i class="mdi mdi-image-filter-vintage"></i>
                                    <span class="hide-menu"> Tooltip &amp; Popover</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-notification.html" class="sidebar-link">
                                    <i class="mdi mdi-message-bulleted"></i>
                                    <span class="hide-menu"> Notification</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-progressbar.html" class="sidebar-link">
                                    <i class="mdi mdi-poll"></i>
                                    <span class="hide-menu"> Progressbar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-typography.html" class="sidebar-link">
                                    <i class="mdi mdi-format-line-spacing"></i>
                                    <span class="hide-menu"> Typography</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-bootstrap.html" class="sidebar-link">
                                    <i class="mdi mdi-bootstrap"></i>
                                    <span class="hide-menu"> Bootstrap Ui</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-breadcrumb.html" class="sidebar-link">
                                    <i class="mdi mdi-equal"></i>
                                    <span class="hide-menu"> Breadcrumb</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-lists.html" class="sidebar-link">
                                    <i class="mdi mdi-file-video"></i>
                                    <span class="hide-menu"> Lists</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-grid.html" class="sidebar-link">
                                    <i class="mdi mdi-view-module"></i>
                                    <span class="hide-menu"> Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-carousel.html" class="sidebar-link">
                                    <i class="mdi mdi-view-carousel"></i>
                                    <span class="hide-menu"> Carousel</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-scrollspy.html" class="sidebar-link">
                                    <i class="mdi mdi-crop-free"></i>
                                    <span class="hide-menu"> Scrollspy</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-offcanvas.html" class="sidebar-link">
                                    <i class="mdi mdi-content-copy"></i>
                                    <span class="hide-menu"> Offcanvas</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-spinner.html" class="sidebar-link">
                                    <i class="mdi mdi-application"></i>
                                    <span class="hide-menu"> Spinner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ui-toasts.html" class="sidebar-link">
                                    <i class="mdi mdi-apple-safari"></i>
                                    <span class="hide-menu"> Toasts</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <div class="devider"></div>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login3.html"
                            aria-expanded="false">
                            <i class="mdi mdi-logout text-danger"></i>
                            <span class="hide-menu">Cerrar sesión</span>
                        </a>
                    </li>

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
