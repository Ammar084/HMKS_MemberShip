<?php

namespace App\Http\Controllers;

use App\Models\Inputhipmi;
use Illuminate\Http\Request;

class InputhipmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Inputhipmi::all();
        return view('inputhipmi.index', compact(
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
        $inputhipmi = new Inputhipmi;
        return view('inputhipmi.create', compact(
            'inputhipmi'
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
        $inputhipmi = new Inputhipmi;
        $inputhipmi->nama = $request->nama;
        $inputhipmi->tanggal_lahir = $request->tanggal_lahir;
        $inputhipmi->deskripsi = $request->deskripsi;
        $inputhipmi->pekerjaan = $request->pekerjaan;
        $inputhipmi->instansi = $request->instansi;
        $inputhipmi->save();

        return redirect('inputhipmi');
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
        $inputhipmi = Inputhipmi::find($id);
        return view('inputhipmi.edit', compact(
            'inputhipmi'
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
        $inputhipmi = Inputhipmi::find($id);
        $inputhipmi->nama = $request->nama;
        $inputhipmi->tanggal_lahir = $request->tanggal_lahir;
        $inputhipmi->deskripsi = $request->deskripsi;
        $inputhipmi->pekerjaan = $request->pekerjaan;
        $inputhipmi->instansi = $request->instansi;
        $inputhipmi->save();


        return redirect('inputhipmi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inputhipmi = Inputhipmi::find($id);
        $inputhipmi->delete();
        return redirect('inputhipmi');
    }
}
