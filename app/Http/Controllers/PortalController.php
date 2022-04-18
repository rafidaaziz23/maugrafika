<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }
    public function aboutus()
    {
        return view('portal.aboutus');
    }
    public function faq(){
       $faq = Faq::all();
        return view('portal.faq',compact('faq'));
    }
}
