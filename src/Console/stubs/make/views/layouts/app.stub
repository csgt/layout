<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="{{config('APP_COMPANY')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
    @yield('css')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
@php
    $userName = (Auth::check())?Auth::user()->name:'';
@endphp
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" class="brand-link">
                <img src="https://via.placeholder.com/150x150" alt="{{config('app.name')}}" class="brand-image elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{config('app.name')}}</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <span class="fa-stack text-primary">
                            <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
                            <i class="fas fa-user fa-stack-1x"></i>
                        </span>
                        <!-- <img src="https://via.placeholder.com/160x160" class="img-circle elevation-2" alt="Usuario"> -->
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{$userName}}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        {!! session()->get('menu') !!}
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('titulo')</h1>
                        </div>
                        <div class="col-sm-6">
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                @yield('content')
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; {{date('Y')==2018?'2018':'2018-' . date('Y')}} <a href="{{env('APP_COMPANY_URL')}}">{{env('APP_COMPANY')}}</a>.</strong>
            Todos los derechos reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Versión</b> {{ENV('APP_VERSION')}}
            </div>
        </footer>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
