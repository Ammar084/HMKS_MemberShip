@extends('layouts.app')

@section('content')

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


@endsection