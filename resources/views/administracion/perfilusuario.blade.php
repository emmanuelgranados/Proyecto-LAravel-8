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
                <ul
                  class="nav nav-pills custom-pills"
                  id="pills-tab"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="pills-timeline-tab"
                      data-bs-toggle="pill"
                      href="pages-profile.html#current-month"
                      role="tab"
                      aria-controls="pills-timeline"
                      aria-selected="true"
                      >Timeline</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="pills-profile-tab"
                      data-bs-toggle="pill"
                      href="pages-profile.html#last-month"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                      >Profile</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="pills-setting-tab"
                      data-bs-toggle="pill"
                      href="pages-profile.html#previous-month"
                      role="tab"
                      aria-controls="pills-setting"
                      aria-selected="false"
                      >Setting</a
                    >
                  </li>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="current-month"
                    role="tabpanel"
                    aria-labelledby="pills-timeline-tab"
                  >
                    <div class="card-body">
                      <div class="profiletimeline mt-0">
                        <div class="sl-item d-flex align-items-start">
                          <div class="sl-left">
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                          </div>
                          <div class="sl-right">
                            <div>
                              <a href="javascript:void(0)" class="link"
                                >John Doe</a
                              >
                              <span class="sl-date">5 minutes ago</span>
                              <p>
                                assign a new task
                                <a href="javascript:void(0)">
                                  Design weblayout</a
                                >
                              </p>
                              <div class="row">
                                <div class="col-lg-3 col-md-6 mb-3">
                                  <img
                                    src="../../assets/images/big/img1.jpg"
                                    class="img-fluid rounded"
                                  />
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                  <img
                                    src="../../assets/images/big/img2.jpg"
                                    class="img-fluid rounded"
                                  />
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                  <img
                                    src="../../assets/images/big/img3.jpg"
                                    class="img-fluid rounded"
                                  />
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                  <img
                                    src="../../assets/images/big/img4.jpg"
                                    class="img-fluid rounded"
                                  />
                                </div>
                              </div>
                              <div class="like-comm">
                                <a href="javascript:void(0)" class="link me-2"
                                  >2 comment</a
                                >
                                <a href="javascript:void(0)" class="link me-2"
                                  ><i class="fa fa-heart text-danger"></i> 5
                                  Love</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr />
                        <div class="sl-item d-flex align-items-start">
                          <div class="sl-left">
                            <img
                              src="../../assets/images/users/2.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                          </div>
                          <div class="sl-right">
                            <div>
                              <a href="javascript:void(0)" class="link"
                                >John Doe</a
                              >
                              <span class="sl-date">5 minutes ago</span>
                              <div class="mt-3 row">
                                <div class="col-md-3 col-xs-12">
                                  <img
                                    src="../../assets/images/big/img1.jpg"
                                    alt="user"
                                    class="img-fluid rounded"
                                  />
                                </div>
                                <div class="col-md-9 col-xs-12">
                                  <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Integer nec odio. Praesent
                                    libero. Sed cursus ante dapibus diam.
                                  </p>
                                  <a
                                    href="javascript:void(0)"
                                    class="btn btn-success"
                                  >
                                    Design weblayout</a
                                  >
                                </div>
                              </div>
                              <div class="like-comm mt-3">
                                <a href="javascript:void(0)" class="link me-2"
                                  >2 comment</a
                                >
                                <a href="javascript:void(0)" class="link me-2"
                                  ><i class="fa fa-heart text-danger"></i> 5
                                  Love</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr />
                        <div class="sl-item d-flex align-items-start">
                          <div class="sl-left">
                            <img
                              src="../../assets/images/users/3.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                          </div>
                          <div class="sl-right">
                            <div>
                              <a href="javascript:void(0)" class="link"
                                >John Doe</a
                              >
                              <span class="sl-date">5 minutes ago</span>
                              <p class="mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Integer nec odio. Praesent
                                libero. Sed cursus ante dapibus diam. Sed nisi.
                                Nulla quis sem at nibh elementum imperdiet. Duis
                                sagittis ipsum. Praesent mauris. Fusce nec
                                tellus sed augue semper
                              </p>
                            </div>
                            <div class="like-comm mt-3">
                              <a href="javascript:void(0)" class="link me-2"
                                >2 comment</a
                              >
                              <a href="javascript:void(0)" class="link me-2"
                                ><i class="fa fa-heart text-danger"></i> 5
                                Love</a
                              >
                            </div>
                          </div>
                        </div>
                        <hr />
                        <div class="sl-item d-flex align-items-start">
                          <div class="sl-left">
                            <img
                              src="../../assets/images/users/4.jpg"
                              alt="user"
                              class="rounded-circle"
                            />
                          </div>
                          <div class="sl-right">
                            <div>
                              <a href="javascript:void(0)" class="link"
                                >John Doe</a
                              >
                              <span class="sl-date">5 minutes ago</span>
                              <blockquote class="mt-2">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt
                              </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="last-month"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                  >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Full Name</strong>
                          <br />
                          <p class="text-muted">Johnathan Deo</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Mobile</strong>
                          <br />
                          <p class="text-muted">(123) 456 7890</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Email</strong>
                          <br />
                          <p class="text-muted">johnathan@admin.com</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                          <strong>Location</strong>
                          <br />
                          <p class="text-muted">London</p>
                        </div>
                      </div>
                      <hr />
                      <p class="mt-4">
                        Donec pede justo, fringilla vel, aliquet nec, vulputate
                        eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                        venenatis vitae, justo. Nullam dictum felis eu pede
                        mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                        elementum semper nisi. Aenean vulputate eleifend tellus.
                        Aenean leo ligula, porttitor eu, consequat vitae,
                        eleifend ac, enim.
                      </p>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries
                      </p>
                      <p>
                        It was popularised in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                      <h4 class="font-weight-medium mt-4">Skill Set</h4>
                      <hr />
                      <h5 class="mt-4">
                        Wordpress <span class="pull-right">80%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 80%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        HTML 5 <span class="pull-right">90%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 90%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        jQuery <span class="pull-right">50%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          aria-valuenow="50"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 50%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        Photoshop <span class="pull-right">70%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          aria-valuenow="70"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 70%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="previous-month"
                    role="tabpanel"
                    aria-labelledby="pills-setting-tab"
                  >
                    <div class="card-body">
                      <form class="form-horizontal form-material">
                        <div class="mb-3">
                          <label class="col-md-12">Full Name</label>
                          <div class="col-md-12">
                            <input
                              type="text"
                              placeholder="Johnathan Doe"
                              class="form-control form-control-line"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="example-email" class="col-md-12"
                            >Email</label
                          >
                          <div class="col-md-12">
                            <input
                              type="email"
                              placeholder="johnathan@admin.com"
                              class="form-control form-control-line"
                              name="example-email"
                              id="example-email"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Password</label>
                          <div class="col-md-12">
                            <input
                              type="password"
                              value="password"
                              class="form-control form-control-line"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Phone No</label>
                          <div class="col-md-12">
                            <input
                              type="text"
                              placeholder="123 456 7890"
                              class="form-control form-control-line"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Message</label>
                          <div class="col-md-12">
                            <textarea
                              rows="5"
                              class="form-control form-control-line"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-sm-12">Select Country</label>
                          <div class="col-sm-12">
                            <select class="form-control form-control-line">
                              <option>London</option>
                              <option>India</option>
                              <option>Usa</option>
                              <option>Canada</option>
                              <option>Thailand</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="col-sm-12">
                            <button class="btn btn-success">
                              Update Profile
                            </button>
                          </div>
                        </div>
                      </form>
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
        <footer class="footer text-center">
          All Rights Reserved by Ample admin.
        </footer>
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
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i class="fa fa-spin fa-cog"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="pages-profile.html#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="mdi mdi-wrench fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="pages-profile.html#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="mdi mdi-message-reply fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="pages-profile.html#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="mdi mdi-star-circle fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/2.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/1.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/4.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/6.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>

  </body>

@endsection



@section('script')

    <script src="js/administracion/perfilusuario.js"></script>
@endsection
