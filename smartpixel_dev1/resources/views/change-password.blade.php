@extends('layouts.app')

@section('title', __('African Stock Images'))
@section('content')

    <div class="page-body">
        <div class="wrapper">

        </div>
        <div class="page">
            <div class="cp-image-1">
                <img src="{{asset ('./img/lock-1.png')}}" alt="">
            </div>
            <div class="cp-image-2">
                <img src="{{asset ('./img/lock-1.png')}}" alt="">
            </div>
            <section class="cp-page">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <i class="fas fa-lock fa-7x"></i> -->
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3 class="mb-0">Account Password Setup</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 cp-body page-sub-title order-last order-lg-first" id="page-border-2">
                            <h4>Change Your Password</h4>
                            <div class="cp-footer">
                                <ul>
                                    <li><a href="terms-of-use.html">Term of Use</a></li>
                                    <li><a href="privacy-policy.html">Policy</a></li>
                                    <li><a href="#" title="Contact Support">Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 cp-registration" id="page-border-3">
                            <form method="post" action="{{ route('change.password') }}">
                                @csrf
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                @endforeach
                                <div class="form-group">
                                    <label for="exampleInputPassword1">
                                        Old Password<span> *</span>
                                    </label>
                                    <div class="input-group mb-4">
                                        <input type="password" class="form-control" name="current_password"
                                               placeholder="Please input old password" autocomplete="current-password"
                                               aria-describedby="button-addon2"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                <span class="fas fa-eye-slash"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <label for="exampleInputPassword1">
                                        New Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="new_password"
                                               placeholder="Kindly choose a convenient password"
                                               autocomplete="current-password"
                                               aria-describedby="button-addon2"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                                <span class="fas fa-eye-slash"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                                        <p class="mt-2 small text-danger">
                                            Your password must be at least 8
                                            characters and contain uppercase, lowercase letters and numbers
                                        </p>
                                    </small>
                                    <label for="exampleInputPassword1">
                                        Confirm Password<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="new_confirm_password"
                                               autocomplete="current-password" class="form-control"
                                               placeholder="Comfirm password"
                                               aria-describedby="button-addon2"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <button type="submit" id="cancel-button"
                                                class="btn btn-block btn-lg">Cancel
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit"
                                                id="submit-button" class="btn btn-block btn-lg">Change
                                            Password
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
