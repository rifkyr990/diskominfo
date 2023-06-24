<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\informasi;
use Illuminate\Support\Facades\Storage;
use Str;
use File;
use App\Services\UploadService;

class informasiController extends Controller
{

    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    
    public function index()
    {
        $informasi = informasi::all();
        return view('admin.informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('admin.informasi.create');
        
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'     => 'required',
            'btn_txt'   => 'required',
            'foto'       => 'required|foto|mimes:png,jpg,jpeg',
        ]);
        $image = $request->file('image');
        $image->storeAs('public/informasi', $image->hashName());

       informasi::create([
        'judul'     => $request->judul,
        'btn_txt'   => $request->btn_txt,
        'image'       => $image->hashName(),
       ]);

        return redirect()->route('admin.informasi.index')->with('success', 'Data berhasil diupload');
    }

    public function show($id)
    {

    }

    public function edit(informasi $informasi)
    {
        return view('admin.informasi.edit', compact('banner'));
    }

    public function update(Request $request,informasi $informasi)
    {
       $request->request->add([
        'judul'     => $request->judul
       ]);
    }

    public function destroy(informasi $informasi)
    {
        $informasi->delete();
        return redirect()->route('admin.informasi.index')->with('success', 'Data Berhasil dihapus');
    }
}
