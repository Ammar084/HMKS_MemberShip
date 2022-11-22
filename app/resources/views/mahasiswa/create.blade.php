@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-tittle">Form Tambah Tambah Mahasiswa</h3>
                    </div>

                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                    <div class="card-body">
                        <div class="">
                            <div class="form-group">
                                <label for="EditNamaMahasiswa">Nama Mahasiswa</label>
                                <input class="form-control" type="text" name="nama" value="" placeholder="Nama Mahasiswa">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditTanggalLahir">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" value="" placeholder="Tanggal Lahir">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditAlamat">Alamat</label>
                                <textarea type="textarea" name="alamat" value="" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditNim">Nim Mahasiswa</label>
                                <input class="form-control" type="text" name="nim" value="" placeholder="Nim Mahasiswa">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditPerguruanTinggi">Perguruan Tinggi</label>
                                <select class="form-control" name="perguruan_tinggi" id="perguruan_tinggi">
                                    @foreach ($universitas as $value)
                                        <option value="{{$value->nama_univ}}">{{$value->nama_univ}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditJenjangPendidikan">Jenjang Pendidikan</label>
                                <select name='jenjang_pendidikan' id='jenjang_pendidikan' class="form-control">
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option> 
                                </select>
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditAngkatan">Angkatan</label>
                                <input class="form-control" type="text" name="angkatan" value="" placeholder="Angkatan">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditEmail">E-Mail</label>
                                <input class="form-control" type="email" name="email" value="" placeholder="E-Mail">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditNoTelepon">No Telepon</label>
                                <input class="form-control" type="tel" name="no_telp" value="" placeholder="No Telepon">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditAJurusan">Jurusan</label>
                                <input class="form-control" type="text" name="jurusan" value="" placeholder="Jurusan">
                            </div>
                        </div>

                        <div class="">
                            <div class="form-group">
                                <label for="EditFakultas">Fakultas</label>
                                <input class="form-control" type="text" name="fakultas" value="" placeholder="Fakultas">
                            </div>
                        </div>
                    </div>

                        

                        <div class="card-footer" >
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection