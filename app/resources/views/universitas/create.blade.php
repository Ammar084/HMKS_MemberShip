@extends('layouts.app')

@section('content')

    <br>
    <form action="{{ route('universitas.store') }}" method="POST">
        @csrf
        Nama Universitas : <input type="text" name="nama_univ"><br>
        KOta Universitas : <input type="text" name="kota_univ"><br>
        
        <button type="submit">SIMPAN</button>
    </form>

@endsection