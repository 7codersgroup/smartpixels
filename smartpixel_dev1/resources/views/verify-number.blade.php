@extends('layouts.app')
@section('title', __('African Stock Images'))
@section('content')

<div class="page-body">
        <div class="wrapper">
        </div>
        <div class="page">
            <div class="vn-image-1">
                <img src="./img/smartphone-1@2x.png" alt="">
            </div>
            <div class="vn-image-2">
                <img src="./img/smartphone-1.png" alt="">
            </div>
            <section class="vn-page">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <i class="fas fa-lock fa-7x"></i> -->
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3>Mobile Number Verification</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 vn-body page-sub-title" id="page-border-2">
                            <h4>Verify your Phone Number</h4>
                            <div class="vn-footer">
                                <ul>
                                    <li>Term of Use</li>
                                    <li>Policy</li>
                                    <li>Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 vn-registration" id="page-border-3">
                            <form>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">
                                        Country<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            aria-describedby="button-addon1" name="country">
                                            <option>Please select your nationality</option>
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
                                    <label for="exampleInputTelephone1">
                                        Phone Number<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="(+234) 80 SMARTPIXELS" name="phone" />
                                    </div>
                                </div>
                                <hr class="hr my-5">
                                <div class="form-group mb-4">
                                    <label for="exampleInputVerification1">
                                        VERIFICATION
                                    </label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control"
                                            placeholder="Enter the 6 digit code we sent to you"  name="verify"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <button type="submit" id="cancel-button"
                                            class="btn btn-block btn-lg">Cancel</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="save-button" class="btn btn-block btn-lg">{{ __('Verify Number') }}</button>
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
