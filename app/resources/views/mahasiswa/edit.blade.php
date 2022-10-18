@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Form Tambah Data Mahasiswa</h5>
                    </div>
                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                        @csrf

                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Nama Mahasiswa</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea type="textarea" name="alamat" value="" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>NIM Mahasiswa</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Perguruan Tinggi</label>
                                </div>
                                <div class="col-md-8">
                                <select class="form-control" name="perguruan_tinggi" id="perguruan_tinggi">
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
                                    <input type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>E-mail</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="{{ $mahasiswa->email }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>No. Telepon</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" name="no_telp" value="{{ $mahasiswa->no_telp }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Jurusan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Fakultas</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="fakultas" value="{{ $mahasiswa->fakultas }}" class="form-control">
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
<script>
         $('#perguruan_tinggi').val('{{  $mahasiswa->perguruan_tinggi }}')
</script>

<script>
        $('#jenjang_pendidikan').val('{{  $mahasiswa->jenjang_pendidikan }}')
</Script>

@endsection
