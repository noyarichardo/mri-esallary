<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8"/>
    <title>MRI Sallary System</title>
    <meta name="description" content="Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups" />
    <meta name="keywords" content="Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups" />
    <meta name="generator" content="DANGO System" />
    <meta name="robots" content="index, follow" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.ico')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Style-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/style.css?v=2.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/skin.css?v=2.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/responsive.css?v=2.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/side-menu.css?v=2.1')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/6-beta4/css/tempus-dominus.min.css" integrity="sha512-MAE2fieZOXaN7hawt+GziEfza/z8IyG2Xbt2Aw68NrTPzHBzOF66A0/Vr5PU+MgFs1H4/uWH6AbANhuxZT03Hw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="wrap_body main-body leftmenu">

    @include('components.side-menu')

    @include('layouts.header')

    @yield('content')
    <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>


    @include('layouts.footer')



    {{-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('js/skin.js')}}"></script>

    <script src="{{asset('js/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('js/plugins/sidemenu/sidemenu.js')}}"></script>
    <script src="{{asset('js/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('js/plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('js/3rd/sticky.js')}}"></script>
    {{-- <script src="{{asset('js/3rd/custom.js')}}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/6-beta4/js/tempus-dominus.js" integrity="sha512-sVBWs4OpF/NBgL3op5qtx2jjGr5MOC7l2T537+iQ9qbekDbXMSDOkBGHiTBaF9904KOxEvNwr6ABARhoaAeW/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @yield('js')

</body>
</html>
