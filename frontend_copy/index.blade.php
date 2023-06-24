@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<div class="home-slideshow">
    <div id="home_main-slider" class="carousel slide  main-slider">
      <ol class="carousel-indicators">
        <li data-target="#home_main-slider" data-slide-to="0" class="carousel-1"></li>
      </ol>
      <div class="carousel-inner">
        @foreach($banner as $items)
        <!-- slider images -->
        <div class="item image active">
          <img src="{{url('/')}}/storage/banner/{{$items->image}}/{{$items->slider_one}}" height="362" alt="{{$items->slider_one_title}}" title="Image Slideshow">
          <div class="slideshow-caption position-right">
            <div class="slide-caption">
              <div class="group-caption">
                <div class="content">
                  <span class="title_2">
                    {{$items->slider_one_title}}
                  </span>
                  <span class="caption">
                    {{$items->slider_one_description}}
                  </span>
                </div>
                <div class="flex-action"><a class="btn" href="{{$items->slider_one_link}}">{{$items->slider_one_button}}</a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- slider images -->
        @endforeach
      </div>
      <a class="left carousel-control" href="#home_main-slider" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#home_main-slider" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </div>
  </div>

@endsection