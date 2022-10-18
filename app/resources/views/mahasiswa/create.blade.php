@extends('layouts.app')

@section('content')

<!-- 
    Gunakan container dan card
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Judul Form</h5>
            </div>
            <div class="card">
                ..... Form ....

            </div>            
        </div>

    </div>
 -->



<!-- Format Form Bootstrap
<div class="form-group row">
    <div class="col-md-3">
        <label>Label misal. Nama</label>
    </div>
    <div class="col-md-9">
        <input type="text" name="nama" value="" class="form-control">
    </div>
</div
 -->

<!-- Format Input Type
    Text/Pendek -> <input type='text'  value=""  .../>
    Text Panjang (misal alamat) -> <textarea ....> ..value.. </textarea>
    Tanggal -> <input type='date'  value=""  .../>
    Email -> <input type='email'  value=""  .../>
    Nomor Telepon -> <input type='tel'  value=""  .../>
 -->


    <br>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        Nama : <input type="text" name="nama" value=""><br>
        Tanggal Lahir : <input type="text" name="tanggal_lahir" value=""><br>



        Alamat : <input type="text" name="alamat"value=""><br>
        NIM : <input type="text" name="nim" value=""><br>
        Perguruan Tinggi : <select>
            @foreach ($universitas as $value)
                <option value="{{$value->nama_univ}}">{{$value->nama_univ}}</option>
            @endforeach
        </select>
        Jenjang Pendidikan : <select name='jenjang_pendidikan' id='jenjang_pendidikan'>
                                   <option value="D3">D3</option>
                                   <option value="D4">D4</option>
                                   <option value="S1">S1</option>
                                   <option value="S2">S2</option> 
                             </select>
                             <br></br>
        Angkatan : <input type="text" name="angkatan" value=""><br>
        E-Mail : <input type="text" name="email" value=""><br>
        No. Telp : <input type="text" name="no_telp" value=""><br>
        Jurusan : <input type="text" name="jurusan" value=""><br>
        Fakultas : <input type="text" name="fakultas" value=""><br>

        <button type="submit">SIMPAN</button>
    </form>

@endsection