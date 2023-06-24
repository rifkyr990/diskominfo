@extends('layouts.backend.app',[
    'title' => 'Tambah informasi',
    'contentTitle' => 'Tambah informasi'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Banner</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.informasi.store') }}">
            @csrf
            <div class="form-group">
                <label for="judul">Judul informasi</label>
                <input required="" type="" name="judul" placeholder="" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="btn_txt">link Button</label>
                <input required="" type="" name="btn_txt" placeholder=" contoh https:://bekasikab.go.id" class="form-control"> 
            </div>
            <div class="form-group col-lg-4 col-md-6">
                <label class="form-control-labe" for="image">Gambar</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
            </div>
                <div class="card-footer">
                    <button type="sumbit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    @stop