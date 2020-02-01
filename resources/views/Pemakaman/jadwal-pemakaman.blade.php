@extends('layouts.app') @section('content')

    <div class="">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-sm-6" style="padding-top: 10px">
                                <strong class="card-title">Jadwal Pemakaman</strong>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#tambahJadwalPemakaman"><i class="fa fa-plus"></i> Tambahkan Jadwal Baru</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Almarhum</th>
                                    <th>Tanggal Pemakaman</th>
                                    <th>Jam Pemakaman</th>
                                    <th>Jenis IPTM</th>
                                    <th>Nama Pemakaman</th>
                                </tr>
                                </thead>
                                {{--@if(count($pemakamanall)>0)
                                    @foreach($pemakamanall as $pemakamans)
                                        <tbody>
                                        <tr>
                                            <td>{{$pemakamans->namaPemakaman}}</td>
                                            <td>{{$pemakamans ->alamatPemakaman}}</td>
                                            <td>{{$pemakamans->emailPemakaman}}</td>
                                            <td>{{$pemakamans->kodeposPemakaman}}</td>
                                            <td><a href="/informasiPemakaman/{{$pemakamans->pemakamanid}}"type="button"class="btn-primary btn-sm">Pesan Makam</a></td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                @endif--}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection