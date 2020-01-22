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
                @if(count($cetakPemakamanName)>0)
                        @foreach($cetakPemakamanName as $pemakamanName)
                    <div class="col-md-12">
                        <form action="/IPTM/perpanjangan/submit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h2> Perpanjangan Ijin Pada Pemakaman {{$pemakamanName->namaPemakaman}}</h2>
                            <hr style="border: solid">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="NoKtp_ahliwaris" name="NoKtp_ahliwaris" placeholder="NoKtp Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="nomorIPTM" name="nomorIPTM" placeholder="Nomor IPTM" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <p>Tanggal IPTM</p>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="date" id="tanggalIPTM" name="tanggalIPTM" placeholder="Tanggal IPTM" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="Nomor_surat_kehilangan" name="Nomor_surat_kehilangan" placeholder="No Kehilangan Kepolisian" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <p>Tanggal Kehilangan Kepolisian</p>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="date" id="Tanggal_surat_kehilangan" name="Tanggal_surat_kehilangan" placeholder="Tanggal Kehilangan Kepolisian" class="form-control">
                                    </div>
                                </div>
                                <strong>Informasi Ahli Waris</strong>
                                <hr style="border: solid">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="Nama_Ahliwaris" name="Nama_Ahliwaris" placeholder="Nama Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="AlamatAhliwaris" name="AlamatAhliwaris" placeholder="Alamat Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="RTAhliwaris" name="RTAhliwaris" placeholder="RT Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="RWAhliwaris" name="RWAhliwaris" placeholder="RW Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="KelurahanAhliwaris" name="KelurahanAhliwaris" placeholder="Kelurahan Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="KecamatanAhliwaris" name="KecamatanAhliwaris" placeholder="Kecamatan Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="KotaAhliwaris" name="KotaAhliwaris" placeholder="Kota Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="phone" id="PhoneAhliwaris" name="PhoneAhliwaris" placeholder="Phone Ahliwaris" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="HubunganAhliwaris" name="HubunganAhliwaris" placeholder=" Hubungan AhliWaris" class="form-control">
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>

                            <div class="col-md-6">
                                <strong>Informasi Petak makam dan almarhum</strong>
                                <hr style="border: solid">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="LokasiTPU" name="LokasiTPU" placeholder="Lokasi TPU" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="NamaAlmarhum" name="NamaAlmarhum" placeholder="Nama Almarhum Lama" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <p>Tanggal Wafat</p>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="date" id="tanggalwafat" name="tanggalwafat" placeholder="Tanggal Wafat" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="Blok" name="Blok" placeholder="Blok" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="Blad" name="Blad" placeholder="Blad" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="text" id="Petak" name="Petak" placeholder="Petak" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <p>Masa Berlaku</p>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="date" id="Masa_berlaku" name="Masa_berlaku" placeholder="Masa Berlaku" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Scan Surat IPTM Asli/Foto Copy</label>
                                    <input name="fileIPTM_asli" type="file" class="form-control-file">
                                </div>

                            </div>
                            <br/>
                            <br/>
                            <button type="button" id="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" data-toggle="modal" data-target="#ModalConfirmData" style="float: right">Submit</button>

                            <div class="modal fade" id="ModalConfirmData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Cetak Dokumen</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin akan mencetak dokumen ini? <br>
                                            Pastikan data yang anda isi telah sesuai!
                                        </div>
                                        <div class="modal-footer">
                                            <input type="text" id="operation_type" name="operation_type" value="cetak_iptm_perpanjangan" hidden>
                                            <input type="text" id="id_pemakaman" name="id_pemakaman" value="{{$pemakamanName->pemakamanid}}" hidden>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                            <button type="submit" class="btn btn-primary">Ya, Cetak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
                    @endif
            </div>
        </div>
    </div>

@endsection