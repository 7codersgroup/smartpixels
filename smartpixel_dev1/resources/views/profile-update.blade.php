@extends('layouts.app')

@section('title', __('African Stock Images'))
@section('content')
    <div class="page-body">
        <div class="wrapper">
        </div>
        <div class="page">
            <section class="profile-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 page-main-title" id="page-border">
                            <h3 class="mb-0">Profile Update</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 profile-body page-sub-title order-last order-lg-first" id="page-border-2">
                            <h4>Update Profile Information</h4>
                            <div class="profile-content">
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


                            <div class="profile-footer">
                                <ul>
                                    <li>Term of Use</li>
                                    <li>Policy</li>
                                    <li>Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 profile-registration" id="page-border-3">
                            <form method="post" action="{{route ('profileUpdate')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <div class="form-row input-names">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">First Name <span> *</span>
                                            </label>
                                            <input type="text" class="form-control" placeholder="First Name" name="firstname" value="{{$user->firstname}}"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Last Name <span> *</span>
                                            </label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="{{$user->lastname}}"/>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            <p class="mt-2 mb-0 text-danger">
                                                Please fill in your name as it appears in your medium of identification
                                            </p>
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">
                                        Country<span> *</span>
                                    </label>

                                    <select class="form-control" name="country">
                                        <option value="{{$user->country}}">Please select your nationality</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>

                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputTelephone1">
                                        Phone Number<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="(+234) 80 FRICAPIX" name="phone" @if (isset($user->profile))
                                        value="{{$user->profile->phone}}"
                                        @endif/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Address<span> *</span></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="address" >@if (isset($user->profile)){{$user->profile->address}}
                                    @endif</textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputCity1">
                                        City<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="text"  class="form-control" placeholder="" name="city" @if (isset($user->profile))
                                        value="{{$user->profile->city}}"
                                        @endif/>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputZipCode1">
                                        Zip Code<span> *</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="zip" @if (isset($user->profile))
                                        value="{{$user->profile->zip}}"
                                        @endif/>
                                    </div>
                                </div>
                                <div class="upload-file input-group mb-4">
                                    <label for="exampleInputZipCode1">
                                        UPLOAD PROFILE PICTURE<span> *</span>
                                    </label>
                                    <!-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" placeholder="" required>
                                        <div class="form-row upload-drop-zone">
                                          <img src="./img/1x.png" />
                                          <p>Drop and drop your photos here or</p>
                                          <button type="submit" class="btn">Browse</button>
                                        </div>
                                      </div> -->
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" placeholder="" name="image_name">
                                        <label class="custom-file-label" for="validatedCustomFile">Drag and Drop Photos Here</label>
                                        <div class="upload-drop-zone ">
                                            <img src="{{asset ('./img/1x.png')}}"  alt="img"/>
                                            <button type="submit" class="btn">Browse</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
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
