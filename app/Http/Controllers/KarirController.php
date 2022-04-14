<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Reqruitment;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karirs = Karir::latest()->get();

        return view('master.karir.index', compact('karirs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karir = new Karir;
        $req = new Reqruitment;
        $task = new Task;
        return view('master.karir.tambah',compact(
            'karir',
            'req',
            'task',
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
        $karir = Karir::create([
            'karir_position' => $request['karir_position'],
            'karir_detail' => $request['karir_detail'],
            'karir_type' => $request['karir_type'],
            // 'karir_is_active' => $request['karir_is_active'],
        ]);
        // dd($request->all());
        
        $jumlah_req = count($request['reqruitment_detail']);
        $jumlah_task = count($request['task_detail']);
        for($i = 0; $i < $jumlah_req ; $i++){
            Reqruitment::create([
                'karir_id' => $karir['id'],
                'reqruitment_detail' => $request['reqruitment_detail'][$i],
            ]);
        }
        
        for($j = 0; $j < $jumlah_task ; $j++){
            Task::create([
                'karir_id' => $karir['id'],
                'task_detail' => $request['task_detail'][$j],
            ]);
        }

        return redirect()->route('karir.index')
            ->with('success', 'Karir Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function show(Karir $karir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function edit(Karir $karir)
    {
        // return $karir;
        $karirs = Karir::find($karir);
        $req = Reqruitment::where(['karir_id' => $karir['id']])->get();
        // $req = Reqruitment::all();
        $task = Task::where(['karir_id' => $karir['id']])->get();
        // $task = Task::all();
        return view('master.karir.edit', compact('karir','req','task'));
    }
// {
//     "id":37,
//     "karir_position":"Developer",
//     "karir_detail":"Ngoding Asyeek",
//     "karir_type":"Full-Time",
//     "karir_is_active":1,
//     "created_at":"2022-04-14T18:42:54.000000Z",
//     "updated_at":"2022-04-14T18:42:54.000000Z"
// }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karir $karir)
    {
        Karir::where('id', $karir['id'])->update([
            'karir_position' => $request['karir_position'],
            'karir_detail' => $request['karir_detail'],
            'karir_type' => $request['karir_type'],
            // 'karir_is_active' => $request['karir_is_active'],
        ]);
        // dd($request->all());
        
        $jumlah_req = count($request['reqruitment_detail']);
        $jumlah_task = count($request['task_detail']);
        for($i = 0; $i < $jumlah_req ; $i++){
            Reqruitment::where('karir_id', $karir['id'])->update([
                'karir_id' => $karir['id'],
                'reqruitment_detail' => $request['reqruitment_detail'][$i],
            ]);
        }
        
        for($j = 0; $j < $jumlah_task ; $j++){
            Task::where('karir_id', $karir['id'])->update([
                'karir_id' => $karir['id'],
                'task_detail' => $request['task_detail'][$j],
            ]);
        }

        return redirect()->route('karir.index')
            ->with('success', 'Karir Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karir  $karir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karir $karir)
    {
        Reqruitment::where('karir_id', $karir['id'])->delete();
        Task::where('karir_id', $karir['id'])->delete();
        $karir->delete();

        return redirect()->route('karir.index')
            ->with('success', 'Karir deleted successfully');
    }
}
