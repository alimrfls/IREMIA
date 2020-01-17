@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container well">
        @if(session('alert_update'))
            <div class="alert alert-success text-center">
                <br>
                <h4>{{session('alert_update')}}</h4>
            </div>
        @endif
        <div class="text-md-left">
            <div class="form-group">
                <label>NAMA LENGKAP</label>
                <input type="text" class="form-control" value="{{Auth::user()->fullname}}" disabled="disabled">
            </div>
            <div class="form-group">
                <label>ALAMAT EMAIL</label>
                <input type="text" class="form-control" value="{{Auth::user()->email}}" disabled="disabled">
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <textarea name="address" id="" cols="30" rows="10" class="form-control" disabled="disabled">{{Auth::user()->address}}</textarea>
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
            <div class="form-group">
                <label>FOTO</label>
                <br>
                <img width="200px" class="img-thumbnail" src="/images/pemakaman/{{Auth::user()->images}}" alt="profile pic" style="border-radius: 150px">
            </div>
            <div class="text-center">
                <a href="{{url('/profile/edit')}}"><button class="btn btn-info"><span class="fa fa-gears"></span> Ubah Profil </button></a>
            </div>
        </div>
    </div>
@endsection