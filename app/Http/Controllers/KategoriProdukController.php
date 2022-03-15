<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoriProduk;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriProduk = kategoriProduk::latest()->get();

        return view('master.katProduk.index', compact('kategoriProduk'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriJasa = new kategoriProduk;
        return view('master.katProduk.tambah', compact(
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
        $kategoriProduk = new kategoriProduk;
        $kategoriProduk->kategori_produk_nama = $request->kategori_produk_nama;
        $kategoriProduk->save();

        return redirect()->route('kategori-produk.index')
            ->with('success', 'Kategori Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function show(kategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoriProduk $kategoriProduk)
    {
        return view('master.katProduk.edit', compact('kategoriProduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategoriProduk $kategoriProduk)
    {
        kategoriProduk::where('id', $kategoriProduk->id)->update([
            'kategori_produk_nama' => $request->kategori_produk_nama,
        ]);

        return redirect()->route('kategori-produk.index')
            ->with('success', 'Kategori updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoriProduk $kategoriProduk)
    {
        $kategoriProduk->delete();

        return redirect()->route('kategori-produk.index')
            ->with('success', 'Kategori deleted successfully');
    }
}
