<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //validasi data
         $validated = $request->validate([
            'kd_kategori' => 'required',
            'nama_kategori' => 'required',
        ]);

        $kategori = new Kategori;
        $kategori->kd_kategori = $request->kd_kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      //validasi data
$validated = $request->validate([
    'kd_kategori' => 'required',
    'nama_kategori' => 'required',
  ]);

    $kategori = Kategori::findOrFail($id);
    $kategori->kd_kategori = $request->kd_kategori;
    $kategori->nama_kategori = $request->nama_kategori;
    $kategori->save();
    return redirect()->route('kategori.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
