@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-tittle">Form Edit Data Hipmi</h3>
                    </div>

                    <form action="{{ route('inputhipmi.update', $inputhipmi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditNama Universitas">Nama</label>
                                <input type="text" name="nama_univ" value="{{$inputhipmi->nama }}" class="form-control">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditKotaUniv">Tanggal Lahir</label>
                                <input type="date" name="kota_univ" value="{{$inputhipmi->tanggal_lahir }}" class="form-control">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditKotaUniv">Deskripsi</label>
                                <input type="textarea" name="kota_univ" value="{{$inputhipmi->deskripsi }}" class="form-control">
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditKotaUniv">pekerjaan</label>
                                <input type="text" name="kota_univ" value="{{$inputhipmi->pekerjaan }}" class="form-control">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label for="EditKotaUniv">instansi</label>
                                <input type="text" name="kota_univ" value="{{$inputhipmi->instansi}}" class="form-control">
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