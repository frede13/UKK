<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\detailpesanan;

class DetailPesananController extends Controller
{
     public function index()
    {
        $data = detailpesanan::All();
        return view('pesan',compact('data'));
    }
}
