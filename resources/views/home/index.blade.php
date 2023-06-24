@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')
<div class="container">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                        viewBox="0 0 24 24">
                        <title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5" />
                        <path d="M21 21l-5.2-5.2" />
                    </svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>
</div>

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('asset') }}/foto2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('asset') }}/sampul.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('asset') }}/foto2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-#afd3ae rounded">
                    <h4 class="fst-italic fw-bold">Agenda</h4>
                    <p class="mb-0"></p>
                    <ul class="w3-ul w3-hoverable w3-white">
                        @foreach($agendas as $agenda)
                            <li class="w3-padding-5">
                                <img src="https://i.ibb.co/XYtPzBK/computer-icons-calendar-date-event-table-afcca780f848808400b0d4199518e260.png" alt="Image" class="w3-left w3-margin-right" style="width: 55px" />
                                <span class="w3-medium fw-bold">{{$agenda->judul}}</span><br />
                                <span style="font-size: 10px;">{!! Str::limit($agenda->deskripsi) !!}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic fw-bold">Pemberitahuan</h4>
                    <ul class="w3-ul w3-hoverable w3-white">
                        @foreach($pengumumans as $pengumuman)
                            <li class="p-3">
                                <i class="fa fa-warning"></i>
                                <span class="w3-medium"><b>{{ $pengumuman->judul }}</b></span><br />
                                <span class="">{!! Str::limit($pengumuman->deskripsi) !!}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Berita</h3>
                <a class="btn btn-primary mb-3 mr-1" href="{{ route('pageberita') }}">
                    <span>Lihat semua</span>
                </a>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($artikel as $berita)
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('artikel.show',$berita->slug) }}">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="{{ asset($berita->getThumbnail()) }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $berita->judul }}
                                        </h4>
                                        <!-- <div class="card-text mt-3">
                                            {!! Str::limit($berita->deskripsi) !!}
                                        </div> -->
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

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
                <h2>Selamat Datang di diskominfo</h2>
                <a href="{{ route('artikel') }}" class="btn clever-btn">Berita</a>
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
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}"
data-slide-number="{{ $loop->index }}">
<img src="{{ asset('storage/banner/'. $sliderimage->image) }}" class="text-center"
    alt="slider-listing" style="width: 965px; height: 500px;">
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
</div> --}}

<div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">TENTANG diskominfo</div>
            <div class="card-body">

                <di class="row">
                    <di class="col-md-3">
                        <div><img src="{{ asset('img/kec.png') }}" width="200px" height="auto">
                        </div>
                        <div class="text-center">H. ASEP BUHORI. S, S.KM, M.Kes, M.Si, M.IP</div>
                    </di>
                    <div class="col-md-9">
                        diskominfo merupakan dinas komunikasi informasi dan statistik yang berdiri dilingkungan pemda
                        kab bekasi
                </di>
                <p class="lead">


                </p>
            </div>
        </div>
    </div>
</div>
@stop
