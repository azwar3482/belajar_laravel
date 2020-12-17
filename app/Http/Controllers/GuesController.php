<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class GuesController extends Controller
{
    public function index(){
        $album = Album::all();
        return view('welcome', compact('album'));
    }
    public function galerifoto($title){
        $albums = Album::where('album_seo', $title)->first();
        $galeris = $albums->photos()->orderBy('id', 'desc')->paginate(6);
        return view('gallery', compact('albums', 'galeris'));
    }
    public function likefoto(Request $request, $id){
        $galeri = Galeri::find($id);
        $galeri->increment('suka');
        return back();
    }
}
