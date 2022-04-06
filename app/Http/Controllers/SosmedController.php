<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(),[
            'sosmed_nama' => 'required',
            'sosmed_link' => 'required',
            'sosmed_icon' => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->route('sosmed.create')
            ->with('failed', 'User Create Not Success');
        }
         // upload image
        $file = $request->file('sosmed_icon');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/sosmed');
        $file->move($file_path, $file_name);

       //create user
        Sosmed::create([
            'sosmed_nama' => $request['sosmed_nama'],
            'sosmed_link' => $request['sosmed_link'],
            'sosmed_icon' => $file_name
        ]);

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
    public function update(Request $request, $sosmed)
    {
       $validator = Validator::make($request->all(),[
            'sosmed_icon' => 'required|file|image|mimes:jpeg,png,jpg,svg|max:2048'
       ]);
       if ($validator->fails()) {
            return redirect()->route('sosmed.create')
            ->with('failed', 'User Update Not Success');
        }

        $sosmeds = Sosmed::find($sosmed);
        if ($request->hasFile('sosmed_icon')) {
            $file = $request->file('sosmed_icon');
            $file_name = $file->hashName();
            $file_path = storage_path('app/public/uploads/sosmed');
            $file->move($file_path,$file_name);

            Storage::delete('public/uploads/sosmed/'.$file_name);

            $sosmeds->update([
                'sosmed_nama' => $request['sosmed_nama'],
                'sosmed_link' => $request['sosmed_link'],
                'sosmed_icon' => $file_name
            ]);

        }else {
            $sosmeds->update([
                'sosmed_nama' => $request['sosmed_nama'],
                'sosmed_link' => $request['sosmed_link']
            ]);
        }

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
