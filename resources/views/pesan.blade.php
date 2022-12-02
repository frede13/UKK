@extends('layouts.detailpesanan')

@section('container')
@foreach ($data as $makan)

<div class="container">
    <div class="row mt-3">
      <div class="col">
         <div class="card">
             <div class="card-body">
                <div class="card-img">
                  <img src="image/" class="card-img-top" alt="...">
                </div>
                  <div class="card-desc">
                    <img src="image/nasi.png" class="card-img-top" alt="...">
                    <h5></a>{{$makan->nama}}</h5>
                    <h5>{{$makan->harga}}</h5>
                    <p>{{$makan->deskripsi}}</p>
                      <table class="table">
                          <thead>
                            <tr>
                              <th><a href="/makan" class="btn btn-danger">Kembali</a></th>
                              <th><a href="/makan/pesan/checkout" class="btn btn-primary">check out</a><th>
                              <th><p>Total Pembayaran : {{$makan->harga}} <P>
                            </tr>
                          </thead>
                      </table>    
                  </div>
              </div>
          </div>
       </div>
    </div>
</div>
    
@endforeach   
        
@endsection