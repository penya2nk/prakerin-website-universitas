<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beranda;
class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $beranda = Beranda::all();
        return view('beranda.index',compact('beranda'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beranda.create');
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
            'sejarah' => 'required|max:255',
            'visi' => 'required|max:255',
            'misi' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telepon' => 'required|max:255'

        ]);

        $beranda = new Beranda;
        $beranda->sejarah = $request->sejarah;
        $beranda->visi = $request->visi;
        $beranda->misi = $request->misi;
        $beranda->tujuan = $request->tujuan;
        $beranda->alamat = $request->alamat;
        $beranda->no_telepon = $request->no_telepon;

        $beranda->save();
        return redirect()->route('beranda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beranda = Beranda::findOrFail($id);
        return view('beranda.show',compact('beranda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $beranda = Beranda::findOrFail($id);
        return view('beranda.edit',compact('beranda'));
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
         // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'sejarah' => 'required|max:255',
            'visi' => 'required|max:255',
            'misi' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telepon' => 'required|max:255'

        ]);

        // update data berdasarkan id
        $beranda = Beranda::findOrFail($id);
        $beranda->sejarah = $request->sejarah;
        $beranda->visi = $request->visi;
        $beranda->misi = $request->misi;
        $beranda->tujuan = $request->tujuan;
        $beranda->alamat = $request->alamat;
        $beranda->save();
        return redirect()->route('beranda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $beranda = Beranda::findOrFail($id);
        $beranda->delete();
        return redirect()->route('beranda.index');  
    }
}
