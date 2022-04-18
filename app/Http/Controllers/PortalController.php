<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }
    
    public function aboutus()
    {
        $visi = Visi::all();
        $misi = Misi::all();
        return view('portal.aboutus', compact('visi','misi'));
    }
    public function faq(){
       $faq = Faq::all();
        return view('portal.faq',compact('faq'));
    }
}
