@extends('layouts.frontend.app',[
'title' => 'Home',
])
@section('content')
<!-- Header -->
<div style="background-color: black; opacity: 0.1; width: auto; height: 300px;margin-top:-300px">

</div>


<main class="container" style="margin-top:30px">
    <header class="w3-container w3-center w3-padding-32">
    </header>

    <!-- Grid -->
    <div class="w3-row" style="margin-top: -70px;">
        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->

            </hr>
            <hr />
            <!--berita-->
            <h2 class="fw-bold">berita terkini</h2>
            <div class="row">
                @php$i=0; @endphp
                    @foreach($artikel as $art)
                        <div class="col-md-6 mt-2">
                            <div class="card shadow-sm">

                                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

                                <img src="{{ asset($art->getThumbnail()) }}" class="img-responsive card-img-top"
                                    height="200" alt="">
                                <div class="card-body">
                                    <p class="card-text">
                                        <input type="text" value="{{ $art->deskripsi }}" class="d-none">
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <!-- <small class="text-body-secondary">9 mins</small> -->
                                        <small class="text-body-secondary">{{ $art->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php$i++ @endphp
                        @endforeach
            </div>
        </div>



        <!-- Introduction menu -->
        <div class="w3-col l4">
            <!-- About Card -->

            <hr />

            <!-- Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    @foreach($artikel->shuffle() as $posts)
                        <li class="w3-padding-5">
                            <!-- <img src="{{ asset($posts->getThumbnail()) }}" alt="Image" class="w3-left w3-margin-right"
                                style="width: 20px" /> -->
                            <span class="w3-medium"><a href="{{ route('artikel.show',$posts->slug) }}" class="text-dark text-decoration-none">{{ $posts->judul }}</a></span><br />
                            <span></span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <hr />
            <!-- Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    @foreach($artikel->shuffle() as $posts)
                        <li class="w3-padding-5">
                            <!-- <img src="{{ asset($posts->getThumbnail()) }}" alt="Image" class="w3-left w3-margin-right"
                                style="width: 20px" /> -->
                            <span class="w3-medium"><a href="{{ route('artikel.show',$posts->slug) }}" class="text-dark text-decoration-none">{{ $posts->judul }}</a></span><br />
                            <span></span>
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
<!--page-->

<nav aria-label="Page navigation example" style="margin-top: 50px">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" style="color: black !important;">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#" style="color: black !important;">1</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color: black !important;">2</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color: black !important;">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" style="color: black !important;">Next</a>
        </li>
    </ul>
</nav>
@endsection
