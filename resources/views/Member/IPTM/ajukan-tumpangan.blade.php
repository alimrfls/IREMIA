@extends('layouts.user.app')
@section('header-class')
    {{"main-header-area-sticky"}}
@endsection
@section('content')

    <div class="slider_area">
        <div class="single_slider d-flex align-items-center slider_bg_1" style="height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-50">
                            <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="color: white">Pengajuan Tumpangan</h3>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash loans with quick approval that suit your term</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-12">
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                            <div class="mt-10">
                                <input type="text" id="noIPTM" name="no_iptm" placeholder="Masukan Nomor IPTM Lama"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nomor IPTM'" required
                                       style="text-align: center"
                                       class="single-input-primary">
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="boxed-btn3" type="button" id="cekIPTM"><i id="load-icon" class="fa fa-refresh"></i> Cari IPTM</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="detailIPTM" style="padding-top: 150px;padding-bottom: 100px; background-color: lightgrey" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-50">
                        <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="color: white">Formulir Pengajuan Tumpangan</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash loans with quick approval that suit your term</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4" id="prefillData">
                    <div class="mt-10">
                        <label for="">Nomor IPTM Lama</label>
                        <input type="text" id="nomor_iptm" name="no_iptm" placeholder="Nomor IPTM"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor IPTM'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Nama Almarhum Lama</label>
                        <input type="text" id="nama_almarhum" name="nama_almarhum" placeholder="Nama Almarhum"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Almarhum'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Tanggal Wafat</label>
                        <input type="date" id="tanggal_wafat" name="tanggal_wafat" placeholder="Tanggal Wafat"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Wafat'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Pemakaman</label>
                        <input type="text" id="nama_pemakaman" name="nama_pemakaman" placeholder="Nama Pemakaman"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Pemakaman'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Blok</label>
                        <input type="text" id="blok" name="blok" placeholder="Blok"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Blok'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Blad</label>
                        <input type="text" id="blad" name="blad" placeholder="Blad"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Blad'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Petak</label>
                        <input type="text" id="petak" name="petak" placeholder="Petak"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Petak'" disabled
                               class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="">Masa Berlaku</label>
                        <input type="date" id="masa_berlaku" name="masa_berlaku" placeholder="Tanggal Kadaluwarsa"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Kadaluwarsa'" disabled
                               class="single-input">
                    </div>
                </div>
                <div class="col-sm-8">
                    <form id="formTumpangan" action="{{url('/IPTM/Tumpangan/submit')}}" method="post" enctype="multipart/form-data">

                        {{csrf_field()}}
                        <input type="text" id="iptm_id" name="iptm_id" hidden>

                        <div class="formStep" >
                            <div class="step" data-step="1">
                                <div class="mt-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">No Surat Kehilangan Kepolisian</label>
                                            <input type="text" name="nomor_surat_kehilangan" placeholder="No Surat Kehilangan Kepolisian"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Surat Kehilangan Kepolisian'" required
                                                   class="single-input-primary">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Tanggal Surat Kehilangan Kepolisian</label>
                                            <input type="date" name="tanggal_surat_kehilangan" placeholder="Tanggal Surat Kehilangan Kepolisian"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Surat Kehilangan Kepolisian'" required
                                                   class="single-input-primary">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-right">
                                    <button class="boxed-btn3 nextStep" type="button">Selanjutnya</button>
                                </div>
                            </div>
                            <div class="step" data-step="2">
                                <div class="mt-10">
                                    <label for="">No KTP Ahli Waris</label>
                                    <input type="text" name="nomor_ktp_ahliwaris" placeholder="No KTP Ahli Waris"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'No KTP Ahli Waris'" required
                                           class="single-input-primary">
                                </div>

                                <div class="mt-10">
                                    <label for="">Nama Ahli Waris</label>
                                    <input type="text" name="nama_ahliwaris" placeholder="Nama Ahli Waris"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ahli Waris'" required
                                           class="single-input-primary">
                                </div>

                                <div class="mt-10">
                                    <label for="">No Telepon Ahli Waris</label>
                                    <input type="text" name="telepon_ahliwaris" placeholder="Telepon Ahli Waris"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telepon Ahli Waris'" required
                                           class="single-input-primary">
                                </div>

                                <div class="mt-10">
                                    <label for="">Hubungan dengan almarhum</label>
                                    <input type="text" name="hubungan_ahliwaris" placeholder="Hubungan"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hubungan'"
                                           required class="single-input-primary">
                                </div>

                                <div class="mt-10">
                                    <label for="">Alamat</label>
                                    <textarea class="single-textarea" name="alamat_ahliwaris" placeholder="Alamat" onfocus="this.placeholder = ''"
                                              onblur="this.placeholder = 'Alamat'" required></textarea>
                                </div>

                                <div class="mt-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="">RT</label>
                                            <input type="text" name="rt_ahliwaris" placeholder="RT"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'RT'" required
                                                   class="single-input-primary">

                                        </div>
                                        <div class="col-sm-2">
                                            <label for="">RW</label>
                                            <input type="text" name="rw_ahliwaris" placeholder="RW"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'RW'" required
                                                   class="single-input-primary">
                                        </div>
                                        <div class="col-sm-8">
                                            <label for="">Kelurahan</label>
                                            <input type="text" name="kelurahan_ahliwaris" placeholder="Kelurahan"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kelurahan'"
                                                   required class="single-input-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">Kecamatan</label>
                                            <input type="text" name="kecamatan_ahliwaris" placeholder="kecamatan"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kecamatan'"
                                                   required class="single-input-primary">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Kota Administrasi</label>
                                            <input type="text" name="kota_administrasi" placeholder="Kota Administrasi"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kota Administrasi'"
                                                   required class="single-input-primary">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-right">
                                    <button class="boxed-btn3" id="SubmitAndSaveBtn" type="button">Ajukan Tumpangan</button>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="submitConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pengajuan Tumpangan Izin</h5>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Kirim permohonan tumpangan izin?</h4>
                                        <small>Pastikan anda telah mengisi formulir dengan lengkap dan benar.</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" id="submitButton" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" id="validateForm" hidden></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            CustomFormStep();

            $("#cekIPTM").click(function () {
                var loadIcon = $("#load-icon");
                loadIcon.addClass("do-spin");
                $(".btn").attr("disabled", "disabled");

                setTimeout(function(){
                    CheckIPTM("#noIPTM");
                }, 1000);
            });

            $("#cancelSubmit").click(function(){
                $(".dataSection").removeAttr("hidden");
                $(".submitSection").attr("hidden", "hidden");
            });


            $("#SubmitAndSaveBtn").click(function(){

                var nullRequiredField = false;

                $("#formTumpangan").find(':input').each(function(){
                    if($(this).attr("required")){
                        if($(this).val() === null || $(this).val() === undefined || $(this).val() === "" ){
                            nullRequiredField = true;
                            return false;
                        }
                    }
                });

                if(nullRequiredField){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#detailIPTM").offset().top
                    }, 800);
                    $("#validateForm").click();
                }else{
                    $("#submitConfirmModal").modal("show");
                }
