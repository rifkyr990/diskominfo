@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')
<!-- Grid -->
<div class="w3-row container" style="margin-top: 100px;">
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
        <!-- Blog entry -->
        <h2 class="fw-bold display-4">{{ $artikel->judul }}</h2>
        <p class="blog-post-meta">{{ $artikel->created_at }} by <a href="#" class="text-dark">{{ $artikel->user->name }}</a>
        </p>

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
                <div class="col-md-12 px-0">
                    <img src="{{ asset($artikel->getThumbnail()) }}" class="card-img-top w-100" alt="...">
                    <div class="w-100 my-3 mt-5">
                        {!! $artikel->deskripsi !!}
                    </div>
                </div>
            </div>

        </main>
        </hr>
        <hr />
        <!--berita-->
    </div>

    <!-- Introduction menu -->
    <div class="w3-col l4">
        <!-- About Card -->
        <hr />

        <!-- Posts -->
        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4 class="fw-bold">berita terpopuler</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
                @foreach($posts->shuffle() as $berita)
                    <li class="w3-padding-5">
                        <!-- <img src="{{ asset($berita->getThumbnail()) }}" alt="Image" class="w3-left w3-margin-right"
                            style="width: 40px" /> -->
                        <span class="w3-medium"><a href="{{ route('artikel.show',$berita->slug) }}" class="text-dark text-decoration-none">{{ $berita->judul }}</a></span><br />
                        <!-- <span>{!! $berita->deskripsi !!}</span> -->
                    </li>
                @endforeach
            </ul>
        </div>
        <hr />
        <!-- Posts -->
        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4 class="fw-bold">berita terkini</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
                @foreach($posts->shuffle() as $berita)
                    <li class="w3-padding-5">
                        <!-- <img src="{{ asset($berita->getThumbnail()) }}" alt="Image" class="w3-left w3-margin-right"
                            style="width: 40px;" /> -->
                        <span class="w3-medium"><a href="{{ route('artikel.show',$berita->slug) }}" class="text-dark text-decoration-none">{{ $berita->judul }}</a> -->
                    </li>
                @endforeach
            </ul>
        </div>
        <hr />
        <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
</div>
<br />
<!-- END w3-content -->
</div>
</main>
@endsection
