<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Sejarah;
use App\Models\SejarahModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

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
        
        //  $validator =Validator::make($request->all(),[
        //     'sejarah_judul' => 'required',
        //     'sejarah_link' => 'required',
        //     'sejarah_image' => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        // ]);
        // dd($request->all());
        // if ($validator->fails()) {
        //     return redirect()->route('sejarah.create')
        //     ->with('failed', 'User Create Not Success');
        // }
         // upload image
        $file = $request->file('sejarah_image');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/sejarah');
        $file->move($file_path, $file_name);

       //create user
        Sejarah::create([
            'sejarah_judul' => $request['sejarah_judul'],
            'sejarah_detail' => $request['sejarah_detail'],
            'sejarah_image' => $file_name
        ]);
        return redirect()->route('sejarah.index')
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
    public function update(Request $request, $sejarah)
    {
        $sejarahs = Sejarah::find($sejarah);
        
        if ($request->hasFile('sejarah_image')) {
            $file = $request->file('sejarah_image');
            $file_name = $file->hashName();
            Storage::delete('public/uploads/sejarah/'.$request->sejarah_image); 
            $file_path = storage_path('app/public/uploads/sejarah');
            $file->move($file_path,$file_name);

            

            $sejarahs->update([
                'sejarah_judul' => $request['sejarah_judul'],
                'sejarah_detail' => $request['sejarah_detail'],
                'sejarah_image' => $file_name
            ]);

        }else {
            $sejarahs->update([
                'sejarah_judul' => $request['sejarah_judul'],
                'sejarah_detail' => $request['sejarah_detail']
            ]);
        }


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
