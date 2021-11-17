@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Daftar Ulang</li> 
               </ol>
             </nav>

             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-primary" role="alert">
                         <h3>Perhatian !!!</h3>
                            Silahkan isi dibawah ini dengan benar.
                     </div>

                     <form action="" method="post">
                         @csrf

                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label for="">Kode Kegiatan</label>
                                     <input type="text" name="kode kegiatan" class="form-control" id="" placeholder="Silahkan isi kode kegiatan">
                                 </div>
                             </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="text" name="nisn" class="form-control" id="" placeholder="Silahkan isi NISN ">
                                </div>
                            </div>
                                <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="" placeholder="Silahkan isi Nama">
                                   </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">TGL Daftar</label>
                                        <input type="date" name="tgl_awal" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="pilih_status" id="" class="form-control">
                                            <option value="">Silahkan Pilih Status</option>
                                            <option value="Laki-Laki">Aktif</option>
                                            <option value="Perempuan">Non-Aktif</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="col-md-12" style="">
                                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                                </div>
                         </div>
                     </form>
                 </div>
             </div>
    </div>
@endsection