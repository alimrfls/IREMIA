@extends('layouts.app') @section('content')

    <div class="">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Pengajuan {{$tipe}}</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nomor Surat {{$tipe}}</th>
                                    <th>Nomor IPTM</th>
                                    <th>Nama Almarhum</th>
                                    <th>Status Pemesanan</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($data)>0)
                                        @foreach($data as $tabelStatusPemesanan)
                                            <tr>
                                                <td>{{$tabelStatusPemesanan->nomor_surat}}</td>
                                                <td>{{$tabelStatusPemesanan->nomor_iptm}}</td>
                                                <td>{{$tabelStatusPemesanan->nama_almarhum}}</td>
                                                <td>{{$tabelStatusPemesanan->status}}</td>
                                                <td>
                                                    <button class="btn btn-success">Terima</button>
                                                    <button class="btn btn-danger">Tolak</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection