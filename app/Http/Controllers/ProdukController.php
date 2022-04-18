<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukThumb;
use Illuminate\Http\Request;
use App\Models\kategoriProduk;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::with('thumbs')->latest()->get();

        return view('master.produk.index', compact('produks'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = new Produk;
        $katProduk = kategoriProduk::all();
        $thumb = new ProdukThumb;
        return view('master.produk.tambah',compact(
            'produk',
            'katProduk',
            'thumb',
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
        // $validator = Validator::make($request->all(),[
        //     'thumb'         =>  'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'produk_nama'   =>  'required',
        //     'produk_detail'   =>  'required',
        //     'produk_harga'  =>  'required',
        //     'produk_qty'  =>  'required|min:1',
        //     'produk_kategori_id'  =>  'required',
        // ]);
        
        // if ($validator->fails()) {
        //     return redirect()->route('produk.create')
        //     ->with('failed', 'Produk Create Not Success');
        // }

        $produk = Produk::create([
            'produk_nama'           =>  $request['produk_nama'],
            'produk_harga'          =>  $request['produk_harga'],
            'produk_detail'          =>  $request['produk_detail'],
            'produk_qty'            =>  $request['produk_qty'],
            'produk_kategori_id'    =>  $request['produk_kategori_id'],
        ]);
        

        foreach($request->file('thumb') as $file){
            $file_name = $file->hashName();
            $file_path = storage_path('app/public/uploads/products');
            $file->move($file_path, $file_name);

            
            ProdukThumb::create([
                'produk_id'     => $produk['id'],
                'thumb'         => $file_name,
            ]);
        }

        return redirect()->route('produk.index')
            ->with('success', 'Produk Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $produks = Produk::find($produk);
        $katProduk = kategoriProduk::all();
        $thumb = ProdukThumb::where(['produk_id' => $produk['id']])->get();
        return view('master.produk.edit',compact(
            'produks',
            'produk',
            'katProduk',
            'thumb',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        
        Produk::where('id', $produk['id'])->update([
            'produk_nama'           =>  $request['produk_nama'],
            'produk_harga'          =>  $request['produk_harga'],
            'produk_detail'          =>  $request['produk_detail'],
            'produk_qty'            =>  $request['produk_qty'],
            'produk_kategori_id'    =>  $request['produk_kategori_id'],
        ]);
        if ($request->hasFile('thumb')){

            foreach($request->file('thumb') as $file){
                $file_name = $file->hashName();
                $file_path = storage_path('app/public/uploads/products');
                $file->move($file_path, $file_name);

                Storage::delete('public/uploads/products/'.$file_name);

                ProdukThumb::where('produk_id', $produk['id'])->update([
                    'thumb' => $file_name,
                ]);
            }
        
        }

        return redirect()->route('produk.index')
            ->with('success', 'Produk Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {

        $thumb = ProdukThumb::where('produk_id', $produk['id'])->get();
        $jumlah = count($thumb['thumb']);
        for( $i = 0; $i < $jumlah; $i++){
            Storage::delete('public/uploads/products/'. $thumb['thumb'][$i]);
            ProdukThumb::where('produk_id', $produk['id'])->delete();
        }
        $produk->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Produk Deleted Successfully');
    }
}
