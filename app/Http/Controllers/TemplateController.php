<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function Video()
    {
        return view('front_end.video'); 
    }

    public function actu()
    {
        return view('front_end.actu'); 
    }

    public function equipement()
    {
        return view('front_end.equipement'); 
    }
}
