@extends('layouts.app')

@section('title', __('Account Setup'))
@section('content')
<div class="page-body">
    <div class="wrapper">

    </div>
    <div class="page">
      <div class="account-image-1">
        <img src="{{asset ('./img/lock-1@2x.png')}}" alt="">
      </div>
      <div class="account-image-2">
        <img src="{{asset ('./img/smartphone-1.png')}}" alt="">
      </div>
      <div class="account-image-3">
        <img src="{{asset ('./img/id-card-1.png')}}" alt="">
      </div>
      <section class="accounts-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 page-main-title" id="page-border">
              <h3>Hello {{Auth::user()->firstname}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 accounts-body page-sub-title" id="page-border-2">
              <h4>My Account Setup</h4>
              <div class="accounts-heading">

                <div class="form-row mt-3 mb-5">
                  <div class="">
                    <button type="submit" id="verified" class="btn btn-block">Unverified</button>
                  </div>
                  <div class="">
                    <button type="submit" id="unverified" class="btn btn-block">verified</button>
                  </div>
                </div>
                <div class="accounts-content">
                  <p>
                    Friend, things will never remain the same for you. God has made all things new for
                    you, so live the life of freshness. Forget about the losses of yesterday and focus
                    on the potentials and possibilities of today. Do not allow anything hold you back
                    in 2019. Be determined to make it against all odds
                  </p>
                </div>

              </div>
              <div class="accounts-footer">
                <ul>
                  <li>Term of Use</li>
                  <li>Policy</li>
                  <li>Support</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 accounts-registration" id="page-border-3">
              <form>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-2">
                      <img src="{{asset ('./img/email.png')}}" alt="">
                    </div>
                    <div class="col-10">
                      <label>E-mail Verification <span></span></label><br>
                        @if  (Auth::user()->email_verified_at == null)
                        <label class="label-small">
                        Your e-mail has not been verified, click the "Send Mail" button to complete
                        the verification
                        </label>
                        @else
                            <label class="label-small">
                                Your e-mail has been verified.
                            </label>
                        @endif
                      <div class="form-row accounts-button">
                          @if  (Auth::user()->email_verified_at == null)
                        <div class="col-">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                            <form class="" method="POST" action="{{ route('verification.resend') }}">
                                {{csrf_field ()}}
                          <button type="submit" class="btn btn-normal btn-block">
                            Send it Again
                          </button>
                        </form>
                        </div>
                          @else
                        <div class="col- my-auto">
                          <button type="submit" class="btn btn-verified btn-block">
                            Verified
                          </button>
                        </div>
                          @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-2">
                      <img src="{{asset ('./img/id-card.png')}}" alt="">
                    </div>
                    <div class="col-10">
                      <label>Update Profile Information <span></span></label><br>
                      <label class="label-small">
                        Update your profile information to access more features
                      </label>
                      <div class="form-row accounts-button">
                        <div class="col-">
                          <a href="{{route ('profile-update')}}" class="btn btn-normal btn-block">
                            Update Profile
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-2">
                      <img src="{{asset ('./img/credit-card.png')}}" alt="">
                    </div>
                    <div class="col-10">
                      <label>Payment Method <span></span></label><br>
                      <label class="label-small">
                        Please add your payment details
                      </label>
                      <div class="form-row accounts-button">
                        <div class="col-">
                            <a type="submit" class="btn btn-normal btn-block" href="{{route ('bank-details')}}">
                            Manage Your Payments
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-2">
                      <img src="{{ asset ('./img/lock.png')}}" alt="">
                    </div>
                    <div class="col-10">
                      <label>Password <span></span></label><br>
                      <label class="label-small">
                        Please ensure your password is well thought of and secure
                      </label>
                      <div class="form-row accounts-button">
                        <div class="col-">
                          <a type="submit" class="btn btn-normal btn-block" href="{{route ('change-password')}}">
                            Change Password
                          </a>
                        </div>
                      </div>
                    </div>
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
