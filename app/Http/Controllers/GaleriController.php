<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view('master.galeri.index', compact('galeri'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeri = new Galeri;
        return view('master.galeri.tambah', compact(
            'galeri'
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
        // upload image
        $file = $request->file('galeri_image');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/galeri');
        $file->move($file_path, $file_name);

        //create image
        Galeri::create([
            'galeri_nama' => $request['galeri_nama'],
            'galeri_image' => $file_name
        ]);

        return redirect()->route('galeri.index')
            ->with('success', 'Galeri Created successfully');
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
    public function edit(Galeri $galeri)
    {
        return view('master.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        Galeri::where('id', $galeri->id)->update([
            'galeri_nama' => $request->galeri_nama,
            'galeri_image' => $request->galeri_image
        ]);

        return redirect()->route('galeri.index')
            ->with('success', 'Galeri updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        //delete image
        Storage::delete('public/uploads/galeri/' . $galeri->galeri_image);

        $galeri->delete();

        return redirect()->route('galeri.index')
            ->with('success', 'Galeri deleted successfully');
    }
}
