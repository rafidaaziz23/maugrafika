<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $carousel = Carousel::latest()->get();

        return view('master.carousel.index', compact('carousel'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $carousel = new Carousel;
        return view('master.carousel.tambah', compact(
            'carousel'
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
        $file = $request->file('carousel_image');
        $file_name = $file->hashName();
        $file_path = storage_path('app/public/uploads/carousel');
        $file->move($file_path, $file_name);

       //create user
        Carousel::create([
            'carousel_nama' => $request['carousel_nama'],
            'carousel_image' => $file_name
        ]);

        return redirect()->route('carousel.index')
            ->with('success', 'Carousel Created successfully');
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
    public function edit(Carousel $carousel)
    {
         return view('master.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $carousel)
    {
        $carousels = Carousel::find($carousel);
        
        if ($request->hasFile('carousel_image')) {
            $file = $request->file('carousel_image');
            $file_name = $file->hashName();
            Storage::delete('public/uploads/carousel/'.$request->carousel_image); 
            $file_path = storage_path('app/public/uploads/carousel');
            $file->move($file_path,$file_name);

            

            $carousels->update([
                'carousel_nama' => $request['carousel_nama'],
                'carousel_image' => $file_name
            ]);

        }else {
            $carousels->update([
                'carousel_nama' => $request['carousel_nama'],
            ]);
        }

        return redirect()->route('carousel.index')
            ->with('success', 'Carousel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
         $carousel->delete();

        return redirect()->route('carousel.index')
            ->with('success', 'Carousel deleted successfully');
    }
}
