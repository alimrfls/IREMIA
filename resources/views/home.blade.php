@extends('layouts.app') @section('content')

    <div class="content mt-3">
        @if(Auth::check()) @if(Auth::user()->role=='admin_tpu')
            <div class="col-md-12">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light">Jumlah Makam</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart1"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light">Jumlah Pesanan</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart2"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light">Jumlah Pesanan Hari ini</p>

                        </div>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light"></p>

                            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                <canvas id="widgetChart4"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
                <!-- /# column -->
            </div>
        @elseif(Auth::user()->role=='admin_dinas')
            <div class="col-md-12">
                <div class="col-sm-12 col-lg-6">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-light">Jumlah Pemakaman</p>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>


                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart1"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">Doughut Chart </h4>
                            <canvas id="doughutChart"></canvas>
                        </div>
                    </div>
                </div><!-- /# column -->

                <!--/.col-->
                <div class="col-lg-6">

                </div>
                <!-- /# column -->
            </div>
        @else
            <div class="col-md-12">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light">Members online</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart1"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light">Members online</p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart2"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.col-->

                <!--/.col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <p class="text-light">Members online</p>

                            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                <canvas id="widgetChart4"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
                <!-- /# column -->
            </div>
        @endif @else
            <hr style="border: solid">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="card-header">
                        <strong>Tata Cara Pemesanan</strong> pemakaman
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    {{--<img src="/images/pemakaman/1602.jpg" alt="gfriend">--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-header">
                        <strong>Persyaratan</strong> pemakaman
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{--<div class="row form-group">
                                <div class="col col-md-12">
                                    <label class=" form-control-label">Nama pemakaman</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label class=" form-control-label">Nama pemakaman</label>
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label class=" form-control-label">Nama pemakaman</label>
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label class=" form-control-label">Nama pemakaman</label>
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label class=" form-control-label">Nama pemaasdasdasdkaman</label>
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label class=" form-control-label">Nama pemakaman</label>
                                </div>
                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
    @endif
    <!--/.col-->

    </div>
    <!-- .content -->

@endsection @section('script')

    <script>
        $(function() {
            console.log('Home')
        });
    </script>
@endsection