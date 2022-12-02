<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makan;

class makanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = makan::All();
        return view('makan',compact('data'));
        
    }
    public function store(makan $makan)
    {
        $data = makan::All();
        return view('pesan',compact('data'));
    }

    public function checkout()
    {
        return view('checkout');
    }
    
}