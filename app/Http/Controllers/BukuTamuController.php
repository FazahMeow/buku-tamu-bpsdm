<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    public function index(){
        return view('bukuTamu.index');
    }

    public function create(){
        return view('bukuTamu.create');
    }

    public function store(Request $request){
        dd($request);
    }
}
