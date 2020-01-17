@extends('layouts.app') @section('content')

    <div class="">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Pemeriksaan Pemesanan</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nomor Pemesanan</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Nama Ahliwaris</th>
                                    <th>Jenis IPTM</th>
                                    <th></th>
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