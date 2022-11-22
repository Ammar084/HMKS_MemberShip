@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-tittle">Form Edit Data Universitas</h3>
                    </div>

                    <form action="{{ route('universitas.update', $universitas->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditNama Universitas">Nama Universitas</label>
                                <input type="text" name="nama_univ" value="{{ $universitas->nama_univ }}" class="form-control">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditKotaUniv">Kota Universitas</label>
                                <input type="text" name="kota_univ" value="{{ $universitas->kota_univ }}" class="form-control">
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

@endsection