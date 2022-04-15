<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi = Visi::latest()->get();

        return view('master.visi.index', compact('visi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visi = new Visi;
        return view('master.visi.tambah', compact(
            'visi'
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
        $visi = new Visi;
        $visi->visi_number = $request->visi_number;
        $visi->visi_detail = $request->visi_detail;
        $visi->save();

        return redirect()->route('visi.index')
            ->with('success', 'Visi Created successfully');
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
    public function edit(Visi $visi)
    {
        return view('master.visi.edit', compact('visi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visi $visi)
    {
        Visi::where('id', $visi->id)->update([
            'visi_number' => $request->visi_number,
            'visi_detail' => $request->visi_detail
        ]);

        return redirect()->route('visi.index')
            ->with('success', 'Visi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visi $visi)
    {
        $visi->delete();

        return redirect()->route('visi.index')
            ->with('success', 'Visi deleted successfully');
    }
}
