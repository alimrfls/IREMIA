<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IREMIA</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="/images/logo2.png" alt="Logo"></a>
        </div>
        @include('partials.menu')
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    {{--<button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>--}}

                    @if(Auth::check())
                        @php($message_pemesanan = DB::table('nomorpemesanan')
                             ->where([['Registrasi_Status','=','Waiting']])
                             ->get())
                        @php($waiting_list = count($message_pemesanan))
                        <div class="dropdown for-message">
                            @if($waiting_list > 0)
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-email"></i>
                                    <span class="count bg-primary">{{$waiting_list}}</span>
                                </button>

                                <div class="dropdown-menu" aria-labelledby="message">

                                    <p class="red">Anda memiliki {{$waiting_list}} pesan masuk</p>

                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="message media-body">
                                        <span class="name float-left"></span>
                                    </span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-5">
                @guest
                    <div class="user-area dropdown float-right">
                        <a href="{{ route('login') }}">Masuk</a>
                    </div>
                @else
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="/profile"><i class="fa fa-user"></i> Profil </a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifikasi <span
                                        class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Pengaturan </a>

                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </header><!-- /header -->
    <!-- Header-->

    {{-- <div class="breadcrumbs">
         <div class="col-sm-4">
             <div class="page-header float-left">
                 <div class="page-title">
                     <h1>Dashboard</h1>
                 </div>
             </div>
         </div>
         <div class="col-sm-8">
             <div class="page-header float-right">
                 <div class="page-title">
                     <ol class="breadcrumb text-right">
                         <li class="active">Dashboard</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>--}}

    @yield('content')
</div><!-- /#right-panel -->

<!-- Right Panel -->
<script src="/vendors/jquery/dist/jquery.min.js"></script>
<script src="/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

<script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/js/init-scripts/data-table/datatables-init.js"></script>
<script src="/assets/js/init-scripts/chart-js/chartjs-init.js"></script>


@yield('script')

<script src="/assets/js/main.js"></script>
<script src="/assets/js/dashboard.js"></script>
<script src="/assets/js/widgets.js"></script>

</body>

</html>