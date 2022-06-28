<nav class="navbar top-navbar navbar-expand-md navbar-dark">

    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent" >

      <!-- ============================================================== -->
      <!-- Right side toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle waves-effect waves-dark"
            href="index.html#"
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
            <a class="dropdown-item" href="{{ route('perfilUsuario') }}"
              ><i
                data-feather="user"
                class="feather-sm text-info me-1 ms-1"
              ></i>
              My Profile</a
            >
            <a class="dropdown-item" href="index.html#"
              ><i
                data-feather="credit-card"
                class="feather-sm text-info me-1 ms-1"
              ></i>
              My Balance</a
            >
            <a class="dropdown-item" href="index.html#"
              ><i
                data-feather="mail"
                class="feather-sm text-success me-1 ms-1"
              ></i>
              Inbox</a
            >
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.html#"
              ><i
                data-feather="settings"
                class="feather-sm text-warning me-1 ms-1"
              ></i>
              Account Setting</a
            >
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.html#"
              ><i
                data-feather="log-out"
                class="feather-sm text-danger me-1 ms-1"
              ></i>
              Logout</a
            >
            <div class="dropdown-divider"></div>
            <div class="ps-4 p-2">
              <a href="index.html#" class="btn d-block w-100 btn-info rounded-pill"
                >View Profile</a
              >
            </div>
          </div>
        </li>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
      </ul>
    </div>
  </nav>
