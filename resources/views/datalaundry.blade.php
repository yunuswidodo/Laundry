@extends('master')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nomor Hanphone </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Laundry</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $d)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"></h6>
                              {{$d->customer}}
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$d->nomer_telephon}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$d->alamat}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$d->tgl_laundry}}</span>
                      </td>
                      
                      <td class="align-middle text-center text-sm">
                      @if($d->tgl_antar != NULL)
                        <span class="badge badge-sm bg-gradient-success">sudah diantar</span>
                      @else
                        <span class="badge badge-sm bg-gradient-secondary">belum diantar</span>
                      @endif
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-link text-warning text-gradient px-3 mb-0" href="{{route('editlaundry', [$d->id])}}"><i class="fas fa-edit"></i> Detail</a>
                      </td>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection()
