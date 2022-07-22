
 <div class="page-wrapper">

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- -------------------------------------------------------------- -->
    <!-- Container fluid  -->
    <!-- -------------------------------------------------------------- -->

    <div class="page-breadcrumb border-bottom">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
            <h5 class="font-weight-medium text-uppercase mb-0">Agenda</h5>
          </div>

        </div>
      </div>
    <div class="container-fluid page-content" >
      <div class="row">
        <div class="col-md-12">
          <div class="card" >
             {{-- <div class="">
              <div class="row"> --}}
                {{-- <div class="col-lg-3 border-end pe-0"> --}}
                  {{-- <div class="card-body border-bottom">
                    <h4 class="card-title mt-2">Drag & Drop Event</h4>
                  </div> --}}
                  {{-- <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div id="calendar-events" class="">

                          <div
                            class="calendar-events mb-3"
                            data-class="bg-success"
                          >
                            <i class="fa fa-circle text-success me-2"></i>
                            Event Two
                          </div>
                          <div
                            class="calendar-events mb-3"
                            data-class="bg-danger"
                          >
                            <i class="fa fa-circle text-danger me-2"></i
                            >Event Three
                          </div>
                          <div
                            class="calendar-events mb-3"
                            data-class="bg-warning"
                          >
                            <i class="fa fa-circle text-warning me-2"></i
                            >Event Four
                          </div>
                        </div>
                        <!-- checkbox -->
                        <div class="form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="drop-remove"
                          />
                          <label class="form-check-label" for="drop-remove"
                            >Remove after drop</label
                          >
                        </div>
                        <a
                          href="app-calendar.html#"
                          data-bs-toggle="modal"
                          data-bs-target="#add-new-event"
                          class="
                            btn
                            mt-3
                            btn-info
                            d-block
                            w-100
                            waves-effect waves-light
                          "
                        >
                          <i class="ti-plus"></i> Add New Event
                        </a>
                      </div>
                    </div>
                  </div> --}}
                {{-- </div> --}}
                <div class="col-lg-12">
                  <div class="card-body calender-sidebar" >
                    <div id="calendar"></div>
                  </div>
                </div>
              {{-- </div>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- BEGIN MODAL -->
      {{-- <div class="modal" id="my-event">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
              <h4 class="modal-title"><strong>Add Event</strong></h4>
              <button
                type="button"
                class="btn-close close-dialog"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary close-dialog waves-effect"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                Close
              </button>
              <button
                type="button"
                class="btn btn-success save-event waves-effect waves-light"
              >
                Create event
              </button>
              <button
                type="button"
                class="btn btn-danger delete-event waves-effect waves-light"
                data-bs-dismiss="modal"
              >
                Delete
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="modal-backdrop bckdrop hide"></div> --}}
      <!-- Modal Add Category -->
      {{-- <div class="modal none-border" id="add-new-event">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
              <h4 class="modal-title"><strong>Add</strong> a category</h4>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <label class="control-label">Category Name</label>
                    <input
                      class="form-control form-white"
                      placeholder="Enter name"
                      type="text"
                      name="category-name"
                    />
                  </div>
                  <div class="col-md-6">
                    <label class="control-label"
                      >Choose Category Color</label
                    >
                    <select
                      class="form-select form-white"
                      data-placeholder="Choose a color..."
                      name="category-color"
                    >
                      <option value="success">Success</option>
                      <option value="danger">Danger</option>
                      <option value="info">Info</option>
                      <option value="primary">Primary</option>
                      <option value="warning">Warning</option>
                      <option value="inverse">Inverse</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="
                  btn btn-danger
                  waves-effect waves-light
                  save-category
                "
                data-bs-dismiss="modal"
              >
                Save
              </button>
              <button
                type="button"
                class="btn btn-secondary waves-effect"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- END MODAL -->
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
  <!-- -------
