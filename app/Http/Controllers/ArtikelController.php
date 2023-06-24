<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtikelRequest as Request;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
    	$artikel = Artikel::with(['user','kategoriArtikel'])->latest()->take(4);

    	return view('artikel.index',compact('artikel'));
    }

    public function show(Artikel $artikel)
    {
        $posts = Artikel::take(4)->get();

    	return view('artikel.show',compact('artikel', 'posts'));
    }

    public function search(Request $request)
    {	
    	$artikel = Artikel::with(['user','kategoriArtikel'])->where(function($query) use ($request){
    		$query->where('judul','like','%'.$request->keyword.'%')
            ->orWhere('deskripsi','like','%'.$request->keyword.'%');
    	})->paginate(4);

    	return view('artikel.index',compact('artikel'));
    }
}
