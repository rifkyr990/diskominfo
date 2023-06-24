<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Str;
use File;
use App\Services\UploadService;

class BannerController extends Controller
{

    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.banner.create');
        
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'     => 'required',
            'btn_txt'   => 'required',
            'image'       => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $image = $request->file('image');
        $image->storeAs('public/banner', $image->hashName());

       Banner::create([
        'judul'     => $request->judul,
        'btn_txt'   => $request->btn_txt,
        'image'       => $image->hashName(),
       ]);

        return redirect()->route('admin.banner.index')->with('success', 'Data berhasil diupload');
    }

    public function show($id)
    {

    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
       $request->request->add([
        'judul'     => $request->judul
       ]);
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Data Berhasil dihapus');
    }
}
