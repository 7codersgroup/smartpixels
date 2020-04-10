@extends('layouts.app')

@section('content')
<div class="page-body">
        <div class="wrapper">
        </div>
        <div class="page">
            <section class="signup-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3>We're glad to have you</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 signup-body page-sub-title" id="page-border-2">
                            <h4>Create Your Account</h4>
                            <div class="signup-heading">
                                <div class="media">
                                    <img src=" {{ asset('img/img_2.jpg') }}" alt="No Image" class="mr-3 img-thumbnail">
                                    <div class="media-body">
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
                                            Zach Efron - Team Lead @ Smart Pixels
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="signup-footer">
                                <ul>
                                    <li>Term of Use</li>
                                    <li>Policy</li>
                                    <li>Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 signup-registration" id="page-border-3">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <div class="form-group mb-4">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="firstname">First Name <span> *</span>
                                            </label>
                                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="First Name"  name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus/>
                                            @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="col">
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
                                    <label for="country">
                                        Country<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <select id="country" class="form-control" id="exampleFormControlSelect1"
                                            aria-describedby="button-addon1" name="country">
                                            <option>...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <div class="input-group-append ">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon">
                                                <span class="fas fa-angle-down fa-lg"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="phone">
                                        Phone Number<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input id="phone" type="tel" class="form-control  @error('phone') is-invalid @enderror" placeholder="(+234) 80 SMARTPIXELS" name="phone"/>
                                    </div>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputPassword1">
                                        Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password""
                                            placeholder="Kindly choose a convenient password"
                                            aria-describedby="button-addon2" />
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                <span class="fas fa-eye-slash"></span>
                                            </button>
                                        </div>
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <!-- <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                                        <p class="mt-2">
                                            Your password must be at least 8
                                            characters and contain uppercase, lowercase letters and numbers
                                        </p>
                                    </small>
                                    <small class="form-text text-muted mb-4">
                                        <span>AT LEAST 8 CHARACTERS</span><br>
                                        <span id="lf-span">UPPERCASE</span><br>
                                        <span>LOWERCASE</span><br>
                                        <span>NUMBER</span>
                                    </small> -->
                                    <label for="exampleInputPassword1">
                                        Confirm Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Comfirm password" name="password_confirmation" required autocomplete="new-password"
                                            ria-describedby="button-addon2" />
                                    </div>
                                </div>
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
