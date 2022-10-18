@extends('layouts.app')

@section('content')
    <br/>
    <a class="btn btn-info" href="{{ url('mahasiswa/create') }}">
        Tambah
    </a>
    <a class="btn btn-info" href="{{ url('/') }}">
        Dashboard
    </a>
    <br/>

    <table class="table-bordered table">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>nim</th>
            <th>Perguruan Tinggi</th>
            <th>Jenjang Pendidikan</th>
            <th>Angkatan</th>
            <th>E-Mail</th>
            <th>No.Telp</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th colspan="2 ">AKSI</th>
        </tr>
        @foreach( $datas as $key=>$value)

            <tr>
                <td>{{ $value->nama}}</td>
                <td>{{ $value->tanggal_lahir}}</td>
                <td>{{ $value->alamat}}</td>
                <td>{{ $value->nim}}</td>
                <td>{{ $value->perguruan_tinggi}}</td>
                <td>{{ $value->jenjang_pendidikan}}</td>
                <td>{{ $value->angkatan}}</td>
                <td>{{ $value->email}}</td>
                <td>{{ $value->no_telp}}</td>
                <td>{{ $value->jurusan}}</td>
                <td>{{ $value->fakultas}}</td>
                <td><a class="btn btn-info" href="{{ url('mahasiswa/'.$value->id.'/edit') }}">Update</a></td>
                <td>
                    <form action="{{ url('mahasiswa/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>
@endsection