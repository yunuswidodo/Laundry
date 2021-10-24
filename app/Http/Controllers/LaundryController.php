<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\LaundryController;
use App\Models\Laundry;



class LaundryController extends Controller
{

    public function store(Request $request){
        $data = new Laundry;

        $data->customer=$request->customer;
        $data->nomer_telephon=$request->telephon;
        $data->alamat=$request->alamat;
        $data->jenis=$request->jenislaundry;
        $data->berat=$request->berat;
        $data->bayar=$request->bayar;
        $data->tgl_laundry=$request->tgl_laundry;
        $data->keterangan=$request->keterangan;
        $data->save();

        return redirect()->back();
    }
    

    public function datalaundry(){
        return view ('datalaundry');
    }


}
