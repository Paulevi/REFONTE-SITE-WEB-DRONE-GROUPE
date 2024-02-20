<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesAndVideosController extends Controller
{
    public function images_actus()
    {
        $images = my_model::orderBy('created_at', 'desc')->take(3)->get();
        return view('accueil', ['images' => $images]);
    }
}
