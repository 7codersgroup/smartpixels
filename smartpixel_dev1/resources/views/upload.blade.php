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
                <h3 class="mb-0">Upload Files</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 upload-body page-sub-title" id="page-border-2">
                <h4>Files Upload</h4>
                <div class="upload-heading">
                  <p>
                    JPG, PNG, SVG images up to 40 MB with at least 3000 pixels along one side.
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
                    <li><a href="terms-of-use.html">Term of Use</a></li>
                    <li><a href="privacy-policy.html">Policy</a></li>
                    <li><a href="#" title="Contact Support">Support</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 upload-registration" id="page-border-3">
                <form>
                  <div class="upload-file input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" placeholder="" required>
                      <label class="custom-file-label" or="validatedCustomFile">Drag and Drop Photos Here</label>
                      <div class="form-row upload-drop-zone">
                        <img src="./img/1x.png" />
                        <button type="submit" class="btn">Browse</button>
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-4">
                    <label for="title">Title<span> *</span></label>
                    <input class="form-control" id="title"
                           placeholder="Enter the image title or alt text (this can be beneficial for search engine)" />
                  </div>

                  <div class="form-group mb-4">
                    <label for="img_description">Brief Description<span> *</span></label>
                    <textarea class="form-control" id="img_description"
                              placeholder="Give a very short description of your image"></textarea>
                  </div>

                  <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">SEO Tags / Keywords<span> *</span></label>
                    <div class="upload-tags">
                      <button>Teacher<img src="" /></button>
                      <button>School<img src="" /></button>
                    </div>
                  </div>

                  <div class="form-group mb-4"><label for="categoty">Category<span> *</span></label>
                    <select class="custom-select" id="categoty">
                      <option selected disabled>Select image category</option>
                    </select>
                  </div>

                  <div class="form-group mb-4">
                    <label for="shot_location">Location<span> *</span></label>
                    <input class="form-control" id="shot_location" placeholder="Enter the location the shot was taken" />
                  </div>

                  <div class="form-group mb-4">
                    <label for="cost_price">Cost Price<span> *</span></label>
                    <input class="form-control" type="text" id="cost_price" placeholder="Enter the price you wish to sell this asset" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" />
                  </div>

                  <div class="form-group upload-check">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="image_rating" name="image_rating">
                      <label class="custom-control-label" for="image_rating">IMAGE IS RATED 18+</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="content_right" name="content_right">
                      <label class="custom-control-label" for="content_right">I ONLY UPLOADED CONTENT I OWN RIGHT TO, AND
                        NOT COPIED IMAGES</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="creative_common_agreement"
                             name="creative_common_agreement">
                      <label class="custom-control-label" for="creative_common_agreement">I AGREE THAT MY IMAGES ARE
                        RELEASED UNDER
                        CREATIVE COMMON CCO</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <button type="submit" id="cancel-button" class="btn btn-block btn-lg">Cancel</button>
                    </div>
                    <div class="col-md-6">
                      <button type="submit" id="save-button" class="btn btn-block btn-lg">Upload</button>
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