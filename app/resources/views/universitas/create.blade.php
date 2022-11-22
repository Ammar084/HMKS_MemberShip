@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-tittle">Form Tambah Data Universitas</h3>
                    </div>

                    <form action="{{ route('universitas.store') }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditNama Universitas">Nama Universitas</label>
                                <input type="text" name="nama_univ" value="" class="form-control" placeholder="Nama Universitas">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditKotaUniv">Kota Universitas</label>
                                <input type="text" name="kota_univ" value="" class="form-control" placeholder="Kota Universitas">
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
</section>

<!--
<div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Form Tambah Data Universitas</h5>
                    </div>
                    <form action="{{ route('universitas.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Nama Universitas</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama_univ" value="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Kota Universitas</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="kota_univ" value="" class="form-control">
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
-->
@endsection