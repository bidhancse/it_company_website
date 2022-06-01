@extends('layouts.app')
@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="wrap">

                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4" style="font-family:Consolas;"><b><span class="text-warning">Admin</span> Login</b></h3>
                        </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                       @csrf

                       <div class="form-group mt-3">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="form-control-placeholder" for="username">Email</label>

                    </div>
                    <div class="form-group">

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="form-control-placeholder" for="password">Password</label>
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-dark submit px-3" style="border-radius: 0px; font-size: 20px; background: #000; color: orange;">Sign In</button>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
</div>
</div>
</div>


@endsection
