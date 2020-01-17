@extends('layouts.app') @section('content')

    <div class="">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Pemakaman</strong>
                        </div>

                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Pemakaman</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Kode Pos</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @if(count($listPemakaman)>0)
                                    @foreach($listPemakaman as $daftarPemakaman)
                                <tbody>
                                <tr>
                                    <td>{{$daftarPemakaman->namaPemakaman}}</td>
                                    <td>{{$daftarPemakaman->alamatPemakaman}}</td>
                                    <td>{{$daftarPemakaman->emailPemakaman}}</td>
                                    <td>{{$daftarPemakaman->kodeposPemakaman}}</td>
                                    <td><a href="/informasiPemakaman/{{$daftarPemakaman->pemakamanid}}"type="button"class="btn-primary btn-sm">Pesan Makam</a></td>
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