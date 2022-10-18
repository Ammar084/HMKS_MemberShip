@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Form Update Data Universitas</h5>
                    </div>
                    <form action="{{ route('universitas.update', $universitas->id) }}" method="POST">
                        @csrf

                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Nama Universitas</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="nama_univ" value="{{ $universitas->nama_univ }}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Kota Universitas</label>
                                </div>
                                <div class="col-md-8">
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
    </div>
@endsection