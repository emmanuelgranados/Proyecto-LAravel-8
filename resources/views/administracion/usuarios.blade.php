@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

@section('content')

<div id="main-wrapper">

    <div class="page-wrapper">
      <div class="page-breadcrumb border-bottom">
        <div class="row">
          <div
            class="
              col-lg-3 col-md-4 col-xs-12
              justify-content-start
              d-flex
              align-items-center
            "
          >
            <h5 class="font-weight-medium text-uppercase mb-0">Usuarios</h5>
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
                <li class="breadcrumb-item"><a href="index.html">Administración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
              </ol>
            </nav>
            <button class="btn btn-success text-white ms-3 d-none d-md-block"><i class="mdi mdi-account-plus"></i> Nuevo usuario </button>
          </div>
        </div>
      </div>

      <div class="page-content container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Lista de usuarios</h5>
              </div>
              <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead class="table-light">
                    <tr>
                      <th
                        scope="col"
                        class="border-0 font-weight-medium ps-4"
                      >
                        #
                      </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        Name
                      </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        Occupation
                      </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        Email
                      </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        Added
                      </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        Category
                      </th>
                      <th scope="col" class="border-0 font-weight-medium">
                        Manage
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ps-4">1</td>
                      <td>
                        <div class="d-flex align-items-start">
                          <img
                            src="../../assets/images/users/1.jpg"
                            class="rounded-circle"
                            width="35"
                          />
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">
                              Daniel Kristeen
                            </h5>
                            <span class="text-muted"
                              >Texas, Unitedd states</span
                            >
                          </div>
                        </div>
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
                        <span>15 Mar 1988</span><br />
                        <span>10: 55 AM</span>
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
                        <div class="d-flex align-items-start">
                          <img
                            src="../../assets/images/users/2.jpg"
                            class="rounded-circle"
                            width="35"
                          />
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">
                              Emma Smith
                            </h5>
                            <span class="text-muted"
                              >Texas, Unitedd states</span
                            >
                          </div>
                        </div>
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
                        <span>15 Mar 1855</span><br />
                        <span>10: 00 AM</span>
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
                        <div class="d-flex align-items-start">
                          <img
                            src="../../assets/images/users/3.jpg"
                            class="rounded-circle"
                            width="35"
                          />
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">
                              Olivia Johnson
                            </h5>
                            <span class="text-muted"
                              >Texas, Unitedd states</span
                            >
                          </div>
                        </div>
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
                        <span>17 Aug 1988</span><br />
                        <span>12: 55 AM</span>
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
                        <div class="d-flex align-items-start">
                          <img
                            src="../../assets/images/users/4.jpg"
                            class="rounded-circle"
                            width="35"
                          />
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">
                              Isabella Williams
                            </h5>
                            <span class="text-muted"
                              >Texas, Unitedd states</span
                            >
                          </div>
                        </div>
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
                        <span>26 Mar 1999</span><br />
                        <span>10: 55 AM</span>
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
                        <div class="d-flex align-items-start">
                          <img
                            src="../../assets/images/users/5.jpg"
                            class="rounded-circle"
                            width="35"
                          />
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">
                              Sophia Jones
                            </h5>
                            <span class="text-muted"
                              >Texas, Unitedd states</span
                            >
                          </div>
                        </div>
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
                        <span>16 Aug 2001</span><br />
                        <span>10: 55 AM</span>
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
                        <div class="d-flex align-items-start">
                          <img
                            src="../../assets/images/users/6.jpg"
                            class="rounded-circle"
                            width="35"
                          />
                          <div class="ms-2">
                            <h5 class="font-weight-medium mb-0">
                              Charlotte Brown
                            </h5>
                            <span class="text-muted"
                              >Texas, Unitedd states</span
                            >
                          </div>
                        </div>
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
                        <span>15 Mar 1988</span><br />
                        <span>10: 55 AM</span>
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

      <footer class="footer text-center">
        All Rights Reserved by Ample admin.
      </footer>

    </div>

</div>

@endsection
