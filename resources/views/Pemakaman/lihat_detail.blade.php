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

        @if(count($pemakamanumum)>0)
            @foreach($pemakamanumum as $tpu)
                <div class=" tab-pane container" id="information_pemakaman" role="tabpanel" aria-labelledby="information">
                    <h1 style="padding-top: 15px; padding-bottom: 20px">
                        {{$tpu->nama_pemakaman}}
                    </h1>
                    <div class="row">
                        <div class="col-md-6">
                            @if($tpu->photo_pemakaman != "")
                                <img src="/images/pemakaman/{{$tpu->photo_pemakaman}}" width="100%" alt="">
                            @else
                                <img src="/images/no-image-available.jpg" width="100%" alt="">
                            @endif
                        </div>
                        <div class="col-md-6">
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
                                                        <label for="text-input" class=" form-control-label">Nama Penanggung Jawab</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        @if(count($picpemakaman)>0)
                                                            @foreach($picpemakaman as $pic)
                                                                <p>{{$pic->fullname}} <br>NIP: {{$pic->NIP_kepala_pemakaman}}</p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label class=" form-control-label">Nama pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->nama_pemakaman}}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Alamat Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->alamat_pemakaman}},{{$tpu->kota_pemakaman}},{{$tpu->provinsi_pemakaman}},{{$tpu->kodepos_pemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="textearea-input" class=" form-control-label">Email Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->email_pemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="textearea-input" class=" form-control-label">Jumlah Pemakaman :</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->jumlah_pemakaman}}</p>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Luas Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->luas_pemakaman}}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6">
                                                        <label for="text-input" class=" form-control-label">Deskripsi Pemakaman</label>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <p>{{$tpu->deskripsi_pemakaman}}</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right" style="margin-top: 15px;">
                                <a href="/IPTM/perpanjangan">
                                    <button class="btn btn-info" type="button" >Jadwal Pemakaman</button>
                                </a>

                                <a href="/IPTM/tumpangan">
                                    <button class="btn btn-primary" type="button" >Edit Informasi</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        @endif
    @else
        <h2>please Login First</h2>
    @endif
@endsection