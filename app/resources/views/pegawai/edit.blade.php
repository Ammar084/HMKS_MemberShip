@extends('layouts.app')

@section('content')

    <br>
    <form method="POST" action="{{ route('pegawai.update',$pegawai->id) }}">
        @csrf

        @method('PUT')
        Nama : <input type="text" name="nama" value="{{ $pegawai->nama }}"><br>
        Tanggal Lahir : <input type="text" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}"><br>
        Gelar : <input type="text" name="gelar"value="{{ $pegawai->gelar }}"><br>
        NIP : <input type="text" name="nip" value="{{ $pegawai->nip }}"><br>

        <button type="submit">SIMPAN</button>
    </form>

@endsection