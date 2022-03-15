<?php

namespace App\Http\Controllers;

use App\Models\kategoriJasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriJasa = kategoriJasa::latest()->get();

        return view('master.katJasa.index', compact('kategoriJasa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriJasa = new kategoriJasa;
        return view('master.katJasa.tambah', compact(
            'kategoriJasa'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoriJasa = new kategoriJasa;
        $kategoriJasa->kategori_jasa_nama = $request->kategori_jasa_nama;
        $kategoriJasa->save();

        return redirect()->route('kategori-jasa.index')
            ->with('success', 'Kategori Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoriJasa $kategoriJasa)
    {
        return view('master.katJasa.edit', compact('kategoriJasa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategoriJasa $kategoriJasa)
    {
        kategoriJasa::where('id', $kategoriJasa->id)->update([
            'kategori_jasa_nama' => $request->kategori_jasa_nama,
        ]);

        return redirect()->route('kategori-jasa.index')
            ->with('success', 'Kategori updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoriJasa $kategoriJasa)
    {
        $kategoriJasa->delete();

        return redirect()->route('kategori-jasa.index')
            ->with('success', 'Kategori deleted successfully');
    }
}
