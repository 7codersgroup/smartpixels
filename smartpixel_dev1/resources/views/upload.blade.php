@extends('layouts.app')

@section('content')

<div class="page-body">
    <div class="wrapper">
    </div>
    <div class="page">
      <div class="upload-image-1">
        <img src="./img/camera.png" alt="">
      </div>
      <div class="upload-image-2">
        <img src="./img/camera-1.png" alt="">
      </div>
      <section class="upload-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 page-main-title" id="page-border">
              <h3>Upload Files</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 upload-body page-sub-title" id="page-border-2">
              <h4>Files Upload</h4>
              <div class="upload-heading">
                <p>
                  JPG, PNG, PSD, AI, and SVG images up to 40 MB with at least 3000 pixels along one side.
                </p>
                <ul>
                  <li> High quality photos (at least 5MP) </li>
                  <li> Photos are clear and original </li>
                  <li> Only upload photos you own right to </li>
                  <li> Zero tolerance for nudity, violence, or hate </li>
                  <li> Respect the intellectual property of others </li>
                </ul>
              </div>
              <div class="upload-footer">
                <ul>
                  <li>Term of Use</li>
                  <li>Policy</li>
                  <li>Support</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 upload-registration" id="page-border-3">
              <form>
                <div class="form-group mb-4 ">
                  <div class="form-row upload-drop-zone">
                    <img src="./img/1x.png" />
                    <p>Drop and drop your photos here or</p>
                    <button type="submit" class="btn">Browse</button>
                  </div>
                </div>

                <div class="form-group mb-4">
                  <label for="exampleFormControlTextarea1">Tag<span> *</span></label>
                  <div class="upload-tags">
                    <button>Teacher<img src=""></im></button>
                    <button>School<img src=""></button>
                  </div>
                </div>

                <div class="form-group mb-4">
                  <label for="exampleFormControlTextarea1">Location<span> *</span></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1"
                    placeholder="Enter the location the shot was taken"></textarea>
                </div>
                <div class="form-group upload-check">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck">I ONLY UPLOADED CONTENT I OWN RIGHT TO, AND
                      NOT COPIED IMAGES</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                    <label class="custom-control-label" for="customCheck">I AGREE THAT MY IMAGES ARE RELEASED UNDER
                      CREATIVE COMMON CCO</label>
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
    </div>
    </section>
  </div>
@endsection