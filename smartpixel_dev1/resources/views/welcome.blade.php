@extends('layouts.app2')

@section('content_new')

<section class="height_normalize position-relative motmot">
      <div class="position-relative">
        <div class="overflow-hidden">
          <div class="mti-hero-image">
            <picture>
              <img
                   src="https://fpcover.cdnpk.net/image/20200325043919.jpg"
                   class="mti-hero-image mti-hero-image--cover mti-hero-image--large js-hero-image-full container-full"
                   />
            </picture>
          </div>
        </div>

        <div
             class="container-absolute to-all medium-black-overlay maximum-in-front"
             >
          <div class="v-align container-full">
            <div
                 class="padding-left-xlarge padding-right-xlarge padding-bottom-small"
                 >
              <div class="margin-bottom-xlarge center-align">
                <div class="container-max">
                  <h1 class="no-margin white-text text-xslarge light">
                    Find the perfect pixel asset for your next project
                  </h1>
                </div>
              </div>
              <div class="padding-top-large">
                <form
                      method="get"
                      action="search.html"
                      class="js-search-form"
                      >
                  <div class="container-relative white hero-input-group">
                    <div class="input-box" data-active="input">
                      <div class="container-table">
                        <div class="container-table-cell no-stretch">
                          <div class="select-box input-box__select-box">
                            <select
                                    class="js-filter-view-type"
                                    data-t="filter-asset-type"
                                    >
                              <option selected="selected" value="images">
                                Images
                              </option>
                            </select>
                          </div>
                        </div>
                        <div
                             class="container-table-cell container-full container-relative"
                             >
                          <input
                                 name="k"
                                 class="js-search-text-input input--silent input--full light input--xlarge"
                                 type="text"
                                 placeholder="Search"
                                 autocomplete="off"
                                 />
                        </div>
                        <div class="container-table-cell no-stretch">
                          <div class="px-4 position-relative">
                            <img
                                 src="img/camera.svg"
                                 class="img-fluid position-absolute"
                                 width="35"
                                 style="bottom: -15px; left: 0px;"
                                 />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="container-absolute to-the-bottom to-the-right">
            <div class="margin-xlarge padding-xlarge">
              <a
                 class="white-text"
                 href="artist.html"
                 data-ingest-clicktype="contributor-name"
                 ><p class="font-light">
                <i>Feature by </i
                  ><strong data-t="main-header-attribution-text"
                           >masterkraft</strong
                >
                </p></a
                >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--		second section-->
    <section class="intro">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h5 class="my-md- my-3 font-weight-light secondary mb-4">
              You can explore a wide range collections of incredible
              high-resolution, royalty-free, stock assets tailored for Africans
              by Africans
            </h5>
          </div>
        </div>
      </div>
    </section>

    <!--		Last section-->
    <section class="my-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <img
                 src="img/logo.svg"
                 class="img-fluid"
                 alt="Smartpixels logo"
                 width="200"
                 />
            <h1
                class="my-md-5 my-3 wf_7baf2059d414453a9b61affe1 secondary mb-4"
                >
              Get started with Smartpixels
            </h1>

            <a class="btn btn-primary-gradient" href="{{ route('register') }}"
               >Create an account</a
              >
          </div>
        </div>
      </div>
    </section>

@endsection