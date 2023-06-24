@extends('layouts.backend.app',[
    'title' => 'Manage informasi',
    'contentTitle' => 'Manage informasi',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.informasi.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Judul</th>
                  <th class="text-center">Image</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($informasi as $art)
                <tr>
                  <td class="text-center">{{ $no++ }}</td>
                  <td class="text-center">{{ $art->judul }}</td>
                 {{-- <td> <img src="asset{{ storage_path().'/storage/informasi'.$art->image }}" alt="" title=""></a></td> --}}
                 <td class="text-center"><img src="{{asset('storage/informasi/'.$art->image)}}" width="50" height="auto"/>
              

                  <td class="text-center">
                    <center><div class="row ml-2" >
                        <a href="{{ route('admin.banner.edit',$art->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                        
                        <form method="POST" action="{{ route('admin.informasi.destroy',$art->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form>
                    </div>
                    </center>
                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>
@endpush