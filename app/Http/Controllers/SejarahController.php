<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Sejarah;
use App\Models\SejarahModel;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::latest()->get();

        return view('master.sejarah.index', compact('sejarah'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sejarah = new Sejarah;
        return view('master.sejarah.tambah', compact(
            'sejarah'
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
         $sejarah = new Sejarah;
        $sejarah->sejarah_judul = $request->sejarah_judul;
        $sejarah->sejarah_detail = $request->sejarah_detail;
        $sejarah->sejarah_image = $request->sejarah_image;
        $sejarah->save();

        return redirect()->route('sejarah.index')
            ->with('success', 'Sejarah Created successfully');
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
    public function edit(Sejarah $sejarah)
    {
        return view('master.sejarah.edit', compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah)
    {
         Sejarah::where('id', $sejarah->id)->update([
            'sejarah_judul' => $request->sejarah_judul,
            'sejarah_detail' => $request->sejarah_detail,
            'sejarah_image' => $request->sejarah_image
        ]);

        return redirect()->route('sejarah.index')
            ->with('success', 'sejarah updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        $sejarah->delete();

        return redirect()->route('sejarah.index')
            ->with('success', 'Sejarah deleted successfully');
    }
}
