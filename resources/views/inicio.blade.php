@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

@section('content')


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="container-fluid border-bottom">
            <div class="row">
                <div
                class="
                    col-lg-3 col-md-4 col-xs-12
                    justify-content-start
                    d-flex
                    align-items-center
                "
                >
                <h5 class="font-weight-medium text-uppercase mb-0">Dashboard</h5>
                </div>
                <div
                class="
                    col-lg-9 col-md-8 col-xs-12
                    d-flex
                    justify-content-start justify-content-md-end
                    align-self-center
                "
                >
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Dashboard
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Card Group  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Products yearly sales, Weather Cards Section  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Manage Table & Walet Cards Section  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="tab-content">



                    <div class="tab-pane" id="messages" role="tabpanel">
                        <div class="row py-4 px-5 no-gutters mt-3">
                        <div
                            class="col-sm-12 col-md-6 d-flex justify-content-start"
                        >
                            <h3 class="card-title mb-0">Manage Users</h3>
                        </div>
                        <div
                            class="col-sm-12 col-md-6 justify-content-end d-flex"
                        >
                            <div
                            class="btn-group"
                            role="group"
                            aria-label="Basic example"
                            >
                            <button type="button" class="btn btn-secondary">
                                <i data-feather="user-plus" class="feather-sm"></i>
                                <span class="ms-2 fw-normal fs-4">Add User</span>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i data-feather="edit-2" class="feather-sm"></i>
                                <span class="ms-2 fw-normal">Edit User</span>
                            </button>
                            </div>
                        </div>
                        </div>
                        <div class="bg-light">
                        <div
                            class="
                            table-responsive
                            border-top
                            manage-table
                            px-4
                            py-3
                            "
                        >
                            <table class="table no-wrap">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0">Name</th>
                                <th scope="col" class="border-0">Position</th>
                                <th scope="col" class="border-0">Joined</th>
                                <th scope="col" class="border-0">Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="advanced-table">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c9"
                                    />
                                    <label class="form-check-label" for="c9"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/1.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Andrew Simons</td>
                                <td>Modulator</td>
                                <td>6 May 2021</td>
                                <td>Gujrat, India</td>
                                </tr>
                                <tr>
                                <td colspan="6" class="sml-pd"></td>
                                </tr>
                                <tr class="advanced-table">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c10"
                                    />
                                    <label class="form-check-label" for="c10"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/2.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Hanna Gover</td>
                                <td>Admin</td>
                                <td>13 Jan 2005</td>
                                <td>Texas, United states</td>
                                </tr>
                                <tr>
                                <td colspan="6" class="sml-pd"></td>
                                </tr>
                                <tr class="advanced-table active">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c11"
                                        checked=""
                                    />
                                    <label class="form-check-label" for="c11"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/3.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Joshi Nirav</td>
                                <td>Admin</td>
                                <td>21 Mar 2001</td>
                                <td>Bhavnagar, India</td>
                                </tr>
                                <tr>
                                <td colspan="6" class="sml-pd"></td>
                                </tr>
                                <tr class="advanced-table">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c12"
                                    />
                                    <label class="form-check-label" for="c12"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/4.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Joshi Sunil</td>
                                <td>Admin</td>
                                <td>21 Mar 2004</td>
                                <td>Gujarat, India</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="d-flex align-items-center p-4 mt-2">
                        <h3 class="card-title mb-0">1 members selected</h3>
                        <div class="ms-auto">
                            <button
                            class="
                                btn btn-danger
                                text-white
                                btn-rounded
                                py-2
                                px-3
                            "
                            >
                            Next <i class="ti-arrow-right ms-2"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="save" role="tabpanel">
                        <div class="row py-4 px-5 no-gutters mt-3">
                        <div
                            class="col-sm-12 col-md-6 d-flex justify-content-start"
                        >
                            <h3 class="card-title mb-0">Save & Finish</h3>
                        </div>
                        <div
                            class="col-sm-12 col-md-6 justify-content-end d-flex"
                        >
                            <div
                            class="btn-group"
                            role="group"
                            aria-label="Basic example"
                            >
                            <button type="button" class="btn btn-secondary">
                                <i data-feather="user-plus" class="feather-sm"></i>
                                <span class="ms-2 fw-normal fs-4">Add User</span>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i data-feather="edit-2" class="feather-sm"></i>
                                <span class="ms-2 fw-normal">Edit User</span>
                            </button>
                            </div>
                        </div>
                        </div>
                        <div class="bg-light">
                        <div
                            class="
                            table-responsive
                            border-top
                            manage-table
                            px-4
                            py-3
                            "
                        >
                            <table class="table no-wrap">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0"></th>
                                <th scope="col" class="border-0">Name</th>
                                <th scope="col" class="border-0">Position</th>
                                <th scope="col" class="border-0">Joined</th>
                                <th scope="col" class="border-0">Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="advanced-table">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c13"
                                    />
                                    <label class="form-check-label" for="c13"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/1.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Andrew Simons</td>
                                <td>Modulator</td>
                                <td>6 May 2021</td>
                                <td>Gujrat, India</td>
                                </tr>
                                <tr>
                                <td colspan="6" class="sml-pd"></td>
                                </tr>
                                <tr class="advanced-table">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c14"
                                    />
                                    <label class="form-check-label" for="c14"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/2.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Hanna Gover</td>
                                <td>Admin</td>
                                <td>13 Jan 2005</td>
                                <td>Texas, United states</td>
                                </tr>
                                <tr>
                                <td colspan="6" class="sml-pd"></td>
                                </tr>
                                <tr class="advanced-table">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c15"
                                    />
                                    <label class="form-check-label" for="c15"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/3.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Joshi Nirav</td>
                                <td>Admin</td>
                                <td>21 Mar 2001</td>
                                <td>Bhavnagar, India</td>
                                </tr>
                                <tr>
                                <td colspan="6" class="sml-pd"></td>
                                </tr>
                                <tr class="advanced-table active">
                                <td class="ps-3">
                                    <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="c16"
                                        checked=""
                                    />
                                    <label class="form-check-label" for="c16"
                                        >&nbsp;</label
                                    >
                                    </div>
                                </td>
                                <td>
                                    <img
                                    src="../../assets/images/users/4.jpg"
                                    class="rounded-circle"
                                    width="30"
                                    />
                                </td>
                                <td>Joshi Sunil</td>
                                <td>Admin</td>
                                <td>21 Mar 2004</td>
                                <td>Gujarat, India</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="d-flex align-items-center p-4 mt-2">
                        <h3 class="card-title mb-0">1 members selected</h3>
                        <div class="ms-auto">
                            <button
                            class="
                                btn btn-danger
                                text-white
                                btn-rounded
                                py-2
                                px-3
                            "
                            >
                            Next <i class="ti-arrow-right ms-2"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- User Table & Profile Cards Section  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title mb-0">Manage Users</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th
                            scope="col"
                            class="border-0 fs-4 font-weight-medium ps-4"
                            >
                            #
                            </th>
                            <th
                            scope="col"
                            class="border-0 fs-4 font-weight-medium"
                            >
                            Name
                            </th>
                            <th
                            scope="col"
                            class="border-0 fs-4 font-weight-medium"
                            >
                            Occupation
                            </th>
                            <th
                            scope="col"
                            class="border-0 fs-4 font-weight-medium"
                            >
                            Email
                            </th>
                            <th
                            scope="col"
                            class="border-0 fs-4 font-weight-medium"
                            >
                            Category
                            </th>
                            <th
                            scope="col"
                            class="border-0 fs-4 font-weight-medium"
                            >
                            Manage
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ps-4">1</td>
                            <td>
                            <h5 class="font-weight-medium mb-0">
                                Daniel Kristeen
                            </h5>
                            <span class="text-muted">Texas, Unitedd states</span>
                            </td>
                            <td>
                            <span>Visual Designer</span><br />
                            <span>Past : teacher</span>
                            </td>
                            <td>
                            <span>daniel@website.com</span><br />
                            <span>999 - 444 - 555</span>
                            </td>
                            <td>
                            <select
                                class="form-select category-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Modulator</option>
                                <option>Admin</option>
                                <option>User</option>
                                <option>Subscriber</option>
                            </select>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="text-info edit"
                                ><i
                                data-feather="eye"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            <a
                                href="javascript:void(0)"
                                class="text-dark delete ms-2"
                                ><i
                                data-feather="trash-2"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">2</td>
                            <td>
                            <h5 class="font-weight-medium mb-0">Emma Smith</h5>
                            <span class="text-muted">Texas, Unitedd states</span>
                            </td>
                            <td>
                            <span>Visual Designer</span><br />
                            <span>Past : teacher</span>
                            </td>
                            <td>
                            <span>daniel@website.com</span><br />
                            <span>999 - 444 - 555</span>
                            </td>
                            <td>
                            <select
                                class="form-select category-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Modulator</option>
                                <option>Admin</option>
                                <option>User</option>
                                <option>Subscriber</option>
                            </select>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="text-info edit"
                                ><i
                                data-feather="eye"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            <a
                                href="javascript:void(0)"
                                class="text-dark delete ms-2"
                                ><i
                                data-feather="trash-2"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">3</td>
                            <td>
                            <h5 class="font-weight-medium mb-0">
                                Olivia Johnson
                            </h5>
                            <span class="text-muted">Texas, Unitedd states</span>
                            </td>
                            <td>
                            <span>Visual Designer</span><br />
                            <span>Past : teacher</span>
                            </td>
                            <td>
                            <span>daniel@website.com</span><br />
                            <span>999 - 444 - 555</span>
                            </td>
                            <td>
                            <select
                                class="form-select category-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Modulator</option>
                                <option>Admin</option>
                                <option>User</option>
                                <option>Subscriber</option>
                            </select>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="text-info edit"
                                ><i
                                data-feather="eye"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            <a
                                href="javascript:void(0)"
                                class="text-dark delete ms-2"
                                ><i
                                data-feather="trash-2"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">4</td>
                            <td>
                            <h5 class="font-weight-medium mb-0">
                                Isabella Williams
                            </h5>
                            <span class="text-muted">Texas, Unitedd states</span>
                            </td>
                            <td>
                            <span>Visual Designer</span><br />
                            <span>Past : teacher</span>
                            </td>
                            <td>
                            <span>daniel@website.com</span><br />
                            <span>999 - 444 - 555</span>
                            </td>
                            <td>
                            <select
                                class="form-select category-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Modulator</option>
                                <option>Admin</option>
                                <option>User</option>
                                <option>Subscriber</option>
                            </select>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="text-info edit"
                                ><i
                                data-feather="eye"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            <a
                                href="javascript:void(0)"
                                class="text-dark delete ms-2"
                                ><i
                                data-feather="trash-2"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">5</td>
                            <td>
                            <h5 class="font-weight-medium mb-0">Sophia Jones</h5>
                            <span class="text-muted">Texas, Unitedd states</span>
                            </td>
                            <td>
                            <span>Visual Designer</span><br />
                            <span>Past : teacher</span>
                            </td>
                            <td>
                            <span>daniel@website.com</span><br />
                            <span>999 - 444 - 555</span>
                            </td>
                            <td>
                            <select
                                class="form-select category-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Modulator</option>
                                <option>Admin</option>
                                <option>User</option>
                                <option>Subscriber</option>
                            </select>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="text-info edit"
                                ><i
                                data-feather="eye"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            <a
                                href="javascript:void(0)"
                                class="text-dark delete ms-2"
                                ><i
                                data-feather="trash-2"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4">6</td>
                            <td>
                            <h5 class="font-weight-medium mb-0">
                                Charlotte Brown
                            </h5>
                            <span class="text-muted">Texas, Unitedd states</span>
                            </td>
                            <td>
                            <span>Visual Designer</span><br />
                            <span>Past : teacher</span>
                            </td>
                            <td>
                            <span>daniel@website.com</span><br />
                            <span>999 - 444 - 555</span>
                            </td>
                            <td>
                            <select
                                class="form-select category-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Modulator</option>
                                <option>Admin</option>
                                <option>User</option>
                                <option>Subscriber</option>
                            </select>
                            </td>
                            <td>
                            <a href="javascript:void(0)" class="text-info edit"
                                ><i
                                data-feather="eye"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            <a
                                href="javascript:void(0)"
                                class="text-dark delete ms-2"
                                ><i
                                data-feather="trash-2"
                                class="feather-sm fill-white"
                                ></i
                            ></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            All Rights Reserved by Ample admin. .
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customizer Panel -->
        <!-- ============================================================== -->
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
                href="index.html#pills-home"
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
                href="index.html#chat"
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
                href="index.html#pills-contact"
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
@endsection
