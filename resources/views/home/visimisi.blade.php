@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<main class="container">
 <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
   <div class="col-md-6 px-0">
     <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
     <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
     <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
   </div>
 </div>

     <article class="blog-post">
       <h2 class="blog-post-title mb-1">Visi Misi Diskominfo </h2>
      

       <p></p>
       <blockquote>
         <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
       </blockquote>
</main>
@endsection
