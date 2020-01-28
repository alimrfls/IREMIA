@extends('layouts.app')
@section('content')

    <style>
        .do-spin{
            animation-name: spin;
            animation-duration: 1000ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            /* transform: rotate(3deg); */
            /* transform: rotate(0.3rad);/ */
            /* transform: rotate(3grad); */
            /* transform: rotate(.03turn);  */
        }

        @keyframes spin {
            from {
                transform:rotate(0deg);
            }
            to {
                transform:rotate(360deg);
            }
        }

        .wordwrap {
            width: 450px;
            white-space: pre-wrap;      /* CSS3 */
            white-space: -moz-pre-wrap; /* Firefox */
            white-space: -o-pre-wrap;   /* Opera 7 */
            word-wrap: break-word;      /* IE */
        }
    </style>

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

                            <h2> Perpanjangan Izin Pada Pemakaman {{$pemakamanName->nama_pemakaman}}</h2>
                            <hr style="border: solid">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5>Cari IPTM</h5>
                                    <hr>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Nomor IPTM</div>
                                            <input type="text" id="filterNomor" name="nomor_iptm" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Nama Almarhum</div>
                                            <input type="text" id="filterNama" name="nama_almarhum" class="form-control">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary" id="cekIPTM" type="button"><i id="load-icon" class="fa fa-refresh"></i> Cek IPTM</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h5>&nbsp;</h5>
                                    <hr>
                                    <div class="dataSection">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No IPTM</th>
                                                    <th>Almarhum</th>
                                                    <th>Ahli Waris</th>
                                                    <th>Makam</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="jsonResult">
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="submitSection" hidden>
                                        <form action="/IPTM/perpanjangan/submit" method="POST" enctype="multipart/form-data" id="formPerpanjangan">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nomor IPTM</div>
                                                    <input type="text" id="nomor_iptm" name="nomor_iptm" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">No KTP Almarhum</div>
                                                    <input type="text" id="nomor_ktp_almarhum" placeholder="No KTP Almarhum" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nama Almarhum</div>
                                                    <input type="text" id="nama_almarhum" placeholder="Nama Almarhum" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <br>
                                            <h6>Surat Kehilangan (Jika ada)</h6>
                                            <hr>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">No Surat</div>
                                                        <input type="text" id="nomor_surat_kehilangan" name="nomor_surat_kehilangan" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Tanggal Surat</div>
                                                        <input type="text" id="tanggal_surat_kehilangan" name="tanggal_surat_kehilangan" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <h6>Surat Perpanjangan Baru</h6>
                                            <hr>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">No Surat <span class="field-required">*</span></div>
                                                    <input type="text" id="nomor_surat" name="nomor_surat" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Tanggal Surat <span class="field-required">*</span></div>
                                                        <input type="text" id="tanggal_surat" name="tanggal_surat" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Tahun Surat <span class="field-required">*</span></div>
                                                        <input type="text" id="tahun_surat" name="tahun_surat" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Perpanjang Hingga <span class="field-required">*</span></div>
                                                    <input type="date" name="perpanjang_hingga" placeholder="Perpanjang Hingga" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Scan IPTM Asli <span class="field-required">*</span></div>
                                                    <input name="iptm_asli" type="file" class="form-control" required>
                                                </div>
                                            </div>

                                            <div hidden>
                                                <input type="text" value="" id="iptm_id" name="iptm_id">
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-secondary" id="cancelSubmit" type="button"><i class="fa fa-times"></i> Batal</button>
                                                <button class="btn btn-success" id="SubmitAndSaveBtn" type="button"><i class="fa fa-save"></i> Simpan dan Cetak IPTM</button>
                                                <button type="button" id="ShowModalConfirm" data-toggle="modal" data-target="#ModalConfirmData" hidden></button>
                                            </div>

                                            <div class="modal fade" id="ModalConfirmData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Cetak Perpanjangan IPTM</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin akan mencetak dokumen perpanjangan ini? <br>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="text" id="operation_type" name="operation_type" value="cetak_iptm_perpanjangan" hidden>
                                                            <input type="text" id="id_pemakaman" name="id_pemakaman" value="{{$pemakamanName->id}}" hidden>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                            <button type="submit" id="confirmPrint" class="btn btn-primary">Ya, Cetak</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        <br/>
                    </div>
                @endforeach
                    @endif
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $("#cekIPTM").click(function () {
            var loadIcon = $("#load-icon");
            loadIcon.addClass("do-spin");
            $(".btn").attr("disabled", "disabled");

            setTimeout(function(){
                CheckIPTM("#filterNomor", "#filterNama");
            }, 1000);
        });

        $("#cancelSubmit").click(function(){
            $(".dataSection").removeAttr("hidden");
            $(".submitSection").attr("hidden", "hidden");
        });

        $("#SubmitAndSaveBtn").click(function(){

            var nullRequiredField = false;

            $("#formPerpanjangan").find(':input').each(function(){
                if($(this).attr("required")){
                    if($(this).val() === null || $(this).val() === undefined || $(this).val() === "" ){
                        nullRequiredField = true;
                        return false;
                    }
                }
            });

            if(nullRequiredField){
                $("#confirmPrint").click();
            }else{
                $("#ShowModalConfirm").click();
            }
//            $("#ModalConfirmData").modal("hide");
//
        });

        function CheckIPTM(noIptmField, namaAlmarhumField){
            var noIptm = $(noIptmField).val();
            var namaAlmarhum = $(namaAlmarhumField).val();

            if(noIptm === "" && namaAlmarhum === ""){
                $(".dataSection").removeAttr("hidden");
                $(".submitSection").attr("hidden", "hidden");
                $("#iptm_id").val(null);

                $("#jsonResult").html("<tr>" +
                    "<td class='text-center' colspan='5'>IPTM Tidak Ditemukan</td>" +
                    "</tr>");
            }
            else
            {
                var urlReq = "/json/iptm?noiptm=" + noIptm + "&namaAlmarhum=" + namaAlmarhum;

                $.ajax({'url': urlReq,
                    'type' : 'GET',
                    success:function(result){
                        let data = JSON.parse(result);
                        if(data.length > 0){

                            $("#jsonResult").html(function () {
                                var tRow = "";
                                for(var i=0; i<data.length; i++){
                                    tRow +=
                                        "<tr>"+
                                            "<td>"+data[i].nomor_iptm+"</td>"+
                                            "<td>"+data[i].nama_almarhum+"</td>"+
                                            "<td>"+data[i].nama_ahliwaris+"</td>"+
                                            "<td>" +
                                                "<button class='btn btn-secondary' data-toggle='modal' data-target='#detailMakam"+data[i].id+"'>Lihat Detail Makam</button>" +
                                            "</td>"+
                                            "<td>" +
                                                "<button class='btn btn-success' onclick='ProsesIPTM("+JSON.stringify(data[i])+")'>Proses</button>" +
                                            "</td>"+
                                        "</tr>";
                                }
                                return tRow;
                            });

                            $(".dataSection").removeAttr("hidden");
                            $(".submitSection").attr("hidden", "hidden");
                            $("#iptm_id").val(data[0].id);
                        }
                        else{
                            $(".dataSection").removeAttr("hidden");
                            $(".submitSection").attr("hidden", "hidden");
                            $("#iptm_id").val(null);

                            $("#jsonResult").html("<tr>" +
                                "<td class='text-center' colspan='5'>IPTM Tidak Ditemukan</td>" +
                                "</tr>");
                        }
                    }
                });
            }
            var loadIcon = $("#load-icon");
            loadIcon.removeClass("do-spin");
            $(".btn").removeAttr("disabled");
        }

        function ProsesIPTM(obj){
            console.log(obj);
            var keyLength = Object.keys(obj).length;
            var keyCollection = Object.keys(obj);

            for(var i = 0; i<keyLength; i++){
                $("#"+ keyCollection[i]).val(obj[keyCollection[i]]);
            }

            $(".dataSection").attr("hidden", "hidden");
            $(".submitSection").removeAttr("hidden");
        }
    </script>
@endsection