<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('head')
    </head>
    <body>
        @yield('preloader')
        <div id="main-wrapper">

            @yield('topbar')
            @yield('lefsidebar')
            @yield('content')
            @yield('scripts')
        </div>
    </body>
</html>
