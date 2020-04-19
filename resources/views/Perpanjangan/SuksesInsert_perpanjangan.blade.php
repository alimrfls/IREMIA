@extends('layouts.user.app')
@section('header-class')
    {{"main-header-area-sticky"}}
@endsection
@section('content')

    <style>
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        /* Add some content at the bottom of the video/page */
    </style>

    <video autoplay loop id="myVideo">
        <source src="/videos/burial_dance.mp4" type="video/mp4">
    </video>

    <!-- Optional: some overlay text to describe the video -->
    <div class="container" style="margin-top: 200px; margin-bottom: 150px">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-50">
                    <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                    <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="color: white">Submit Data Berhasil</h3>
                    <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="color: white">Nomor surat permohonan anda adalah</h5>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-12">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                    <div class="mt-10 text-center">
                        <h2 style="color: white">{{$data[0]->nomor_surat}}</h2>
                        <br>
                        <h5 style="color: white;">Permohonan anda akan segera diproses. Untuk melihat status permohonan harap
                            <a href="/IPTM/pesanan">KLIK DISINI</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="slider_area" hidden>
        <div class="single_slider d-flex align-items-center slider_bg_1" style="height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-50">
                            <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="color: white">Submit Data Berhasil</h3>
                            <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="color: white">Nomor surat permohonan anda adalah</h5>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-12">
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <div class="mt-10 text-center">
                                <h2 style="color: white">{{$data[0]->nomor_surat}}</h2>
                                <br>
                                <h5 style="color: white;">Permohonan anda akan segera diproses. Untuk melihat status permohonan harap
                                    <a href="/IPTM/pesanan">KLIK DISINI</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

