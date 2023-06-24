@extends('layouts.auth')

@section('title')
<title>LOGIN </title>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <h3>Diskominfo </h3>
                    <p class="text-muted center">LOGIN</p>


                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-user"></i>
                                </span>
                            </div>


                            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text"
                                name="email" placeholder="Email Address" value="{{ old('email') }}" autofocus required>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-lock"></i>
                                </span>
                            </div>
                            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="password"
                                name="password" placeholder="Password" required>
                        </div>
                        <div class="row">
                            @if (session('error'))
                            <div class="col-md-12">
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                            @endif

                            <div class="col-6">
                                <button class="btn btn-primary px-4">Login</button>
                            </div>
                        <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                        </div>
                    </form>
                    {{-- sikawan --}}
                   
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                <div class="card-body text-center">
                    <h3> KABUPATEN BEKASI</h3>
                    <img src=" {{ asset('/img/logo.png') }}" alt="Kabupaten bekasi" width="250px" height="auto">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
</script>