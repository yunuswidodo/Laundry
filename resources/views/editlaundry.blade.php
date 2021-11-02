@extends('master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
              <form role="form" method="post" action="store">
              @csrf
                    <label>Customer</label>
                    <div class="mb-3">
                      <input type="text" name="customer" class="form-control" placeholder="Customer" aria-label="Customer" aria-describedby="customer">
                    </div>
                    <label>Nomor Telepon</label>
                    <div class="mb-3">
                      <input type="text" name="telephon" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="Nomor Telepon">
                    </div>
                    <label>Alamat</label>
                    <div class="mb-3">
                      <textarea type="text" name="alamat" class="form-control"  rows="3" placeholder="Alamat" aria-label="Alamat" aria-describedby="Alamat"></textarea>
                    </div>
                    <label>Jenis Laudry</label>
                    <div class="form-group" name="jenis">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenislaundry" id="inlineRadio1" value=0>
                            <label class="form-check-label" for="inlineRadio1">Satuan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenislaundry" id="inlineRadio2" value=1>
                            <label class="form-check-label" for="inlineRadio2">Kiloan</label>
                        </div>
                    </div>
                    <div class="berat"  style="display:none">
                      <label>Berat</label>
                        <div class="mb-3">
                           <input type="text" name="berat" class="form-control" placeholder="Berat" aria-label="Berat" aria-describedby="Berat">
                        </div>
                    </div>
                    <label>Bayar</label>
                    <div class="mb-3">
                      <input type="Number" name="bayar" class="form-control" placeholder="Bayar" aria-label="Bayar" aria-describedby="Bayar">
                    </div>
                    <label>Tgl Laundry</label>
                    <div class="mb-3">
                      <input type="Date" name="tgl_laundry" class="form-control" placeholder="Tanggal Laundry" aria-label="Tanggal Laudry" aria-describedby="Tanggal Laundry">
                    </div>
                    <label>Keterangan</label>
                    <div class="mb-3">
                      <textarea type="text" name="keterangan" class="form-control"  rows="3" placeholder="Keterangan" aria-label="Keterangan" aria-describedby="Keterangan"></textarea>
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

$("#inlineRadio1").prop("checked", true);
$('input[type="radio"]').click(function(){
      
        if($(this).attr("value")==0){
            $(".berat").hide('slow');
        }
        if($(this).attr("value")==1){
            $(".berat").show('slow');

        }        
    });




  </script>
  
@endsection