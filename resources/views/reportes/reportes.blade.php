@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

{{-- {{dd($usuarios)}} --}}
@section('content')

<div id="main-wrapper">

    <div class="page-wrapper">
        <div class="page-breadcrumb border-bottom">
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
                    <h5 class="font-weight-medium text-uppercase mb-0">Reportes</h5>
                </div>
                <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center" >
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Reportes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reportes</li>
                        </ol>
                    </nav>

                </div>
            </div>

            <div class="page-content container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="border-bottom title-part-padding">
                          <h4 class="card-title mb-0">Line Chart</h4>
                        </div>
                        <div class="card-body">
                          <div><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="line-chart" style="display: block; width: 555px; height: 277px;" class="chartjs-render-monitor" width="555" height="277"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="border-bottom title-part-padding">
                          <h4 class="card-title mb-0">Bar Chart</h4>
                        </div>
                        <div class="card-body">
                          <div><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="bar-chart" style="display: block; width: 555px; height: 277px;" class="chartjs-render-monitor" width="555" height="277"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="border-bottom title-part-padding">
                          <h4 class="card-title mb-0">Pie Chart</h4>
                        </div>
                        <div class="card-body">
                          <div><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="pie-chart" style="display: block; width: 555px; height: 277px;" class="chartjs-render-monitor" width="555" height="277"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="border-bottom title-part-padding">
                          <h4 class="card-title mb-0">bar-chart-horizontal</h4>
                        </div>
                        <div class="card-body">
                          <div><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="bar-chart-horizontal" style="display: block; width: 555px; height: 277px;" class="chartjs-render-monitor" width="555" height="277"> </canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="border-bottom title-part-padding">
                          <h4 class="card-title mb-0">Polar Area Chart</h4>
                        </div>
                        <div class="card-body">
                          <div><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="polar-chart" style="display: block; width: 555px; height: 277px;" class="chartjs-render-monitor" width="555" height="277"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="border-bottom title-part-padding">
                          <h4 class="card-title mb-0">Radar Chart</h4>
                        </div>
                        <div class="card-body">
                          <div><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="radar-chart" style="display: block; width: 555px; height: 277px;" class="chartjs-render-monitor" width="555" height="277"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                  </div>
            </div>
        </div>

        <footer class="footer text-center">
            All Rights Reserved by Ample admin.
        </footer>

    </div>

</div>

@endsection


@section('script')
    <script src="js/reportes/reportes.js" as></script>
@endsection
