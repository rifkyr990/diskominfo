@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')
<!-- Grid -->
<div class="w3-row container" style="margin-top: 50px;">
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
        <!-- Blog entry -->
        <p class="h1 mt-4">{{ $artikel->judul }}</p>
        <p class="blog-post-meta">January 1, 2021 by <a href="#" class="text-dark">{{ $artikel->user->name }}</a>
        </p>

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
                <div class="col-md-6 px-0">
                    <img src="{{ asset($artikel->getThumbnail()) }}" class="card-img-top w-100" alt="...">
                    <div class="lead my-3">
                        {!! $artikel->deskripsi !!}
                    </div>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
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
                <h4>berita terpopuler</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
                @foreach($posts->shuffle() as $berita)
                    <li class="w3-padding-5">
                        <img src="{{ asset($berita->getThumbnail()) }}" alt="Image" class="w3-left w3-margin-right"
                            style="width: 50px" />
                        <span class="w3-medium">{{ $berita->judul }}</span><br />
                        <!-- <span>{!! $berita->deskripsi !!}</span> -->
                    </li>
                @endforeach
            </ul>
        </div>
        <hr />
        <!-- Posts -->
        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4>berita terkini</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
                @foreach($posts->shuffle() as $berita)
                    <li class="w3-padding-5">
                        <img src="{{ asset($berita->getThumbnail()) }}" alt="Image" class="w3-left w3-margin-right"
                            style="width: 50px" />
                        <span class="w3-medium">{{ $berita->judul }}</span><br />
                        <!-- <span>{!! $berita->deskripsi !!}</span> -->
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
