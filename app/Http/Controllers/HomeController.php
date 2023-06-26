<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Pengumuman;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        // $agendas = Agenda::all();
        // $pengumumans = Pengumuman::all();
        
    	return view('home.index',[
            'agenda' => Agenda::latest()->take(5)->get(),
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(3)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(5)->get(),
            'agendas' => Agenda::latest()->take(5)->get(),
            'pengumumans' => Pengumuman::latest()->get(),
            'banner'    => Banner::all(),
        ]);

        // return view('home.index',compact('banner','agendas','pengumumans'));
    }

    public function about()
    {
    	return view('home.about');
    }

    public function contact()
    {
    	return view('home.contact');
    }

    public function structure()
    {
    	return view('home.structure');
    }

    public function informasisetiapsaat()
    {
    	return view('home.informasisetiapsaat');
    }

    public function layanan()
    {
    	return view('home.layanan');
    }

    public function informasiberkala()
    {
    	return view('home.informasiberkala');
    }

    public function pageberita()
    {
        $artikel = Artikel::all();
    	return view('home.pageberita',compact('artikel'));
    }

    public function pagehukum()
    {
    	return view('home.pagehukum');
    }

    public function blog()
    {
    	return view('home.blog');
    }

    public function visimisi()
    {
    	return view('home.visimisi');
    }    
}


