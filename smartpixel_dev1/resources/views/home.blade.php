@extends('layouts.app2')

@section('content_new')

    <section class="height_normalize position-relative motmot">
        <div class="position-relative">
            <div class="overflow-hidden">
                <div class="mti-hero-image">
                    <picture>
                        <img
                                src="{{asset ('img/featured.jpg')}}"
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
                                    action="/search"
                                    class="js-search-form"
                                    role="search"
                            >
                                @csrf
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
                                                        name="query"
                                                        class="js-search-text-input input--silent input--full light input--xlarge"
                                                        type="text"
                                                        placeholder="Search"
                                                        required
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
                                href="#"
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
    @guest
        <section class="" style='
                             background-color: rgba(255,255,255,0.6);
                             background-image: url("https://disha.ng/wp-content/uploads/2019/08/Disha-Hero_.jpg");
                             background-position: center right;
                             background-repeat: no-repeat;
                             background-size: cover;
                             min-height: 600px;'>
            <div class="container">

            </div>
        </section>
        <section class="my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1
                                class="my-md-5 wf_7baf2059d414453a9b61affe1 secondary mb-4"
                        >
              <span class="" style="color: #00ca72; background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%);
                                    background-clip: border-box;
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;">Together.</span> In projects, processes, and
                            success. Wherever you are.
                        </h1>
                        @if (Route::has('register'))
                            <a class="btn btn-primary-gradient" href="{{ route('register') }}"
                            >Create an account</a
                            >
                        @endif
                    </div>

                </div>
            </div>
        </section>
    @endguest
@endsection