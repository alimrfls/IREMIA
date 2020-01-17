@extends('layouts.app') @section('content')

    <div class="">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Status Pemesanan</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nomor Pemesanan</th>
                                    <th>Status Pemesanan</th>
                                    <th>Jenis IPTM</th>
                                    <th>Nama Pemakaman</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @if(count($statusPemesanan)>0)
                                    @foreach($statusPemesanan as $tabelStatusPemesanan)
                                        <tbody>
                                        <tr>
                                            <td>{{$tabelStatusPemesanan->Registrasi_number}}</td>
                                            <td>{{$tabelStatusPemesanan ->Registrasi_Status}}</td>
                                            {{--<td>{{$tabelStatusPemesanan->emailPemakaman}}</td>
                                            <td>{{$tabelStatusPemesanan->kodeposPemakaman}}</td>--}}
                                            {{--<td><a href="/informasiPemakaman/{{$pemakamans->pemakamanid}}"type="button"class="btn-primary btn-sm">Pesan Makam</a></td>--}}
                                        </tr>
                                        </tbody>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection