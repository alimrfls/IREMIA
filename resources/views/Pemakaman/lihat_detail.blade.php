@extends('layouts.app') @section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>
    @if(Auth::check())
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Informasi Pemakaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Lihat Peraturan</a>
            </li>
        </ul>


    @if(count($pemakamanumum  )>0)
    @foreach($pemakamanumum as $tpu)
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class=" tab-pane container" id="information_pemakaman" role="tabpanel" aria-labelledby="information">
                    <h1 style="font-family: 'Comic Sans MS'">
                        {{$tpu->namaPemakaman}}
                    </h1>
                    <div class="row" style="padding-top: 50px">
                        <div class="col-md-6">
                            <img src="/images/pemakaman/{{$tpu->photoPemakaman}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-detaik-tab" data-toggle="pill" href="#pills-information" role="tab" aria-controls="pills-detail" aria-selected="true">Informasi </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-penanggungjawab-tab" data-toggle="pill" href="#pills-penanggungjawab" role="tab" aria-controls="pills-penanggungjawab" aria-selected="false">Penanggung jawab </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-detaik-tab">
                                    <div class=" tab-pane container" id="detail_pemakaman" role="tabpanel" aria-labelledby="alldetail">
                                        <div class="card-header">
                                            <strong>INFORMASI DETAIL</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label class=" form-control-label">Nama pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->namaPemakaman}}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Alamat Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->alamatPemakaman}},{{$tpu->kotaPemakaman}},{{$tpu->provinsiPemakaman}},{{$tpu->kodeposPemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="textearea-input" class=" form-control-label">Email Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->emailPemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="textearea-input" class=" form-control-label">Jumlah Pemakaman :</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->jumlahPemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Luas Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->luasPemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Deskripsi Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->deskripsiPemakaman}}</p>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="row"style="margin-top: 15px;padding-left: 50px">
                                        <div class="col-md-3">
                                            <a href="/ijin_perpanjangan/{{$tpu->pemakamanid}}" class="btn btn-primary" type="button" style="float: right" >Perpanjangan Izin</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="/ijin_tumpangan/{{$tpu->pemakamanid}}" class="btn btn-primary" type="button" >Pemesanan Makam Tumpangan</a>
                                        </div>
                                    </div>
                                </div>

                                @if(count($picpemakaman)>0)
                                    @foreach($picpemakaman as $pic)
                                <div class="tab-pane fade" id="pills-penanggungjawab" role="tabpanel" aria-labelledby="pills-penanggungjawab-tab">
                                    <div class=" tab-pane container" id="penanggung_jawab" role="tabpanel" aria-labelledby="penanggung">
                                        <div class="card-header">
                                            <strong>PENANGGUNG JAWAB</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label class=" form-control-label">Nama Penanggung Jawab</label>
                                                    </div>
                                                    <br>
                                                    <div class="col col-md-3">
                                                        <p>{{$pic->NIPKepalaPemakaman}}</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                     </div>
                                </div>
                                    @endforeach
                                    @endif
                            </div>

                        </div>
                    </div>

                    <br>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class=" tab-pane container" id="lihat_peraturan" role="tabpanel" aria-labelledby="peraturan">
                    bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb
                </div>
            </div>
        </div>

    @endforeach
    @endif
    @else
        <h2>please Login First</h2>
    @endif
@endsection