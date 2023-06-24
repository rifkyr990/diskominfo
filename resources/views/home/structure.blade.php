@extends('layouts.frontend.app',[
    'title' => 'Struktur Organisasi',
])
@section('content')
<main style="margin-left: -100px;">
    <div class="row">
        <div class="tree" style="margin-top: 100px;">
          <ul>
            <li>
              <a href="#"><img src="{{asset('struktur_organisasi')}}/images/1.jpg" /><span>Child</span></a>
              <ul>
                <li>
                  <a href="#"
                    ><img src="{{asset('struktur_organisasi')}}/images/2.jpg" /><span>Grand Child</span></a
                  >
                  <ul>
                    <li>
                      <a href="#"
                        ><img src="{{asset('struktur_organisasi')}}/images/3.jpg" /><span
                          >Great Grand Child</span
                        ></a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{asset('struktur_organisasi')}}/images/4.jpg" /><span
                          >Great Grand Child</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#"
                    ><img src="{{asset('struktur_organisasi')}}/images/5.jpg" /><span>Grand Child</span></a
                  >
                  <ul>
                    <li>
                      <a href="#"
                        ><img src="{{asset('struktur_organisasi')}}/images/6.jpg" /><span
                          >Great Grand Child</span
                        ></a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{asset('struktur_organisasi')}}/images/7.jpg" /><span
                          >Great Grand Child</span
                        ></a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{asset('struktur_organisasi')}}/images/8.jpg" /><span
                          >Great Grand Child</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#"
                    ><img src="{{asset('struktur_organisasi')}}/images/9.jpg" /><span>Grand Child</span></a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </main>
    @endsection