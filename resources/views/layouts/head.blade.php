
@section('head')

<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow" />
    <title>ARCA Despacho Juridico y Contable</title>
    {{-- <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/ampleadmin/"
    /> --}}
    <!-- Favicon icon -->
    {{-- <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/favicon.png"
    /> --}}

      <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/logos/logo2.png"
    />
    <link
      rel="stylesheet"
      href="{{url('assets/libs/apexcharts/dist/apexcharts.css')}}"
    />
    <!-- Custom CSS -->
    <link
      href="../../assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="../../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <!-- needed css -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>

    <link
      href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/libs/select2/dist/css/select2.min.css"
    />
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />


     <!-- This Page CSS -->
     <link  rel="stylesheet"  type="text/css"   href="../../assets/libs/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css"/>
@endsection
