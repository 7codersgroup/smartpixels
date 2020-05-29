@extends('layouts.app')

@section('content')

    <div class="page-body">
        <div class="wrapper">
        </div>
        <div class="page">
            <div class="payment-image-1">
                <img src="/img/credit-card-1.png" alt="">
            </div>
            <div class="payment-image-2">
                <img src="{{asset ('./img/credit-card-1@2x.png')}}" alt="">
            </div>
            <section class="payment-page">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <i class="fas fa-lock fa-7x"></i> -->
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3 class="mb-0">Payment Method</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 payment-body page-sub-title" id="page-border-2">
                            <h4>Bank Information</h4>
                            <div class="payment-footer">
                                <ul>
                                    <li><a href="terms-of-use.html">Term of Use</a></li>
                                    <li><a href="privacy-policy.html">Policy</a></li>
                                    <li><a href="#" title="Contact Support">Support</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6 payment-registration" id="page-border-3">

                            <div class="form-row">
                                <div class="form-group col-md-12 mr-md-4">
                                    <p>Current Bank Information</p>
                                    <table class="table table-striped table-condensed table-bordered">
                                        <thead>
                                        <tr>
                                            <td align="left">Bank Name</td>
                                            <td align="left"><b>GTB</b></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Account Name</td>
                                            <td align="left"><b>OLUFEMI , DANIEL OLADOTUN</b></td>
                                        </tr>
                                        <tr>
                                            <td align="left">Account No.</td>
                                            <td align="left"><b>0448528538</b></td>
                                        </tr>

                                        </thead>
                                    </table>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12">
                                    <p class="text-danger my-2 font-13 cursor" id="bank_info">Update bank details <i
                                                class="fa fa-angle-double-right"></i></p>
                                </div>
                            </div>

                            <form id="update_bank_info" action="{{route ('banking.store')}}" method="post"
                                  class="none mt-4">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="exampleInputTelephone1">
                                        Account Number<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="account_no" class="form-control" placeholder="Account Number" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="form-row payment-input">
                                        <div class="col-12">
                                            <label for="exampleInputTelephone1">
                                                Bank Name<span> *</span>
                                            </label>

                                            <select class="custom-select" name="bank_name">
                                                <option>Access Bank</option>
                                                <option>Oceanic Bank</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="form-row payment-input">
                                        <div class="col-12">
                                            <label for="exampleInputTelephone1">
                                                Name Of Account Holder<span> *</span>
                                            </label>
                                            <input type="text" name="account_holder" class="form-control" placeholder="JOHN SMITH" />

                                        </div>
                                    </div>

                                </div>
                                <div class="form-row payment-submit mt-2">
                                    <div class="col-md-6">
                                        <button type="submit" id="cancel-button" class="btn btn-block btn-lg">Cancel</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="save-button" class="btn btn-block btn-lg">Save</button>
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