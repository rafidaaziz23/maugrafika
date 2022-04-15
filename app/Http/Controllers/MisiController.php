<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misi = Misi::latest()->get();

        return view('master.misi.index', compact('misi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $misi = new Misi;
        return view('master.misi.tambah', compact(
            'misi'
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
        $misi = new Misi;
        $misi->misi_number = $request->misi_number;
        $misi->misi_detail = $request->misi_detail;
        $misi->save();

        return redirect()->route('misi.index')
            ->with('success', 'Misi Created successfully');
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
    public function edit(Misi $misi)
    {
        return view('master.misi.edit', compact('misi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misi $misi)
    {
        Misi::where('id', $misi->id)->update([
            'misi_number' => $request->misi_number,
            'misi_detail' => $request->misi_detail
        ]);

        return redirect()->route('misi.index')
            ->with('success', 'Misi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misi $misi)
    {
        $misi->delete();

        return redirect()->route('misi.index')
            ->with('success', 'Misi deleted successfully');
    }
}