//
            });
        });



        function CheckIPTM(noIptmField){
            var noIptm = $(noIptmField).val();

            if(noIptm === ""){
                alert("IPTM tidak ditemukan");
            }
            else
            {
                var urlReq = "/json/iptm-by-no?noiptm=" + noIptm;

                $.ajax({'url': urlReq,
                    'type' : 'GET',
                    success:function(result){
                        let data = JSON.parse(result);
                        if(data.length > 0){
                            alert("IPTM ditemukan");

                            $("#prefillData").find(':input').each(function(){
                                var id = this.id;
                                $(this).val(data[0][id]);
                            });
                            $("#iptm_id").val(data[0]["id"]);

                            $("#detailIPTM").show();
                            $([document.documentElement, document.body]).animate({
                                scrollTop: $("#detailIPTM").offset().top
                            }, 800);
                        }
                        else{
                            alert("IPTM tidak ditemukan");
                        }
                    }
                });
            }
            var loadIcon = $("#load-icon");
            loadIcon.removeClass("do-spin");
            $(".btn").removeAttr("disabled");
        }

        function CustomFormStep(){
            var mainForm = $(".formStep");
            mainForm.children(".step").each(function () {
                if($(this).attr("data-step") !== "1"){
                    $(this).hide();
                }else{
                    $(this).addClass("activeStep");
                }
            });

            $(".nextStep").click(function(){


                var nullRequiredField = false;

                mainForm.children(".activeStep").find(':input').each(function(){
                    if($(this).attr("required")){
                        if($(this).val() === null || $(this).val() === undefined || $(this).val() === "" ){
                            nullRequiredField = true;
                            return false;
                        }
                    }
                });

                if(nullRequiredField){
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#detailIPTM").offset().top
                    }, 800);
                    $("#validateForm").click();
                }else{
                    var currentStep = mainForm.children(".activeStep").attr("data-step");
                    var nextStep = parseInt(currentStep)+1;
                    console.log(nextStep);
                    mainForm.children(".activeStep").addClass("fadeOutDown animated");

                    setTimeout(function(){
                        mainForm.children(".activeStep").hide();
                        mainForm.children(".activeStep").removeClass("activeStep");

                        mainForm.children(".step").each(function(){
                            if($(this).attr("data-step") === nextStep.toString()){
                                $(this).show();
                                $(this).addClass("fadeInDown animated");
                            }
                        });
                    },1000)
                }

            });

            $(".prevStep").click(function(){

            });
        }

    </script>
@endsection

