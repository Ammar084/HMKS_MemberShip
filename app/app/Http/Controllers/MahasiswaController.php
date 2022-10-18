<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Universitas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Mahasiswa::all();
        return view('mahasiswa.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universitas = Universitas::all();
        return view('mahasiswa.create', compact(
            'universitas'
        ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->perguruan_tinggi = $request->perguruan_tinggi;
        $mahasiswa->jenjang_pendidikan = $request->jenjang_pendidikan;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->email = $request->email;
        $mahasiswa->no_telp = $request->no_telp;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->save();

        return redirect('mahasiswa');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $universitas = Universitas::all();
        return view('mahasiswa.edit', compact(
            'universitas', 'mahasiswa'
        ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->perguruan_tinggi = $request->perguruan_tinggi;
        $mahasiswa->jenjang_pendidikan = $request->jenjang_pendidikan;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->email = $request->email;
        $mahasiswa->no_telp = $request->no_telp;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->save();

        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}
