@extends('layouts.app')
@extends('layouts.head')
@extends('layouts.preloader')
@extends('layouts.scripts')
@extends('layouts.topbar')
@extends('layouts.lefsidebar')

@section('content')




        <div class="page-wrapper">

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
                    <li class="breadcrumb-item"><a>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Dashboard
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>


        </div>

{{--
        <div class="d-flex justify-content-center" style="margin-top:100px">


            <table style="text-align:center;">
                    <tr>
                        <td><img src="../../assets/images/logos/logo.png" width= 500px height=100px/></td>
                    </tr>
                    <tr>
                        <td><strong>Bienvenidos a Bitacora ARCA</strong></td>
                      </tr>

                    <tr>
                        <td><strong>Elige una opción del menu para comenzar</strong></td>
                      </tr>

                </table>

        </div> --}}


        <div id="agenda">
            @include('agenda.agenda')
        </div>

@endsection


@section('script')
<script src="../../dist/js/pages/calendar/cal-init.js"></script>
@endsection


