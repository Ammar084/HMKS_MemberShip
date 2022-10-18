<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DataController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function index (){

        $data=new Anggota;
        $data->where('id',2)->first();
        return view('data.index' ,compact('data'));

    }

    function detail ($judul){
        return view('data.detail', compact('judul') );
    }
}
