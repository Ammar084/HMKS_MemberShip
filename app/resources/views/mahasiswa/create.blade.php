@extends('layouts.app')

@section('content')

 
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Form Tambah Data Mahasiswa</h5>
                    </div>
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Nama Mahasiswa</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="tanggal_lahir" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea type="textarea" name="alamat" value="" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>NIM Mahasiswa</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nim" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Perguruan Tinggi</label>
                                </div>
                                <div class="col-md-8">
                                <select class="form-control" name="perguruan_tinggi" id="perguruan tinggi">
                                    @foreach ($universitas as $value)
                                        <option value="{{$value->nama_univ}}">{{$value->nama_univ}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Jenjang Pendidikan</label>
                                </div>
                                <div class="col-md-8">
                                    <select name='jenjang_pendidikan' id='jenjang_pendidikan' class="form-control">
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Angkatan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="angkatan" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>E-mail</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>No. Telepon</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" name="no_telp" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Jurusan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="jurusan" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Fakultas</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="fakultas" value="" class="form-control">
                                </div>
                            </div>

                            <div class="text-center mt-3" >
                                <button type="submit" class="btn btn-primary">SIMPAN</button>

                            </div>
                    </form>
                    </div>                    
                </div>
            </div>
        </div> 
       
    </div>
@endsection