@extends('layouts.app') @section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap" style="padding-top: 10px">
        <div class="container">
            <div class="col-md-12">
                @if($errors->first())
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-danger">Error</span> {{$errors->first()}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col-md-12">
                    <form action="/pendaftaranPemakaman" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4> FORM REGISTRASI PEMAKAMAN DAN ADMIN PEMAKAMAN</h4>
                        <hr style="border: solid">
                        <div class="col-md-6">
                            <strong>INFORMASI PEMAKAMAN</strong>
                            <hr style="border: solid;width: 100%">
                            <div class="form-group">
                                <label>Nama Pemakaman</label>
                                <input name="namaPemakaman" type="text" class="form-control"
                                       placeholder="Nama Pemakaman" value="{{old('namaPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat Pemakaman</label>
                                <textarea name="alamatPemakaman" placeholder=""
                                          class="form-control">{{old('alamatPemakaman')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Kota Pemakaman</label>
                                <input name="kotaPemakaman" placeholder="Kota Pemakaman" class="form-control"
                                       value="{{old('kotaPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Provinsi Pemakaman</label>
                                <input name="provinsiPemakaman" placeholder="Provinsi Pemakaman" class="form-control"
                                       value="{{old('provinsiPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Kodepos Pemakaman</label>
                                <input name="kodeposPemakaman" placeholder="Kode Pos" class="form-control"
                                       value="{{old('kodeposPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Email Pemakaman</label>
                                <textarea name="emailPemakaman" placeholder=""
                                          class="form-control">{{old('emailPemakaman')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Makam</label>
                                <input name="jumlahPemakaman" type="number" placeholder="Jumlah Pemakaman"
                                       class="form-control" value="{{old('jumlahPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Luas Pemakaman</label>
                                <input name="luasPemakaman" type="number" placeholder="" class="form-control"
                                       value="{{old('luasPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Pemakaman</label>
                                <textarea name="deskripsiPemakaman" id="" cols="30" rows="10"
                                          class="form-control">{{old('deskripsiPemakaman')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Photo pemakaman</label>
                                <input name="photoPemakaman" type="file" class="form-control-file">
                            </div>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-md-6" style="margin-right: 0px">
                            <strong>CONTACT PEMAKAMAN</strong>
                            <hr style="border: solid;width: 100%">
                            <div class="form-group">
                                <label>Full name</label>
                                <input name="fullname" type="text" class="form-control" placeholder="User Name"
                                       value="{{old('fullname')}}">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input name="email" type="email" class="form-control" placeholder="Email"
                                       value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirmation Password</label>
                                <input name="confirmation_password" type="password" class="form-control"
                                       placeholder="Password Confirmation">
                            </div>
                            <div class="form-group">
                                <label>Nama Kepala Pemakaman</label>
                                <input name="KepalaPemakaman" type="text" class="form-control"
                                       placeholder=" Name Kepala Pemakaman" value="{{old('KepalaPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>NIP Kepala Pemakaman</label>
                                <input name="NIPKepalaPemakaman" type="text" class="form-control"
                                       placeholder=" NIP Kepala Pemakaman " value="{{old('NIPKepalaPemakaman')}}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="" cols="30" rows="10"
                                          class="form-control">{{old('address')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="form-check-inline form-check" style="width: 100%">
                                    <label for="gender1" class="form-check-label ">
                                        <input type="radio" id="gender1" name="gender" value="male"
                                               class="form-check-input">Male &nbsp;
                                    </label>
                                    <label for="gender2" class="form-check-label ">
                                        <input type="radio" id="gender2" name="gender" value="female"
                                               class="form-check-input">Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input name="images" type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="float: right">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection