<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
          name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, ample admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template"
        />
        <meta
          name="description"
          content="Ample is powerful and clean admin dashboard template, inpired from Google's Material Design"
        />
        <meta name="robots" content="noindex,nofollow" />
        <title>Ample Template by WrapPixel</title>
        <link
          rel="canonical"
          href="https://www.wrappixel.com/templates/ampleadmin/"
        />
        <!-- Favicon icon -->
        <link
          rel="icon"
          type="image/png"
          sizes="16x16"
          href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/favicon.png"
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
