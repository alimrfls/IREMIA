@extends('layouts.app') @section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap" style="padding-top: 10px">
        <div class="container">
            <!-- The Modal -->
            <div class="col-md-12">
                @if($errors->first())
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-danger">Error</span> {{$errors->first()}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(count($pemakamanname)>0)
                    @foreach($pemakamanname as $pemakamanName)
                        <div class="col-md-12">
                            <form action="/izinPerpanjangan/{{$pemakamanName->id}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <h3> IPTM Perpanjangan {{--{{$pemakamanName->namaPemakaman}}--}}</h3>
                                <hr style="border: solid">

                                <div class="card-header col-md-12">
                                    <strong>Data Ahliwaris</strong>
                                </div>
                                <br><br><br>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nama Lengkap Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="nama_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nomor KTP Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-id-badge"></i></div>
                                            <input type="text" name="nomor_ktp_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Kota Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="kota_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nomor Telp/HP Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="telepon_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>RT Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="rt_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>RW Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="rw_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Kelurahan Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="kelurahan_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Kecamatan Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="kecamatan_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Alamat Ahliwaris <label style="color: red">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <textarea name="alamat_ahliwaris" cols="30" rows="10"
                                                      class="form-control">{{old('alamat_ahliwaris')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>
                                                Hubungan Keluarga Ahliwaris dengan Almarhum/ah
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                            <input type="text" name="hubungan_ahliwaris" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body col-md-12"
                                     style="padding: .75rem 1.25rem; margin-bottom: 0; background-color: rgba(0,0,0,.03); border-bottom: 1px solid rgba(0,0,0,.125)">
                                    <strong>Data Almarhum/ah</strong>
                                </div>

                                <div class="form-group col-md-12">
                                    <br>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nama Lengkap Almarhum/ah <label style="color: red;">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-address-book"></i></div>
                                            <input type="text" name="nama_Almarhum" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Tanggal Wafat Almarhum/ah
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="date" name="tanggal_wafat" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nama Pemakaman Almarhum/ah <label style="color: red;">*</label></strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                                            <input type="text" name="lokasi_tpu" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Blok Makam Almarhum/ah
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                                            <input type="text" name="blok_makam" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>
                                                Blad Makam Almarhum/ah
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                                            <input type="text" name="blad_makam" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Petak Makam Almarhum/ah
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%  ">
                                            <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                                            <input type="text" name="petak_makam" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Masa Berlaku IPTM Almarhum/ah
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="date" name="masa_berlaku" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Perpanjangan IPTM Ke
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-expand"></i></div>
                                            <input type="number" name="jumlah_perpanjangan" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body col-md-12"
                                     style="padding: .75rem 1.25rem; margin-bottom: 0; background-color: rgba(0,0,0,.03); border-bottom: 1px solid rgba(0,0,0,.125)">
                                    <strong>Data Dokumen</strong>
                                </div>

                                <div class="form-group col-md-12">
                                    <br>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nomor IPTM
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                            <input type="text" name="nomor_iptm" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Tanggal IPTM
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="date" name="tanggal_iptm" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Nomor Surat Kehilangan Kepolisian
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                            <input type="text" name="nomor_surat_kehilangan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <strong>Tanggal Surat Kehilangan Kepolisian
                                                <label style="color: red">*</label>
                                            </strong>
                                        </div>
                                        <div class="input-group" style="width: 90%">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="date" name="tanggal_surat_kehilangan"     class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-6">
                                        <strong> Scan Surat IPTM Asli/Foto Copy
                                            <label style="color: red">*</label>
                                        </strong>
                                        <input name="file_iptm_asli" type="file" class="form-control-file">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <br>
                                    <div class="text-center">
                                        <button type="submit" id="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <script>
            document.getElementById("submit").modal("myModal");
        </script>
    </div>
@endsection
