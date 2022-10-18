@extends('layouts.app')

@section('content')

    <br>
    <form method="POST" action="{{ route('mahasiswa.update',$mahasiswa->id) }}">
        @csrf

        @method('PUT')
        Nama : <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
        Tanggal Lahir : <input type="text" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}"><br>
        Alamat : <input type="text" name="alamat"value="{{ $mahasiswa->alamat }}"><br>
        NIM : <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br>
        Perguruan Tinggi : <input type="text" name="perguruan_tinggi" value="{{ $mahasiswa->perguruan_tinggi }}"><br>
        Jenjang Pendidikan :<select name='jenjang_pendidikan' id='jenjang_pendidikan'>
                                   <option value="D3">D3</option>
                                   <option value="D4">D4</option>
                                   <option value="S1">S1</option>
                                   <option value="S2">S2</option> 
                             </select>
                             <br></br>
        Angkatan : <input type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}"><br>
        E-Mail : <input type="text" name="email" value="{{ $mahasiswa->email }}"><br>
        No. Telp : <input type="text" name="no_telp" value="{{ $mahasiswa->no_telp }}"><br>
        Jurusan : <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br>
        Fakultas : <input type="text" name="fakultas" value="{{ $mahasiswa->fakultas }}"><br>



        <button type="submit">SIMPAN</button>
    </form>
<script>
        $('#jenjang_pendidikan').val('{{  $mahasiswa->jenjang_pendidikan }}')
</Script>
@endsection
