@extends('layouts.app')
@section('content')
    @if(count($listmakam)>0)
        @foreach($listmakam as $makams)
<div class=" tab-pane container" id="information_pemakaman" role="tabpanel" aria-labelledby="information">
    <div class="row" style="padding-top: 10px">
        <div class="col-md-6">
            <img src="/images/makamtumpangan/{{$makams->photo_makam}}" alt="photo_makam">
        </div>
        <br>

        <div class="col-md-6">
            <h1 style="font-family: 'Comic Sans MS'">
               INFORMASI MAKAM TUMPANGAN
            </h1>
            <div class="card">
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Nama Pemakaman</label></div>
                            <div class="col-12 col-md-9">
                                <p>Username</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Pemakaman</label></div>
                            <div class="col-12 col-md-9">This is a help text</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Luas Pemakaman</label></div>
                            <div class="col-12 col-md-9">Please enter a complex password</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9">asdasd</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kota</label></div>
                            <div class="col-12 col-md-9">Please enter your email</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Provinsi</label></div>
                            <div class="col-12 col-md-9">Please enter your email</div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kode Pos</label></div>
                            <div class="col-12 col-md-9">Please enter your email</div>
                        </div>
                    </form>
                    <div class="row"style="margin-top: 15px;">
                        <!-- Single Ticket Pricing Table -->
                        <div class="col-md-3">
                            <a href="/ijin_tumpangan/{{$makams->pemakamanid}}" class="btn btn-primary" type="button" >Pemesanan Makam Tumpangan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
 @endif
@endsection