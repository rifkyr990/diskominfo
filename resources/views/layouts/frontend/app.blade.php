<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel Website</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link
            rel="stylesheet"
            href="https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Raleway"
        />

        <link
            rel="stylesheet"
            href="struktur_organisasi/css/style.css"
        />

        <style>
            a {
                color:white !important
            }

            ul > li > a > .link-secondary{
                color: white !important;
            }

            .bg-bikinan{
                width:100%;
                background-color:grey;
            }

            a.dropdown-item{
                background-color: green !important;
            }

            ul.dropdown-menu.show{
                background-color: green !important;
            }

            h4.card-title{
                color:black;
            }

            p.card-text{
                color:black;
            }

            .page-item>a.page-link{
                color: black !important;
            }
        </style>

        <link rel="stylesheet" href="{{asset('asset')}}/struktur_organisasi/css/style.css">

        <link rel="stylesheet" href="{{asset('pelayanan/style.css')}}">
        <script src="{{asset('pelayanan/script.js')}}"></script>
    </head>
    <body style="background-color:#afd3ae !important">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        {{-- <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                {{-- <a href="#"><span>Phone:</span> +1 123 321 456 654</a>
                <a href="#"><span>Email:</span> colorlibe@example.com</a> --}}
            </div>
            <!-- Follow Us -->
            {{-- <div class="follow-us">
                <span>Follow us</span>
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div> 
        </div> --}}

        <!-- Navbar Area -->
        @include('layouts.frontend.navbar')
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend.footer')
    <!-- ##### Footer Area End ##### -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <script>
    $( document ).ready(function() {
        <?php
            if(isset($artikel)){
                $i = 0;
                foreach($artikel as $art){
                    ?>
                    console.log( "ready!" );
                    deskripsi<?php echo $i ?> = document.getElementById('deskripsi<?php echo $i ?>').value;
                    let html<?php echo $i ?> = document.getElementById("deskripsi_output<?php echo $i ?>").innerHTML = deskripsi<?php echo $i ?>.substr(3,10)+'...';
                    <?php 
                    $i++;
                }
            } 
        ?>
    });
    </script>
    </body>
</html>