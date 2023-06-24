@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<!-- Grid -->
<div class="w3-row" style="margin-top: 50px;">
        <!-- Blog entries -->
        <div class="w3-col l8 s12">
          <!-- Blog entry -->
          <p class="h1">sub judul</p>
      <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

          <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
              <div class="col-md-6 px-0">
                <img src="..." class="card-img-top" alt="...">
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
              </div>
            </div>
           
            
                
              
                <article class="blog-post">
                  
                  <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                  
                  <h2>Inline HTML elements</h2>
                  <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
                  <ul>
                    <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                    <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                    <li>Abbreviations, like <abbr title="HyperText Markup Language">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
                    <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                    <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                    <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
                  </ul>
                  <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                  
           
               
                 
               
                  
           
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
              <li class="w3-padding-5">
                <img
                  src=""
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Lorem</span><br />
                <span>Sed mattis nunc</span>
              </li>
              <li class="w3-padding-5">
                <img
                  src=""
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Ipsum</span><br />
                <span>Praes tinci sed</span>
              </li>
              <li class="w3-padding-5">
                <img
                  src="/w3images/skies.jpg"
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Dorum</span><br />
                <span>Ultricies congue</span>
              </li>
              <li class="w3-padding-5 w3-hide-medium w3-hide-small">
                <img
                  src=""
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Mingsum</span><br />
                <span>Lorem ipsum dipsum</span>
              </li>
            </ul>
          </div>
          <hr />
          <!-- Posts -->
          <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
              <h4>berita terkini</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
              <li class="w3-padding-5">
                <img
                  src=""
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Lorem</span><br />
                <span>Sed mattis nunc</span>
              </li>
              <li class="w3-padding-5">
                <img
                  src=""
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Ipsum</span><br />
                <span>Praes tinci sed</span>
              </li>
              <li class="w3-padding-5">
                <img
                  src="/w3images/skies.jpg"
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Dorum</span><br />
                <span>Ultricies congue</span>
              </li>
              <li class="w3-padding-5 w3-hide-medium w3-hide-small">
                <img
                  src=""
                  alt="Image"
                  class="w3-left w3-margin-right"
                  style="width: 20px"
                />
                <span class="w3-medium">Mingsum</span><br />
                <span>Lorem ipsum dipsum</span>
              </li>
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