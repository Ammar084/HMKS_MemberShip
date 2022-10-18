@extends('layouts.app')

@section('content')
    <br/>
    <a class="btn btn-info" href="{{ url('universitas/create') }}">
        Tambah
    </a>
    <a class="btn btn-info" href="{{ url('/') }}">
        Dashboard
    </a>
    <br/>

    <table class="table-bordered table">
        <tr>
            <th>Nama Universitas</th>
            <th>Kota Universitas</th>
            <th colspan="2 ">AKSI</th>
        </tr>
        @foreach( $datas as $key=>$value)

            <tr>
                <td>{{ $value->nama_univ}}</td>
                <td>{{ $value->kota_univ}}</td>
                <td><a class="btn btn-info" href="{{ url('universitas/'.$value->id.'/edit') }}">Update</a></td>
                <td>
                    <form action="{{ url('universitas/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>
@endsection