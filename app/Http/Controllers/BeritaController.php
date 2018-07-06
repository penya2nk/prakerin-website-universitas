<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::with('Kategori')->get();
        return view('berita.index',compact('berita'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
               
        return view('berita.create',compact('kategori'));
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
            'foto' => 'required',
            'judul' => 'required',
            'tgl_publikasi' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required'
            
        ]);
        $berita = new Berita;
        $berita->foto = $request->foto;
        $berita->judul = $request->judul;
        $berita->tgl_publikasi = $request->tgl_publikasi;
        $berita->deskripsi = $request->deskripsi;
        $berita->kategori_id = $request->kategori_id;
        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = Berita::findOrFail($id)->kategori_id;
       
        return view('berita.edit',compact('berita','kategori','selectedKategori'));
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
            'foto' => 'required|',
            'judul' => 'required|',
            'tgl_publikasi' => 'required|',
            'deskripsi' => 'required',
            'kategori_id' => 'required'
        ]);
        $berita = Berita::findOrFail($id);
        $berita->foto = $request->foto;
        $berita->judul = $request->judul;
        $berita->tgl_publikasi = $request->tgl_publikasi;
        $berita->deskripsi = $request->deskripsi;
        $berita->kategori_id = $request->kategori_id;
        $berita->save();
        return redirect()->route('berita.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index');
    }
}
