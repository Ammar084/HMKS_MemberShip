<?php

namespace App\Http\Controllers;

use App\Models\Universitas;
use Illuminate\Http\Request;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Universitas::all();
        return view('universitas.index', compact(
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
        $universitas = new Universitas;
        return view('universitas.create', compact(
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
        $universitas = new universitas;
        $universitas->nama_univ = $request->nama_univ;
        $universitas->kota_univ = $request->kota_univ;
        $universitas->save();

        return redirect('universitas');
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
        $universitas = Universitas::find($id);
        return view('universitas.edit', compact(
            'universitas'
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
        $universitas = Universitas::find($id);
        $universitas->nama_univ = $request->nama_univ;
        $universitas->kota_univ = $request->kota_univ;
        $universitas->save();


        return redirect('universitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $universitas = Universitas::find($id);
        $universitas->delete();
        return redirect('universitas');
    }
}
