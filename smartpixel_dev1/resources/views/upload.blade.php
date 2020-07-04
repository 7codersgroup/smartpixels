<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset ('css/all.css')}}" />
  <link rel="stylesheet" href="{{asset ('css/selectize.default.css')}}" />
  <link rel="stylesheet" href="{{asset ('css/style.css')}}"/>
    <title>Upload Asset | Fricapix</title>
</head>

<body>
@include('layouts.ordinarynavbar')
<!--End Header -->

<div class="page-body">
      <div class="wrapper">
      </div>
      <div class="page">
        <div class="upload-image-1">
          <img src="{{asset ('./img/camera.png')}}" alt="">
        </div>
        <div class="upload-image-2">
          <img src="{{asset ('./img/camera-1.png')}}" alt="">
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
                    <form role="form" enctype="multipart/form-data" method="post" action="{{ route('uploadImage')  }}">
                        @csrf
                        <div class="upload-file input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image_name" id="validatedCustomFile"
                                       placeholder="" required>
                                <label class="custom-file-label" for="validatedCustomFile">Drag and Drop Photos
                                    Here</label>
                                <div class="form-row upload-drop-zone">
                                    <img src="{{asset ('./img/1x.png')}}"/>
                                    <button type="submit" class="btn">Browse</button>
                                </div>
                            </div>
                  </div>

                  <div class="form-group mb-4">
                    <label for="title">Title<span> *</span></label>
                    <input class="form-control" id="title" name="title"
                           placeholder="Enter the image title or alt text (this can be beneficial for search engine)" required/>
                  </div>

                  <div class="form-group mb-4">
                    <label for="img_description">Brief Description<span> *</span></label>
                    <textarea class="form-control" id="img_description" name="description"
                              placeholder="Give a very short description of your image" required></textarea>
                  </div>

                  <div class="form-group mb-4">
                    <label for="seo-tags">SEO Tags / Keywords<span> *</span></label>
                    <input class="demo-default" id="seo-tags" name="tag"
                           placeholder="Enter the keywords for image (this can be beneficial for search engine)" />

                  </div>

                  <div class="form-group mb-4"><label for="category">Category<span> *</span></label>
                    <select class="custom-select" id="category" name="category" >
                      <option selected disabled>Select image category</option>
                        @foreach($category as $cat)
                            {{$category}}
                            <option value="{{ $cat->id }}" {{--{{$company->shopping_id == $shopping->id  ? 'selected' : ''}}--}}>{{ucwords ($cat->category)}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group mb-4">
                    <label for="shot_location">Location<span> *</span></label>
                    <input class="form-control" id="shot_location" name = "location" placeholder="Enter the location the shot was taken" />
                  </div>

                  <div class="form-group mb-4">
                    <label for="cost_price">Cost Price<span> *</span></label>
                    <input class="form-control" id="cost_price" name="price"
                           onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;"
                           placeholder="Enter the price you wish to sell this asset"
                           required
                           type="number"/>
                  </div>

                  <div class="form-group upload-check">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="image_rating" name="rating">
                      <label class="custom-control-label" for="image_rating">IMAGE IS RATED 18+</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="content_right" name="content_right" required>
                      <label class="custom-control-label" for="content_right">I ONLY UPLOADED CONTENT I OWN RIGHT TO, AND
                        NOT COPIED IMAGES</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="creative_common_agreement"
                             name="creative_common_agreement" required>
                      <label class="custom-control-label" for="creative_common_agreement">I AGREE THAT MY IMAGES ARE
                        RELEASED UNDER
                        CREATIVE COMMON CCO</label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <button href="{{route ('home')}}" id="cancel-button" class="btn btn-block btn-lg">Cancel</button>
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

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset ('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset ('js/popper.min.js')}}"></script>
<script src="{{asset ('js/bootstrap.min.js')}}"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>
<script src="{{asset ('js/index.js"')}}"></script>
<script src="{{asset ('js/selectize.min.js')}}"></script>
<script src="{{asset ('js/utility.js')}}"></script>


</html>
