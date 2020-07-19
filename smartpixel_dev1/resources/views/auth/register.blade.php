@extends('layouts.app')
@section('title', __('Registration'))
@section('content')
<div class="page-body">
        <div class="wrapper">
        </div>
        <div class="page">
            <section class="signup-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3 class="mb-0">We're glad to have you</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 signup-body page-sub-title order-last"
                             id="page-border-2">
                            <h4>Create Your Account</h4>
                            <div class="signup-heading">
                                <div class="media">
                                    <img src=" {{ asset('img/img_2.jpg') }}" alt="No Image" class="img-thumbnail">
                                    <div class="media-body col-lg-9">
                                        <p>
                                            Friend, things will never remain the same for you. God has made all things
                                            new
                                            for
                                            you, so live the life of freshness. Forget about the losses of yesterday and
                                            focus
                                            on the potentials and possibilities of today. Do not allow anything hold you
                                            back
                                            in 2019. Be determined to make it against all odds
                                        </p>
                                        <p>
                                            Zach Efron - Team Lead @ Fricapix
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 signup-registration order-first order-lg-last"
                             id="page-border-3">
                            <form method="post" action="{{ route('register') }}">
                        {{csrf_field ()}}
                                <a
                                        href="{{url ('auth/google')}}"
                                        type="button"
                                        id="google-button"
                                        class="btn btn-lg btn-block mt-0"
                                >
                                    <img width="20px" style="margin-right:8px" alt="Google sign-in"
                                         src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/157px-Google_%22G%22_Logo.svg.png"/>
                                    Signup with Google
                                </a>
                                <p class="text-center my-4">Or</p>
                                <div class="form-group mb-4">
                                    <div class="form-row input-names">
                                        <div class="col-md-6">
                                            <label for="firstname">First Name <span> *</span>
                                            </label>
                                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="First Name"  name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus/>
                                            @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastname">Last Name <span> *</span>
                                            </label>
                                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Last Name"  name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus/>
                                            @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email">
                                        Email<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="mail@example.com" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password">
                                        Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input
                                               autocomplete="new-password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               id="password" name="password"
                                               placeholder="Kindly choose a convenient password"
                                               required
                                               type="password"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" id="button-addon2" type="button">
                                                <span class="fas fa-eye-slash"></span>
                                            </button>
                                        </div>
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <small
                                            id="passwordHelpBlock"
                                            class="form-text text-muted mb-4"
                                    >
                                        <p class="mt-2 small">
                                            Your password must be at least 8 characters and contain
                                            uppercase, lowercase letters and numbers
                                        </p>
                                    </small>
                                    <label for="exampleInputPassword1">
                                        Confirm Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input aria-describedby="button-addon2" autocomplete="new-password"
                                               class="form-control"
                                               name="password_confirmation"
                                               placeholder="Confirm password" required
                                               type="password"/>
                                    </div>
                                </div>
                            <small
                                    id="passwordHelpBlock"
                                    class="form-text text-muted mb-4"
                            >
                                <p class="signup-ag">
                                    By clicking the 'Create Account' button below, you agree
                                    to Fricapix
                                    <a href="#">Terms and Conditions</a>,
                                    <a href="#">Copyright Policies</a> as well as
                                    <a href="#">Privacy Policy</a>
                                </p>
                            </small>
                                <button type="submit" id="submit-button" class="btn btn-lg btn-block">
                                {{ __('Register') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
