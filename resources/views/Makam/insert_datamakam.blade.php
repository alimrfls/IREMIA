@extends('layouts.app') @section('content')

    <div class="sufee-login d-flex align-content-center flex-wrap" style="padding-top: 10px">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    @if($errors->first())
                        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-danger">Error</span> {{$errors->first()}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="/insertTumpangan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2>Pemakaman</h2>
                        <hr>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" id="nama_Almarhum" name="nama_Almarhum" placeholder="Nama Almarhum" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <p> Tanggal Wafat</p>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="date" id="tanggal_Wafat" name="tanggal_Wafat" placeholder="Tanggal Wafat" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="lokasi_Pemakaman" name="lokasi_Pemakaman" placeholder="Lokasi Pemakaman" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="blok" name="blok" placeholder="Blok" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="blad" name="blad" placeholder="Blad" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="petak" name="petak" placeholder="Petak" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="date" id="MasaBerlaku" name="MasaBerlaku" placeholder="Masa Berlaku" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="nama_Ahliwaris" name="nama_Ahliwaris" placeholder="Nama Ahliwaris" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="alamat_Ahliwaris" name="alamat_Ahliwaris" placeholder="Alamat Ahliwaris" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="RT_Ahliwaris" name="RT_Ahliwaris" placeholder="RT Ahliwaris" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="text" id="RW_Ahliwaris" name="RW_Ahliwaris" placeholder="RW Ahliwaris" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="email" id="email_Ahliwaris" name="email_Ahliwaris" placeholder="Email Ahliwaris" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="phone" id="phone_Ahliwaris" name="phone_Ahliwaris" placeholder="Phone Ahliwaris" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <p>Masa Berlaku</p>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                <input type="date" id="masa_Berlakuizin" name="masa_Berlakuizin" placeholder="Masa Berlakuizin" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Photo Makam 1</label>
                            <input name="photo_makam" type="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Photo Makam 2</label>
                            <input name="photo_makam2" type="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Photo Makam 3</label>
                            <input name="photo_makam3" type="file" class="form-control-file">
                        </div>
                        <br/>
                        <br/>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection