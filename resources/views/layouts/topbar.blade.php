
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
            {{-- <li class="nav-item dropdown mega-dropdown">
                <a
                class="nav-link dropdown-toggle waves-effect waves-dark"
                href="index.html#"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >
                <span class="d-none d-md-block"
                    >Mega <i class="icon-options-vertical"></i
                ></span>
                <span class="d-block d-md-none"
                    ><i class="mdi mdi-dialpad font-24"></i
                ></span>
                </a>
                <div class="dropdown-menu dropdown-menu-animate-up">
                <div class="mega-dropdown-menu row">
                    <div class="col-lg-3 col-xl-2 mb-4">
                    <h4 class="mb-3">CAROUSEL</h4>
                    <!-- CAROUSEL -->
                    <div
                        id="carouselExampleControls"
                        class="carousel slide carousel-dark"
                        data-bs-ride="carousel"
                    >
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                            class="d-block img-fluid"
                            src="../../assets/images/big/img1.jpg"
                            alt="First slide"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                            class="d-block img-fluid"
                            src="../../assets/images/big/img2.jpg"
                            alt="Second slide"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                            class="d-block img-fluid"
                            src="../../assets/images/big/img3.jpg"
                            alt="Third slide"
                            />
                        </div>
                        </div>
                        <a
                        class="carousel-control-prev"
                        href="index.html#carouselExampleControls"
                        role="button"
                        data-bs-slide="prev"
                        >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Previous</span>
                        </a>
                        <a
                        class="carousel-control-next"
                        href="index.html#carouselExampleControls"
                        role="button"
                        data-bs-slide="next"
                        >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <!-- End CAROUSEL -->
                    </div>
                    <div class="col-lg-3 mb-4">
                    <h4 class="mb-3">ACCORDION</h4>
                    <!-- Accordian -->
                    <div
                        class="accordion accordion-flush"
                        id="accordionFlushExample"
                    >
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne"
                            >
                            Accordion Item #1
                            </button>
                        </h2>
                        <div
                            id="flush-collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid.
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo"
                            >
                            Accordion Item #2
                            </button>
                        </h2>
                        <div
                            id="flush-collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid.
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree"
                            >
                            Accordion Item #3
                            </button>
                        </h2>
                        <div
                            id="flush-collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample"
                        >
                            <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid.
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                    <h4 class="mb-3">CONTACT US</h4>
                    <!-- Contact -->
                    <form>
                        <div class="mb-3 form-floating">
                        <input
                            type="text"
                            class="form-control"
                            id="exampleInputname1"
                            placeholder="Enter Name"
                        />
                        <label>Enter Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter email"
                        />
                        <label>Enter Email address</label>
                        </div>
                        <div class="mb-3 form-floating">
                        <textarea
                            class="form-control"
                            id="exampleTextarea"
                            rows="3"
                            placeholder="Message"
                        ></textarea>
                        <label>Enter Message</label>
                        </div>
                        <button
                        type="submit"
                        class="btn px-4 rounded-pill btn-info"
                        >
                        Submit
                        </button>
                    </form>
                    </div>
                    <div class="col-lg-3 col-xlg-4 mb-4">
                    <h4 class="mb-3">List style</h4>
                    <!-- List style -->
                    <ul class="list-style-none">
                        <li>
                        <a href="index.html#" class="font-weight-medium"
                            ><i
                            data-feather="check-circle"
                            class="feather-sm text-success me-2"
                            ></i>
                            You can give link</a
                        >
                        </li>
                        <li>
                        <a href="index.html#" class="font-weight-medium"
                            ><i
                            data-feather="check-circle"
                            class="feather-sm text-success me-2"
                            ></i>
                            Give link</a
                        >
                        </li>
                        <li>
                        <a href="index.html#" class="font-weight-medium"
                            ><i
                            data-feather="check-circle"
                            class="feather-sm text-success me-2"
                            ></i>
                            Another Give link</a
                        >
                        </li>
                        <li>
                        <a href="index.html#" class="font-weight-medium"
                            ><i
                            data-feather="check-circle"
                            class="feather-sm text-success me-2"
                            ></i>
                            Forth link</a
                        >
                        </li>
                        <li>
                        <a href="index.html#" class="font-weight-medium"
                            ><i
                            data-feather="check-circle"
                            class="feather-sm text-success me-2"
                            ></i>
                            Another fifth link</a
                        >
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </li> --}}
            <!-- ============================================================== -->
            <!-- End mega menu -->
            <!-- ============================================================== -->
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
                <img
                    src="../../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="36"
                />
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
                    <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                    />
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
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            </ul>
        </div>
        </nav>
    </header>
@endsection
