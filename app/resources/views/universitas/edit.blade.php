@extends('layouts.app')

@section('content')

    <br>
    <form method="POST" action="{{ route('universitas.update',$universitas->id) }}">
        @csrf

        @method('PUT')
        Nama Universitas : <input type="text" name="nama_univ" value="{{ $universitas->nama_univ }}"><br>
        Kota Universitas : <input type="text" name="kota_univ" value="{{ $universitas->kota_univ }}"><br>
      

        <button type="submit">SIMPAN</button>
    </form>

@endsection