@extends('layouts.user.app')
@section('header-class')
    {{"main-header-area-sticky"}}
@endsection
@section('content')
    <div class="service_area" style="padding-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Pilih Jenis Perizinan</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Ajukan permohonan perpanjangan, pemindahan, atau tumpangan izin penggunaan tanah makam</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="/images/assets/svg_icon/service_1.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <h3>Perpanjangan</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow - $350 over 3 months </li>
                                <li> Interest rate - 292% pa fixed</li>
                                <li>Total amount payable - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                            <div class="apply_btn">
                                <a href="/IPTM/perpanjangan"> <button class="boxed-btn3" >Ajukan Sekarang</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="/images/assets/svg_icon/service_2.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <h3>Pemindahan</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow - $350 over 3 months </li>
                                <li> Interest rate - 292% pa fixed</li>
                                <li>Total amount payable - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                            <div class="apply_btn">
                                <a href="/IPTM/pemindahan"> <button class="boxed-btn3" >Ajukan Sekarang</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="/images/assets/svg_icon/service_3.png" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <h3>Tumpangan</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow - $350 over 3 months </li>
                                <li> Interest rate - 292% pa fixed</li>
                                <li>Total amount payable - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                            <div class="apply_btn">
                                <a href="/IPTM/tumpangan"> <button class="boxed-btn3" >Ajukan Sekarang</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection