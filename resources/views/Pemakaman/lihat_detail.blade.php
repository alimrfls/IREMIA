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
            @php( $tpu = $pemakamanumum[0])

            <div class=" tab-pane container" id="information_pemakaman" role="tabpanel" aria-labelledby="information">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-detaik-tab">
                        <div class=" tab-pane container" id="detail_pemakaman" role="tabpanel" aria-labelledby="alldetail">
                            <div class="card-header">
                                <strong>INFORMASI DETAIL {{strtoupper($tpu->nama_pemakaman)}}</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="row">
                                    <div class="col-md-4">
                                        @if($tpu->photo_pemakaman != "")
                                            <img src="/images/pemakaman/{{$tpu->photo_pemakaman}}" width="100%" alt="">
                                        @else
                                            <img src="/images/no-image-available.jpg" width="100%" alt="">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="text-input" class=" form-control-label">Nama Penanggung Jawab</label>
                                                </div>
                                                <div class="col col-md-6">
                                                    <p>{{$tpu->fullname}} <br>NIP: {{$tpu->NIP_kepala_pemakaman}}</p>
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
                    </div>
                </div>
                <div class="text-right" style="margin-top: 15px;">
                    <button class="btn btn-primary" type="button" data-target="#EditPemakamanModal" data-toggle="modal">Edit Informasi</button>

                    <div class="modal fade" id="EditPemakamanModal" tabindex="-1" role="dialog" aria-labelledby="EditPemakamanModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditPemakamanModalLabel">Edit Informasi Pemakaman</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/pemakaman/edit/{{$tpu->pemakaman_id}}" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-4">
                                                @if($tpu->photo_pemakaman != "")
                                                    <img src="/images/pemakaman/{{$tpu->photo_pemakaman}}" width="100%" alt="">
                                                @else
                                                    <img src="/images/no-image-available.jpg" width="100%" alt="">
                                                @endif
                                                    <input type="file" name="photo_pemakaman" class="form-control" >
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nama Pemakaman</div>
                                                        <input type="text" value="{{$tpu->nama_pemakaman}}" id="nama_pemakaman" name="nama_pemakaman" placeholder="" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Email Pemakaman</div>
                                                        <input type="email" value="{{$tpu->email_pemakaman}}" id="email_pemakaman" name="email_pemakaman" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Kapasitas Pemakaman</div>
                                                        <input type="number" value="{{$tpu->jumlah_pemakaman}}" id="jumlah_pemakaman" name="jumlah_pemakaman" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Luas Pemakaman</div>
                                                        <input type="number" value="{{$tpu->luas_pemakaman}}" id="luas_pemakaman" name="luas_pemakaman" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Alamat Pemakaman</div>
                                                        <textarea name="alamat_pemakaman" id="alamat_pemakaman" class="form-control" rows="3">{{$tpu->alamat_pemakaman}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Deskripsi Pemakaman</div>
                                                        <textarea name="deskripsi_pemakaman" id="deskripsi_pemakaman" class="form-control" rows="3">{{$tpu->deskripsi_pemakaman}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <h2>please Login First</h2>
    @endif
@endsection