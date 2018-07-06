<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramStudi;
use App\Kategori;
class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programstudi = ProgramStudi::with('Kategori')->get();
        return view('programstudi.index',compact('programstudi'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('programstudi.create',compact('kategori'));
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required'
            
        ]);
        $programstudi = new ProgramStudi;
        $programstudi->nama = $request->nama;
        $programstudi->judul = $request->judul;
        $programstudi->deskripsi = $request->deskripsi;
        $programstudi->kategori_id = $request->kategori_id;
        $programstudi->save();
        return redirect()->route('programstudi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programstudi = ProgramStudi::findOrFail($id);
        return view('programstudi.show',compact('programstudi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programstudi = ProgramStudi::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = ProgramStudi::findOrFail($id)->kategori_id;
       
        return view('programstudi.edit',compact('programstudi','kategori','selectedKategori'));
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
            'judul' => 'required|',
            'deskripsi' => 'required',
            'kategori_id' => 'required'
        ]);
        $programstudi = ProgramStudi::findOrFail($id);
        $programstudi->nama = $request->nama;
        $programstudi->judul = $request->judul;
        $programstudi->deskripsi = $request->deskripsi;
        $programstudi->kategori_id = $request->kategori_id;
        $programstudi->save();
        return redirect()->route('programstudi.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ps = ProgramStudi::findOrFail($id);
        $ps->delete();
        return programstudi()->route('programstudi.index');
    }
}
