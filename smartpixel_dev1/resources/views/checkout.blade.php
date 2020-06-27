@extends('layouts.app')
@section('title', __('African Stock Images'))
@section('content')
<div class="page-body-2">
    <div class="wrapper">
    </div>
    <div class="page">
      <section class="checkout-page">
        <div class="container-fluid">
          <!-- <div class="row">
            <div class="col-md-12 page-main-title" id="page-border">
              <h3>We'2re glad to have you</h3>
            </div>
          </div> -->
          <form action="">
            <div class="row">
              <div class="col-md-7">
                <h4 class="mb-5">Billing Address</h4>
                <div class="billing-address">
                  <div class="form-group mb-4">
                    <div class="form-row">
                      <div class="col">
                        <label for="exampleInputEmail1">First Name <span> *</span>
                        </label>
                        <input type="text" class="form-control" placeholder="First Name" />
                      </div>
                      <div class="col">
                        <label for="exampleInputEmail1">Last Name <span> *</span>
                        </label>
                        <input type="text" class="form-control" placeholder="Last Name" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">Address<span> *</span></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <small id="address-small" class="form-text text-muted mb-4">
                      <p class="mt-2">
                        Please fill in your address as it appears in your medium of identification
                      </p>
                    </small>
                  </div>
                  <div class="form-group mb-4">
                    <label for="exampleInputTelephone">
                      City<span> *</span>
                    </label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" />
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label for="exampleInputTelephone">
                      Zip Code<span> *</span>
                    </label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Country<span>*</span></label>
                  </div>
                  <div class="input-group">
                    <select class="form-control" id="inputGroupSelect04">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <!-- <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button"><span
                          class="fas fa-angle-down fa-lg"></span></button>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <h4 class="mb-5">Cart Summary</h4>
                <div class="checkout-cart">
                  <div class="form-group mb-4">
                    <span>
                      2 Photos (Standard License)
                    </span>
                  </div>
                  <div class="form-group mb-4">
                    <span>
                      N500
                    </span>
                  </div>
                  <hr>
                  <div class="form-group">
                    <span class="cart-total">
                      Total Price
                    </span>
                    <span class="cart-total">
                      N500
                    </span>
                  </div>
                  <div class="form-row cart-pay">
                    <div class="col">
                      <button type="submit" class="btn btn-block btn-lg">Pay
                        <span>500</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 ">
                <h4 class="mb-5">Payment Details</h4>
                <div class="payment-details">
                  <div class="form-groupmb-4">
                    <label for="exampleInputTelephone1">
                      Credit Card Number<span> *</span>
                    </label>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="0000 0000 0000 0000" />
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <div class="form-row">
                      <div class="col-6">
                        <label for="exampleInputTelephone1">
                          Name On Credit Card<span> *</span>
                        </label>
                        <div class="input-group">
                          <input type="tel" class="form-control" placeholder="JOHN SMITH" />
                        </div>
                      </div>
                      <div class="col-4">
                        <label for="exampleInputTelephone1">
                          Expires<span> *</span>
                        </label>
                        <div class="input-group">
                          <input type="tel" class="form-control" placeholder="MM/YY" />
                        </div>
                      </div>
                      <div class="col-2">
                        <label for="exampleInputTelephone1">
                          CvC<span> *</span>
                        </label>
                        <div class="input-group">
                          <input type="tel" class="form-control" placeholder="000" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
@endsection
