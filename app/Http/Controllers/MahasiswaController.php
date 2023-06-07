<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\fakultas;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::All();
        return view('showMahasiswa', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = fakultas::All();

        return view('inputMahasiswa', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nim'=>'required|integer|min:99999',
            'nama'=>'required|min:3',
            'alamat'=>'required|min:5',
            'birthdate'=>'required',
            'foto'=>'required|mimes:jpg,png,jpeg'
        ]);

        $extension = $request->file('foto')->getClientOriginalExtension();
        $filename = $request->nim.'_'.$request->nama.'.'.$extension;
        $request->file('foto')->storeAs('/public/mahasiswa', $filename);

        mahasiswa::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'foto'=>$filename,  
            'birthdate'=>$request->birthdate,
            'fakultas_id'=>$request->fakultas
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);

        return view('detailMahasiswa', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);

        return view('editMahasiswa', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $extension = $request->file('foto')->getClientOriginalExtension();
        $filename = $request->nim.'_'.$request->nama.'.'.$extension;
        $request->file('foto')->storeAs('/public/mahasiswa', $filename);

        mahasiswa::findOrFail($id)->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'foto'=>$filename,  
            'birthdate'=>$request->birthdate
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mahasiswa = mahasiswa::findOrFail($id);
        $images = '/storage/mahasiswa/'.$Mahasiswa->foto;
        $path = str_replace('\\', '/', public_path());
        unlink($path.$images);
        mahasiswa::destroy($id);
        return redirect('/');
    }
}
