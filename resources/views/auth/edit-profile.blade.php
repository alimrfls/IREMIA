@extends('layouts.app')
@section('content')
    <br>
    <div class="container well">
        @if(session('alert_update'))
            <div class="alert alert-success text-center">
                <br>
                <h4>{{session('alert_update')}}</h4>
            </div>
        @endif
            <br>
        <div class="text-md-left">
            <form action="{{url('/profile/edit')}}" method="post">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            @if(Auth::user()->images != "")
                                <img src="/images/profile/{{Auth::user()->images}}" width="100%" alt="">
                            @else
                                <img src="/images/no-image-available.jpg" width="100%" alt="">
                            @endif
                            <input type="file" id="images" name="images" class="form-control" >
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>NAMA LENGKAP</label>
                            <input type="text" class="form-control" value="{{Auth::user()->fullname}}">
                        </div>
                        <div class="form-group">
                            <label>ALAMAT EMAIL</label>
                            <input type="text" class="form-control" value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group">
                            <label>ALAMAT</label>
                            <textarea name="address" id="" cols="30" rows="5" class="form-control">{{Auth::user()->address}}</textarea>
                        </div>
                        {{--<div class="form-group">
                            <label>JENIS KELAMIN</label>
                            <div class="form-check-inline form-check" style="width: 100%">
                                <label for="gender1" class="form-check-label ">
                                    <input type="radio" id="gender1" name="gender" value="male" class="form-check-input">Pria &nbsp;
                                </label>
                                <label for="gender2" class="form-check-label ">
                                    <input type="radio" id="gender2" name="gender" value="female" class="form-check-input">Wanita
                                </label>
                            </div>
                        </div>--}}
                        <br>
                    </div>
                    <div class="col-sm-12 text-center">
                        {{--<a href="{{url('/editProfile')}}"><button class="btn btn-info"><span class="fa fa-gears"></span> Ubah Profil </button></a>--}}
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-save"></i> Simpan</button>
                        <a href="/profile">
                            <button type="button" class="btn btn-danger">Batal</button>
                        </a>
                        <br><br><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection