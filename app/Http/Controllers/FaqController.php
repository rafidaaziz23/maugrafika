<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::latest()->get();

        return view('master.faq.index', compact('faq'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq;
        return view('master.faq.tambah', compact(
            'faq'
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
       
        $faq = new Faq;
        $faq->faq_title = $request->faq_title;
        $faq->faq_detail = $request->faq_detail;
        $faq->save();

        return redirect()->route('faq.index')
            ->with('success', 'Faq Created successfully');
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
    public function edit(Faq $faq)
    {
         return view('master.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        Faq::where('id', $faq->id)->update([
            'faq_title' => $request->faq_title,
            'faq_detail' => $request->faq_detail
        ]);

        return redirect()->route('faq.index')
            ->with('success', 'Faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
         $faq->delete();

        return redirect()->route('faq.index')
            ->with('success', 'Faq deleted successfully');
    }
}
