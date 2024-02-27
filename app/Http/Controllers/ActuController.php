<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actu_model;

class ActuController extends Controller
{
    public function afficherActualite($id){

        $actu = actu_model::with('paragraphe')->find($id);

        return view('front_end.actu', ['actu' => $actu]);
    }
}
