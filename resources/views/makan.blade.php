@extends('layouts.main')

@section('container')

@foreach ($data->chunk(4) as $makanChunk)
<div class="container">
   <div class="row">
    @foreach($makanChunk as $makan)
        <div class="col  mb-5 ml-1 mr-1 content-center">
            <div class="card" style="width: 15rem;">
                <div class="card-body">
                    <img src="image/nasi.png" class="card-img-top" alt="...">
                    <h4></a>{{$makan->nama}}</h4>
                    <h5>{{$makan->harga}}</h5>
                    <p>{{$makan->deskripsi}}</p>
                    <a href="/makan/pesan" class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endforeach    
    
@endsection
