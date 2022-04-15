<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::latest()->get();

        return view('master.about.index', compact('about'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = new About;
        return view('master.about.tambah', compact(
            'about'
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
        $file = $request->file('about_images');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/about');
        $file->move($file_path, $file_name);

       //create user
        About::create([
            'about_desc' => $request['about_desc'],
            'about_images' => $file_name
        ]);

        return redirect()->route('about.index')
            ->with('success', 'About Created successfully');
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
    public function edit(About $about)
    {
       return view('master.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $about)
    {
         $abouts = About::find($about);
        
        if ($request->hasFile('about_images')) {
            $file = $request->file('about_images');
            $file_name = $file->hashName();
            Storage::delete('public/uploads/about/'.$request->about_images);
            $file_path = storage_path('app/public/uploads/about');
            $file->move($file_path,$file_name);

            

            $abouts->update([
                'about_desc' => $request['about_desc'],
                'about_images' => $file_name
            ]);

        }else {
            $abouts->update([
                'about_desc' => $request['about_desc']
            ]);
        }

        return redirect()->route('about.index')
            ->with('success', 'about updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('about.index')
            ->with('success', 'About deleted successfully');
    }
}
