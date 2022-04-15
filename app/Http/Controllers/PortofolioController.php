<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::latest()->get();

        return view('master.portofolio.index', compact('portofolio'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portofolio = new Portofolio;
        return view('master.portofolio.tambah', compact(
            'portofolio'
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
        $file = $request->file('portofolio_image');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/portofolio');
        $file->move($file_path, $file_name);

        //create image
        Portofolio::create([
            'portofolio_nama' => $request['portofolio_nama'],
            'portofolio_image' => $file_name
        ]);

        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio Created successfully');
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
    public function edit(Portofolio $portofolio)
    {
        return view('master.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        Portofolio::where('id', $portofolio->id)->update([
            'portofolio_nama' => $request->portofolio_nama,
            'portofolio_image' => $request->portofolio_image
        ]);

        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();

        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio deleted successfully');
    }
}
