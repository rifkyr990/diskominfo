@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
{{-- <!-- ##### Hero Area Start ##### -->
<section class="" style="background-image: url(); height:500px;">
    <div>
        <img class="" src="{{ asset('img') }}/gedung1.jpeg" alt="" height="300">
    </div>
    <div class="container h-100" style="margin-top:-500px">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Selamat Datang di CABANGBUNGIN</h2>
                    <a href="{{ route('artikel')}}" class="btn clever-btn">Berita</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- ##### Hero Area End ##### --> --}}

{{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    {{-- <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img') }}/gedung1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img') }}/gedung1.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img') }}/gedung1.jpeg" alt="Third slide">
    </div> --}}

    {{-- @foreach($banner as $sliderimage)
    <div class="carousel-item {{$loop->first ? 'active' : ''}}" data-slide-number="{{ $loop->index }}">
        <img src="{{ asset('storage/banner/'. $sliderimage->image) }}" class="text-center" alt="slider-listing" style="width: 965px; height: 500px;">
    </div>       
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  --}}

<div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">TENTANG CABANGBUNGIN</div>
                        <div class="card-body">
            
                            <di class="row">
                                <di class="col-md-3">
                                    <div><img src="{{ asset('img/kec.png')}}" width="200px" height="auto"></div>
                                    <div class="text-center">H. ASEP BUHORI. S, S.KM, M.Kes, M.Si, M.IP</div>
                                </di>
                                <div class="col-md-9">
                                    Cabangbungin adalah sebuah kecamatan di Kabupaten Bekasi, Provinsi Jawa Barat, Indonesia. Kecamatan Cabangbungin berbatasan dengan Kabupaten Karawang di utara, kecamatan Muara Gembong di barat, kecamatan Pebayuran di timur, dan kecamatan Sukawangi di selatan.
                                </div>
                            </di>
                            <p class="lead">
                                
                                
                            </p>
                        </div>
        </div>
    </div>
</div>
@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
@endif

@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($artikel as $art)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{ $art->judul }}

                            <span class="badge badge-danger float-right">Author : {{ $art->user->name }}</span>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! Str::limit($art->deskripsi) !!}
                            </div>

                            <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                                <span class="badge badge-primary float-right">kategori : {{ $art->kategoriArtikel->nama_kategori }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif
@stop