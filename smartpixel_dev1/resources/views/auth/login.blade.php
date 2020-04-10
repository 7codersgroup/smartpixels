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
                            <h3>We're glad to have you back</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 login-body page-sub-title" id="page-border-2">
                            <h4>Log into your account</h4>
                            <div class="login-heading">
                                <ul>
                                @if (Route::has('password.request'))
                                   <li> <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a></li>
                                @endif
                                    <li><a class="" href="{{ route('register') }}">
                                        {{ __('Create an account') }}
                                    </a></li>
                                </ul>
                            </div>
                            <div class="login-footer">
                                <ul>
                                    <li>Term of Use</li>
                                    <li>Policy</li>
                                    <li>Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 login-registration" id="page-border-3">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="email">Email Address <span> *</span>
                                    </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">
                                        Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                            ria-describedby="button-addon2" name="password" required autocomplete="current-password"/>
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
                                <button type="submit" id="submit-button" class="btn btn-lg btn-block">
                                {{ __('Login') }}
                                </button>


                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
