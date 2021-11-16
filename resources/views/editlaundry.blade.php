@extends('master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
              <form role="form" method="POST" action="{{route('updatelaundry', [$data->id])}}">    
                  @method('PUT')
                  @csrf
                    <label>Customer</label>
                    <div class="mb-3">
                      <input type="text" name="customer" class="form-control" placeholder="Customer" aria-label="Customer" aria-describedby="customer" value="{{$data->customer}}">
                    </div>
                    <label>Nomor Telepon</label>
                    <div class="mb-3">
                      <input type="text" name="telephon" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="Nomor Telepon" value="{{$data->nomer_telephon}}">
                    </div>
                    <div class="mb-3">
                      <label>Alamat</label>
                      <textarea type="text" name="alamat" class="form-control"  rows="3" placeholder="Alamat" aria-label="Alamat" aria-describedby="Alamat">{{$data->alamat}}</textarea>
                    </div>
                    <label>Jenis</label>
                    <div class="mb-3">
                        <select class="form-select" name="jenis" id="jenis">
                          <option value="0" class="jenis_satuan">Satuan</option>
                          <option value="1" class="jenis_kiloan">Kiloan</option>
                        </select>
                    </div>
                    <div class="berat">
                      <label>Berat</label>
                        <div class="mb-3">
                           <input type="text" name="berat"  id="berat" class="form-control" placeholder="Berat" aria-label="Berat" aria-describedby="Berat" value="{{$data->berat}}">
                        </div>
                    </div>
                    <label>Bayar</label>
                    <div class="mb-3">
                      <input type="Number" name="bayar" class="form-control" placeholder="Bayar" aria-label="Bayar" aria-describedby="Bayar" value="{{$data->bayar}}">
                    </div>
                    <label>Tgl Laundry</label>
                    <div class="mb-3">
                      <input type="Date" name="tgl_laundry" class="form-control" placeholder="Tanggal Laundry" aria-label="Tanggal Laudry" aria-describedby="Tanggal Laundry" value="{{$data->tgl_laundry}}">
                    </div>
                    <label>Keterangan</label>
                    <div class="mb-3">
                      <textarea type="text" name="keterangan" class="form-control"  rows="3" placeholder="Keterangan" aria-label="Keterangan" aria-describedby="Keterangan"> {{$data->keterangan}}</textarea>
                    </div>
                    <label>Tgl Antar</label>
                    <div class="mb-3">
                      <input type="date" id="tgl_antar" name="tgl_antar" class="form-control" placeholder="Tanggal Laundry" aria-label="Tanggal Laudry" aria-describedby="Tanggal Laundry">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Proses</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>    
 var datajenis = {{$data->jenis}}
 var jenis = 0;
 var berat = $(".berat");

  if (jenis == datajenis ){
    $("select option[value='0']").attr("selected", true);
    $("select option[value='1']").attr("selected", false);
    berat.hide();
  }else{
    $("select option[value='0']").attr("selected", false);
    $("select option[value='1']").attr("selected", true);
    berat.show();
  }
 
  $("select").on('change', function(){
     var selectval = $("#jenis option:selected").val();
     if (selectval == 1) {
       berat.show();
     } else {
       berat.hide();
     }
  });
  </script>
  
@endsection


