<?php

namespace App\Http\Controllers;
use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function create(){
        return view('createFakultas');
    }

    public function store(Request $request){
        fakultas::create([
            'namaFakultas'=>$request->namaFakultas,
        ]);

        return redirect('/');
    }
}
