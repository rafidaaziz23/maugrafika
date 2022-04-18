<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\JasaThumb;
use App\Models\kategoriJasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasas = Jasa::with('thumbs')->latest()->get();

        return view('master.jasa.index', compact('jasas'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jasa = new Jasa;
        $katJasa = kategoriJasa::all();
        $thumb = new JasaThumb;
        return view('master.jasa.tambah',compact(
            'jasa',
            'katJasa',
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
        $jasa = Jasa::create([
            'jasa_nama'           =>  $request['jasa_nama'],
            'jasa_harga'          =>  $request['jasa_harga'],
            'jasa_detail'          =>  $request['jasa_detail'],
            'jasa_kategori_id'    =>  $request['jasa_kategori_id'],
        ]);
        

        foreach($request->file('thumb') as $file){
            $file_name = $file->hashName();
            $file_path = storage_path('app/public/uploads/jasas');
            $file->move($file_path, $file_name);

            
            JasaThumb::create([
                'jasa_id'     => $jasa['id'],
                'thumb'         => $file_name,
            ]);
        }

        return redirect()->route('jasa.index')
            ->with('success', 'jasa Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function show(Jasa $jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jasa $jasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jasa $jasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jasa $jasa)
    {
        //
    }
}
