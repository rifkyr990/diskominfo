@extends('layouts.frontend.app',[
    'title' => 'Agenda',
])

@section('content')
<div class="container mt-3">
<div class="card w-100" style="border-radius: 0px">
    <div class="card-body">
        <h5 class="card-title" style="background: #e3f2fd; display: inline-block; padding: 10px 20px; border-radius:30px; color: #2196f3">Agenda</h5>
        <div>
            <div class="text-center">Agenda Kecamatan cabangbungin</div>
          <center>  <img src="{{ asset('img/logo.png')}}" width="50px" height="50px" ></center>
        </div>
        <div class="text-center">Kalender Agenda Kecamatan Cabangbungin</div>
    </div>
    <div class="text-center">Daftar Kegiatan</div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanggal Mulai Pelaksanan</th>
                <th>Tanggal Selesai Pelaksanan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp

            @foreach($agenda as $item)
 
            <tr>
                <td>{{ $no++}}</td>
                <td>{{ $item->judul}}</td>
                <td>{{ $item->tgl_mulai}}</td>
                <td>{{ $item->tgl_selesai}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@stop