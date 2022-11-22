@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <br/>
    <a class="btn btn-info" href="{{ url('inputhipmi/create') }}">
        Tambah
    </a>
    <a class="btn btn-info" href="{{ url('/') }}">
        Dashboard
    </a>
    <br/>

        <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">



    <table class="table-bordered table" id="tabel_inputhipmi">
        <thead>
            <tr>
                <th>Nama </th>
                <th>Tanggal Lahir</th>
                <th>Deskripsi</th>
                <th>Pekerjaan</th>
                <th>Instansi</th>
            </tr>
        </thead>
        <tbody>
        @foreach( $datas as $key=>$value)

        
            <tr>
                <td>{{ $value->nama}}</td>
                <td>{{ $value->tanggal_lahir}}</td>
                <td>{{ $value->deskripsi}}</td>
                <td>{{ $value->pekerjaan}}</td>
                <td>{{ $value->instansi}}</td>
                <td><a class="btn btn-info" href="{{ url('universitas/'.$value->id.'/edit') }}">Update</a>
                    <form action="{{ url('universitas/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        
        
    </table>
    </section>
</div>

@endsection