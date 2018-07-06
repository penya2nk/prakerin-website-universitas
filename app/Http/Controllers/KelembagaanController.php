<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelembagaan;
use App\Kategori;
class KelembagaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelembagaan = Kelembagaan::with('Kategori')->get();
        return view('kelembagaan.index',compact('kelembagaan'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
               
        return view('kelembagaan.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required'
            
        ]);
        $kelembagaan = new Kelembagaan;
        $kelembagaan->nama = $request->nama;
        $kelembagaan->deskripsi = $request->deskripsi;
        $kelembagaan->kategori_id = $request->kategori_id;
        $kelembagaan->save();
        return redirect()->route('kelembagaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelembagaan = Kelembagaan::findOrFail($id);
        return view('kelembagaan.show',compact('kelembagaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelembagaan = Kelembagaan::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = Kelembagaan::findOrFail($id)->kategori_id;
       
        return view('kelembagaan.edit',compact('kelembagaan','kategori','selectedKategori'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'deskripsi' => 'required',
            'kategori_id' => 'required'
        ]);
        $kelembagaan = Kelembagaan::findOrFail($id);
        $kelembagaan->nama = $request->nama;
        $kelembagaan->deskripsi = $request->deskripsi;
        $kelembagaan->kategori_id = $request->kategori_id;
        $kelembagaan->save();
        return redirect()->route('kelembagaan.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelembagaan = Kelembagaan::findOrFail($id);
        $kelembagaan->delete();
        return redirect()->route('kelembagaan.index');
    }
}
