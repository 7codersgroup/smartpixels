@extends('layouts.app')

@section('content')

<div class="page-body">
        <div class="wrapper">

        </div>
        <div class="page">
            <section class="login-page">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 page-main-title" id="page-border">
                                <h3 class="mb-0">We're glad to have you back</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 login-body page-sub-title order-last order-lg-first" id="page-border-2">
                                <h4>Log into your account</h4>
                                <div class="login-heading mt-lg-5 mb-lg-5 mb-0">
                                    <ul>
                                    @if (Route::has('password.request'))
                                        <li class="my-3"><a href="{{ route('password.request') }}">Forgot password?</a></li>
                                    @endif    
                                        <li class="my-3"><a href="{{ route('register') }}">Create an account</a></li>
                                    </ul>
                                </div>
                                <div class="login-footer">
                                    <ul>
                                        <li><a href="terms-of-use.html">Term of Use</a></li>
                                        <li><a href="privacy-policy.html">Policy</a></li>
                                        <li><a href="#" title="Contact Support">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 login-registration" id="page-border-3">
                                <form method="POST" action="{{ route('login') }}" id="normal_auth">
                                @csrf
                                    <div class="form-group mb-4">
                                        <label for="exam">Email Address <span> *</span>
                                        </label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">
                                            Password<span> *</span>
                                        </label>
                                        <div class="input-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                               aria-describedby="button-addon2" name="password" required
                                               autocomplete="current-password"/>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                    <i class="fas fa-eye-slash"></i>
                                                </button>
                                            </div>
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <p class="my-2 font-13 cursor d-lg-none"><a
                                                        href="{{ route('password.request') }}">Forgot
                                                    password?</a></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-right text-danger my-2 font-13 cursor" id="magic_link">Login
                                                with magic link <i class="fa fa-angle-double-right"></i></p>
                                        </div>
                                    </div>

                                    <button
                                            type="button"
                                            id="google-button"
                                            class="btn btn-lg btn-block mt-3"
                                    >
                                        <img width="20px" style="margin-right:8px" alt="Google sign-in"
                                             src="img/512px-Google_Logo.svg"/>
                                        Login with Google
                                    </button>

                                    <p class="text-center my-2">Or</p>


                                    <button type="submit" id="submit-button" class="btn btn-lg btn-block mt-0">
                                        Login
                                    </button>

                                </form>

                                <form class="none" method="post" action="" id="magic_link_wrapper">
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <p class="my-2 font-13 text-danger cursor" id="magic_link_return"><i
                                                        class="fa fa-angle-double-left"></i> Go back</p>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="magic_link_email">Email Address <span> *</span>
                                        </label>
                                        <input name="magic_link_email" type="email" class="form-control"
                                               placeholder="name@example.com"/>
                                    </div>

                                    <button type="submit" id="submit-button" class="btn btn-lg btn-block mt-0">
                                        Submit
                                    </button>

                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <p class="my-2 font-13 text-success">You will receive a mail with your magic
                                                link</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>
@endsection
