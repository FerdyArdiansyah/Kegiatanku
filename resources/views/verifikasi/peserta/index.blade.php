@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Verifikasi Pendaftaran</li> 
               </ol>
             </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{route('verifikasi-pendaftaran.ulang')}}" class="btn btn-secondary">Daftar Ulang</a>
                            <a href="{{route('verifikasi-pendaftaran.peserta')}}" class="btn btn-secondary">Peserta</a>
                        </div>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                               
                            </div>
                        </form>

                        <div class="mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Kegiatan</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>TGL Daftar</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1414</td>
                                        <td>214124</td>
                                        <td>Anggie</td>
                                        <td>09-14-2012</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a href="" class="btn btn-secondary btn-sm">Edit</a>
                                            <button type="submit" class=" btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection