@extends('layouts.user.app')
@section('header-class')
    {{"main-header-area-sticky"}}
@endsection
@section('content')

    <div class="slider_area">
        <div class="single_slider d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-50">
                            <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="color: white">Formulir Pengajuan Perpanjangan</h3>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash loans with quick approval that suit your term</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-12">
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mt-10">
                                            <input type="text" name="first_name" placeholder="First Name"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                                                   class="single-input">
                                        </div>
                                        <div class="mt-10">
                                            <input type="text" name="last_name" placeholder="Last Name"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                                   class="single-input">
                                        </div>
                                        <div class="mt-10">
                                            <input type="text" name="last_name" placeholder="Last Name"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                                   class="single-input">
                                        </div>
                                        <div class="mt-10">
                                            <input type="email" name="EMAIL" placeholder="Email address"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                                                   class="single-input">
                                        </div>
                                        <div class="input-group-icon mt-10">
                                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                            <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Address'" required class="single-input">
                                        </div>
                                        <div class="input-group-icon mt-10">
                                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                            <div class="form-select" id="default-select">
                                                <select>
                                                    <option value=" 1">City</option>
                                                    <option value="1">Dhaka</option>
                                                    <option value="1">Dilli</option>
                                                    <option value="1">Newyork</option>
                                                    <option value="1">Islamabad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group-icon mt-10">
                                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                            <div class="form-select" id="default-select">
                                                <select>
                                                    <option value=" 1">Country</option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="1">India</option>
                                                    <option value="1">England</option>
                                                    <option value="1">Srilanka</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="mt-10">
                                        <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                                                  onblur="this.placeholder = 'Message'" required></textarea>
                                        </div>
                                        <!-- For Gradient Border Use -->
                                        <!-- <div class="mt-10">
                                                    <div class="primary-input">
                                                        <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                                                        <label for="primary-input"></label>
                                                    </div>
                                                </div> -->
                                        <div class="mt-10">
                                            <input type="text" name="first_name" placeholder="Primary color"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
                                                   class="single-input-primary">
                                        </div>
                                        <div class="mt-10">
                                            <input type="text" name="first_name" placeholder="Accent color"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
                                                   class="single-input-accent">
                                        </div>
                                        <div class="mt-10">
                                            <input type="text" name="first_name" placeholder="Secondary color"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
                                                   required class="single-input-secondary">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="boxed-btn3" type="submit">Apply Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
