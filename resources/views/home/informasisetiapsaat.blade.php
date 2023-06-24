@extends('layouts.frontend.app',[
    'title' => 'Struktur Organisasi',
])
@section('content')
<header class="w3-container w3-center w3-padding-32">
      
      </header>
      <p class="text-center">informasi setiap saat</p>
      
     <!-- Custom styles for this template -->
   <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="blog.css" rel="stylesheet">
 </head>
 <body>

   <!--table-->
   <div class="d-grid gap-3 col-6 mx-auto">
    <button class="btn btn-primary" type="button">informasi 1</button>
    <button class="btn btn-primary" type="button">informasi 2</button>
    <button class="btn btn-primary" type="button">informasi 3</button>
    <button class="btn btn-primary" type="button">informasi 4</button>
    <button class="btn btn-primary" type="button">informasi 5</button>
    <button class="btn btn-primary" type="button">informasi 6</button>

  </div>
<!--page-->

<nav aria-label="Page navigation example" style="margin-top: 50px">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link"style="color: black !important;">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#" style="color: black !important;">1</a></li>
      <li class="page-item"><a class="page-link" href="#"style="color: black !important;">2</a></li>
      <li class="page-item"><a class="page-link" href="#"style="color: black !important;">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#"style="color: black !important;">Next</a>
      </li>
    </ul>
  </nav>
@endsection