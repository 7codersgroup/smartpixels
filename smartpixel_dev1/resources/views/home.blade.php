    @extends('layouts.app2')

    @section('title', __('African Stock Images'))
    @section('content_new')

        <section class="height_normalize position-relative motmot">
            <div class="position-relative">
                <div class="overflow-hidden">
                    <div class="mti-hero-image">
                        <picture>
                            <img
                                src="{{asset ('img/20200325043919.jpg')}}"
                                loading="lazy"
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
                            high-resolution, royalty-free, stock assets tailored for everyone
                            to promote Africa.
                        </h5>
                    </div>
                </div>
            </div>
        </section>

        <!--		Last section-->
        {{--@guest--}}
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
                        @guest()
                            @if (Route::has('register'))
                                <a class="btn btn-primary-gradient" href="{{ route('register') }}"
                                >Create an account</a
                                >
                            @endif
                        @endguest
                    </div>

                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row justify-content-center py-lg-5  mt-lg-5">
                    <div class="col-md-6 my-3">
                        <p class="font-weight-500 text-uppercase font-14">fricapix for everyone</p>

                        <h1
                            class="my-md-4 wf_7baf2059d414453a9b61affe1 secondary mb-4 font-weight-bold"
                        >
                  <span class="" style="color: #00ca72; background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%);
                                        background-clip: border-box;
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;">A collection</span> of Africa's best for you.
                        </h1>

                        <p class="font-15">Fricapix offers you the best quality, royalty free stock images, photos, that
                            showcases African heritage for any application. Our massive selection of stock footage are the
                            ideal choice to set the scene in your next project.</p>

                        <ul class="ml-lg-5 ml-3 benefits mb-5">
                            <li class="my-3 font-14">Captivate your audience with authentic images from award-winning
                                artists.
                            </li>

                            <li class="my-3 font-14">Get highly curated assets for your project captured by industry pros on
                                the latest gear.
                            </li>
                            <li class="my-3 font-14">Work faster. You get assets for your project in few clicks. No use of
                                unnecessary keywords with our powerful search engine.
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 my-3">
                        <img src="{{asset ('img/fricapix-curation-testimonial.jpg')}}" alt="fricapix for everyone"
                             title="fricapix for everyone" class="img-fluid" loading="lazy"/>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5">
            <div class="container">
                <div class="row justify-content-center py-lg-5  mt-lg-5">
                    <div class="col-lg-6 my-3 order-last order-lg-first">
                        <img src="{{asset ('img/fricapix-artist-testimonial.jpg')}}" alt="Fricapix for artists"
                             title="Fricapix for artists" class="img-fluid" loading="lazy"/>
                    </div>

                    <div class="col-md-6 my-3">
                        <p class="font-weight-500 text-uppercase font-14">fricapix for artists</p>

                        <h1
                            class="my-md-4 wf_7baf2059d414453a9b61affe1 secondary mb-4 font-weight-bold"
                        >
                  <span class="" style="color: #00ca72; background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%);
                                        background-clip: border-box;
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;">The global</span> marketplace to showcase
                            your craft
                        </h1>

                        <p class="font-15">We value quality and we know it matters to you and everyone, so a lot of effort
                            goes into ensuring that your work gets to the right eyes without bias.</p>
                        <ul class="ml-lg-5 ml-3 benefits mb-5">
                            <li class="my-3 font-14">Fricapix gives you total control over what you sell your art for. You
                                get to decide.
                            </li>

                            <li class="my-3 font-14">Fricapix ensures you get true value for your creation.</li>
                        </ul>


                    </div>
                </div>
            </div>
        </section>



        <section class="my-5">
            <div class="container">
                <div class="row justify-content-center py-lg-5  mt-lg-5">
                    <div class="col-md-6 my-3">
                        <p class="font-weight-500 text-uppercase font-14">fricapix supports you</p>

                        <h1
                            class="my-md-4 wf_7baf2059d414453a9b61affe1 secondary mb-4 font-weight-bold"
                        >
                  <span class="" style="color: #00ca72; background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%);
                                        background-clip: border-box;
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;">Need help?</span> Just reach out.</h1>

                        <p class="font-15">We’re always here for you. We never leave our own hanging. If you ever need help
                            (or you just want to chat), we’ve got you.</p>

                        <ul class="ml-lg-5 ml-3 benefits mb-5">
                            <li class="my-3 font-14">Fricapix Delivers 24/7 Dedicated support for requests and issues if
                                they arise for faster resolutions.
                            </li>

                            <li class="my-3 font-14">The Fricapix team ensures 100% Secure payment with 256-bit SSL
                                Encryption
                            </li>
                        </ul>

                        <p class="font-14">Call us on <a title="Call fricapix now" href="tel:+2348145358784">+234 814 535
                                8784</a> or email <a title="Send fricapix a mail" href="mailto:hello@fricapix.com">hello@fricapix.com</a>
                        </p>
                    </div>

                    <div class="col-lg-6 my-3">
                        <img src="{{asset ('img/fricapix-support.jpg')}}" alt="Fricapix supports you"
                             title="Fricapix supports you" class="img-fluid" loading="lazy"/>
                    </div>
                </div>
            </div>
        </section>
        @guest()
            @if (Route::has('register'))
                <section class="my-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">

                                <a class="btn btn-primary-gradient" href="{{route ('register')}}"
                                >Create an account now</a
                                >
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endguest
        {{--@endguest--}}
    @endsection
