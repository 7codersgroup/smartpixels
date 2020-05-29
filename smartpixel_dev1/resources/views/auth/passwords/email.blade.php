@extends('layouts.app')

@section('content')
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror"
                                       id="email" name="email" required type="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}


<div class="page-body">
    <div class="wrapper">

    </div>
    <div class="page">
        <section class="pr-page">
            <div class="container-fluid password-reset">
                <div class="row">
                    <div class="col-md-12 page-main-title" id="page-border">
                        <h3>Request Password Reset</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-body page-sub-title order-last order-lg-first" id="page-border-2">

                    </div>
                    <div class="col-md-6 pr-registration" id="page-border-3">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="email">{{__('Email Address ')}} <span> *</span>
                                    </label>
                                    <input autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror"
                                           id="email" name="email" required type="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <button type="submit" id="submit-button" class="btn btn-lg btn-block">
                                        {{__('Request Reset')}}
                                    </button>
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
