<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;

use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosmed = Sosmed::latest()->get();

        return view('master.sosmed.index', compact('sosmed'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sosmed = new Sosmed;
        return view('master.sosmed.tambah', compact(
            'sosmed'
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
        $sosmed = new Sosmed;
        $sosmed->sosmed_nama = $request->sosmed_nama;
        $sosmed->sosmed_link = $request->sosmed_link;
        $sosmed->sosmed_icon = $request->sosmed_icon;
        $sosmed->save();

        return redirect()->route('sosmed.index')
            ->with('success', 'Sosmed Created successfully');
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
    public function edit(Sosmed $sosmed)
    {
        return view('master.sosmed.edit', compact('sosmed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sosmed $sosmed)
    {
        Sosmed::where('id', $sosmed->id)->update([
            'sosmed_nama' => $request->sosmed_nama,
            'sosmed_link' => $request->sosmed_link,
            'sosmed_icon' => $request->sosmed_icon
        ]);

        return redirect()->route('sosmed.index')
            ->with('success', 'Sosmed updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosmed $sosmed)
    {
        $sosmed->delete();

        return redirect()->route('sosmed.index')
            ->with('success', 'Sosmed deleted successfully');
    }
}
