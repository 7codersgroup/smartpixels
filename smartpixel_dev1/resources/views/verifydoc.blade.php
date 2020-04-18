@extends('layouts.app')

@section('content')

<div class="page-body">
        <div class="wrapper">
        </div>
        <div class="page">
            <section class="verify-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3>Identity Verification</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 verify-body page-sub-title" id="page-border-2">
                            <h4>Verify your identity</h4>
                            <div class="verify-heading">

                                <div class="form-row mt-3 mb-5">
                                    <div class="">
                                        <button type="submit" id="verified" class="btn btn-block">Unverified</button>
                                    </div>
                                    <div class="">
                                        <button type="submit" id="unverified" class="btn btn-block">Verified</button>
                                    </div>
                                </div>
                                <div class="verify-content">
                                    <p>
                                        Friend, things will never remain the same for you. God has made all things new
                                        for
                                        you, so live the life of freshness. Forget about the losses of yesterday and
                                        focus
                                        on the potentials and possibilities of today. Do not allow anything hold you
                                        back
                                        in 2019. Be determined to make it against all odds
                                    </p>
                                </div>

                            </div>
                            <div class="verify-footer">
                                <ul>
                                    <li>Term of Use</li>
                                    <li>Policy</li>
                                    <li>Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 verify-registration" id="page-border-3">
                            <form action="{{ route('doc.verify.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-4">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="firstname">First Name <span> *</span>
                                            </label>
                                            <input id="firstname" type="text" class="form-control" placeholder="First Name" name="firstname" />
                                        </div>
                                        <div class="col">
                                            <label for="lastname">Last Name <span> *</span>
                                            </label>
                                            <input id="lastname" type="text" class="form-control" placeholder="Last Name" name="lastname"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">
                                        Birth Date<span> *</span>
                                    </label>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Date" name="birth_day"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Month" name="birth_month"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder=Year name="birth_year"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Address<span> *</span></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                                    <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                                        <p class="mt-2">
                                            Please fill in your address as it appears in your medium of identification
                                        </p>
                                    </small>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputCity1">
                                        City<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="" name="city"/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputZipCode1">
                                        Zip Code<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="" name="zip_code"/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">
                                        ID DOCUMENT TYPE <span> * </span>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            aria-describedby="button-addon1">
                                            <option>Please Select</option>
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
                                    <label for="exampleInputZipCode1">
                                        Id Documment Number <span> * </span>
                                    </label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputZipCode1">
                                        Upload Scanned Identity Document<span> *</span>
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="upload-drop-zone" id="drop-zone">
                                            Drop document here! or click here to select document
                                        </div>
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                                        <p class="mt-2">
                                            Please ensure document displays clear content of both fron and back copies
                                            of
                                            document
                                        </p>
                                    </small>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="exampleInputZipCode1">
                                        Upload Selfie<span> *</span>
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="upload-drop-zone" id="drop-zone">
                                            Drop document here! or click here to select document
                                        </div>
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                                        <p class="mt-2">
                                            Please ensure this displays your face clearly
                                        </p>
                                    </small>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">
                                        Proof of Address Type <span> * </span>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            aria-describedby="button-addon1">
                                            <option>Please Select</option>
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
                                    <label for="exampleInputZipCode1">
                                        Upload Proof of Address <span> *</span>
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="upload-drop-zone" id="drop-zone">
                                            Drop document here! or click here to select document
                                        </div>
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                                        <p class="mt-2">
                                            Please ensure that this corresponds with address filled above
                                        </p>
                                    </small>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <button type="submit" id="cancel-button"
                                            class="btn btn-block btn-lg">Cancel</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" id="save-button"
                                            class="btn btn-block btn-lg">Save</button>
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