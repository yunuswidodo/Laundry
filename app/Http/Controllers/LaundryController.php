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
        $data = Laundry::all();
        return view ('datalaundry', ['data'=>$data]);
    }

    public function editlaundry($id){
        $data = Laundry::find($id);
         return view ('editlaundry', ['data' => $data]);
    }

    public function updatelaundry(Request $request, $id){

        $data = Laundry::find($id);
        $data->customer=$request->customer;
        $data->nomer_telephon=$request->telephon;
        $data->alamat=$request->alamat;
        $data->jenis=$request->jenis;
        $data->berat=$request->berat;
        $data->tgl_laundry=$request->tgl_laundry;
        $data->keterangan=$request->keterangan;
        $data->tgl_antar=$request->tgl_antar;
        $data->save();
        return redirect()->route('datalaundry');
    }

public function deletelaundry($id){
       $data = Laundry::find($id);
       $data->delete();
       return redirect()->route('datalaundry');
      
}


    


}
