@extends('frontend.home_dashboard')
@section('home')

@section('title')
    Online News
@endsection

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">

        </div>
    </div>
</div>

<section class="themesBazar_section_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="themesbazar_led_active owl-carousel owl-loaded owl-drag">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1578px, 0px, 0px); transition: all 1s ease 0s; width: 3684px;">

                                    <div class="owl-item " style="width: 506.25px; margin-right: 20px;">
                                        <div class="secOne_newsContent">
                                            <div class="sec-one-image">
                                                <a href=""><img class="lazyload" src=""></a>
                                                <h6 class="sec-small-cat">
                                                    <a href=" ">
                                                    </a>
                                                </h6>
                                                <h1 class="sec-one-title">
                                                    <a href="">
                                                    </a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                            <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                    role="button" class="owl-dot active"><span></span></button><button role="button"
                                    class="owl-dot"><span></span></button></div>
                        </div>


                    </div>
                    <div class="col-lg-5 col-md-5">


                        <div class="secOne-smallItem">
                            <div class="secOne-smallImg">
                                <a href=""><img class="lazyload" src=""></a>
                                <h5 class="secOne_smallTitle">
                                    <a href="">
                                    </a>
                                </h5>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="sec-one-item2">
                    <div class="row">



                        <div class="themesBazar-3 themesBazar-m2">
                            <div class="sec-one-wrpp2">
                                <div class="secOne-news">
                                    <div class="secOne-image2">
                                        <a href=" "><img class="lazyload" src=""></a>
                                    </div>
                                    <h4 class="secOne-title2">
                                        <a href="">

                                        </a>
                                    </h4>
                                </div>
                                <div class="cat-meta">
                                    <a href=" "> <i class="lar la-newspaper"></i>
                                    </a>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4">
                <div class="live-item">
                    <div class="live_title">
                        <a href=" ">LIVE TV </a>
                        <div class="themesBazar"></div>
                    </div>
                    <div class="popup-wrpp">
                        <div class="live_image">
                            <img width="700" height="400" src=""
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                loading="lazy">
                            <div data-mfp-src="#mymodal" class="live-icon modal-live"> <i class="las la-play"></i>
                            </div>
                        </div>
                        <div class="live-popup">
                            <div id="mymodal" class="mfp-hide" role="dialog" aria-labelledby="modal-titles"
                                aria-describedby="modal-contents">
                                <div id="modal-contents">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                        <iframe width="560" height="315" src=""
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="themesBazar_widget">
                    <h3 style="margin-top:5px"> OLD NEWS </h3>
                </div>


                <form class="wordpress-date" action="" method="post">
                    @csrf

                    <input type="date" id="wordpress" placeholder="Select Date" autocomplete="off" name="date"
                        class="hasDatepicker">
                    <input type="submit" value="Search">
                </form>



                <div class="recentPopular">
                    <ul class="nav nav-pills" id="recentPopular-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active" id="recent-tab" data-bs-toggle="pill"
                                data-bs-target="#recent" role="tab" aria-controls="recent"
                                aria-selected="false"> LATEST </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="popular-tab" data-bs-toggle="pill" data-bs-target="#popular"
                                role="tab" aria-controls="popular" aria-selected="false"> POPULAR </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane active show  fade" id="recent" role="tabpanel" aria-labelledby="recent">
                        <div class="news-titletab">

                            <div class="tab-image tab-border">
                                <a href=""><img class="lazyload" src=""></a>
                                <a href=" " class="tab-icon"><i class="la la-play"></i></a>
                                <h4 class="tab_hadding"><a href="">
                                    </a></h4>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular">
                        <div class="news-titletab">

                                <div class="tab-image tab-border">
                                    <a href=""><img class="lazyload" src=""></a>
                                    <a href=" " class="tab-icon"><i class="la la-play"></i></a>
                                    <h4 class="tab_hadding"><a href=""> </a></h4>
                                </div>







                        </div>
                    </div>
                </div>
                <div class="themesBazar_widget">
                    <h3 style="margin-top:5px"> Our Like Page </h3>
                </div>
                <div class="facebook-content">
                    <iframe src=" " width="260" height="170" style="border:none;overflow:hidden"
                        scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <div class="themesBazar_widget">
                    <h3 style="margin-top:5px"> Our Like Page </h3>
                </div>
                <div class="facebook-content">
                    <div class="twitter-timeline twitter-timeline-rendered"
                        style="display: flex; width: 410px; max-width: 100%; margin-top: 0px; margin-bottom: 0px;">
                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
                            allowfullscreen="true" class=""
                            style="position: static; visibility: visible; width: 279px; height: 220px; display: block; flex-grow: 1;"
                            title="Twitter Timeline" src=" "></iframe>
                    </div>
                    <script async="" src="assets/js/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74" src="" alt=""
                            width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74" src="" alt=""
                            width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="section-two">
    <div class="container">
        <div class="secTwo-color">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="themesBazar_cat6">
                        <ul class="nav nav-pills" id="categori-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="categori-tab1" data-bs-toggle="pill"
                                    data-bs-target="#Info-tabs1" role="tab" aria-controls="Info-tabs1"
                                    aria-selected="true">
                                    ALL
                                </div>
                            </li>

                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="categori-tab2" data-bs-toggle="pill"
                                    data-bs-target="#category" role="tab" aria-controls="Info-tabs2"
                                    aria-selected="false">
                                </div>
                            </li>

                            <span class="themeBazar6"></span>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="Info-tabs1" role="tabpanel"
                            aria-labelledby="categori-tab1 ">
                            <div class="row">

                                    <div class="themesBazar-4 themesBazar-m2">
                                        <div class="sec-two-wrpp">
                                            <div class="section-two-image">

                                                <a href=" "><img class="lazyload" src=""></a>
                                            </div>
                                            <h5 class="sec-two-title">
                                                <a href="">
                                                </a>
                                            </h5>
                                        </div>
                                    </div>





                            </div>
                        </div>


                        <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="categori-tab2">
                            <div class="row">



                                <div class="themesBazar-4 themesBazar-m2">
                                    <div class="sec-two-wrpp">
                                        <div class="section-two-image">
                                            <a href=" "><img class="lazyload" src=""></a>
                                        </div>
                                        <h5 class="sec-two-title">
                                            <a href=" ">
                                            </a>
                                        </h5>
                                    </div>
                                </div>


                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74" src="" alt=""
                            width="100%" height="auto">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74" src="" alt=""
                            width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <h2 class="themesBazar_cat07"> <a href=""> <i class="las la-align-justify"></i> </a> </h2>

                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <div class="secThree-bg">
                            <div class="sec-theee-image">
                                <a href=" "><img class="lazyload" src=""></a>
                            </div>
                            <h4 class="secThree-title">
                                <a href=" ">
                                </a>
                            </h4>
                        </div>


                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="bg2">

                            <div class="secThree-smallItem">
                                <div class="secThree-smallImg">
                                    <a href=" "><img class="lazyload" src=""></a>
                                    <a href=" " class="small-icon3"><i class="la la-play"></i></a>
                                    <h5 class="secOne_smallTitle">
                                        <a href=" ">
                                        </a>
                                    </h5>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">



                <div class="map-area" style="width:100%; background: #eff3f4;">
                    <div style="padding:5px 35px 0px 35px;">
                        <img class="lazyload" src="{{ asset('frontend/assets/images/lazy.jpg') }}"></a>
                        <br> <br>
                        <img class="lazyload" src="{{ asset('frontend/assets/images/lazy.jpg') }}"></a>

                    </div>
                </div>
            </div>
        </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-four">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="themesBazar_cat04"> <a href=""> <i class="las la-align-justify"></i> </a> </h2>

                <div class="secFour-slider owl-carousel owl-loaded owl-drag">








                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-3294px, 0px, 0px); transition: all 1s ease 0s; width: 4792px;">

                            <div class="owl-item" style="width: 289.5px; margin-right: 10px;">
                                <div class="secFour-wrpp ">
                                    <div class="secFour-image">
                                        <a href=" "><img class="lazyload" src=""></a>
                                        <h5 class="secFour-title">
                                            <a href=" "></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                class="las la-angle-left"></i></button><button type="button" role="presentation"
                            class="owl-next"><i class="las la-angle-right"></i></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                            role="button" class="owl-dot active"><span></span></button></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=""></a>
                    <span> <a href="">
                            More
                            <i class="las la-arrow-circle-right"></i> </a></span>
                </h2>

                <div class="white-bg">

                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src=""></a>
                        <div class="secFive-title">
                            <a href=""></a>
                        </div>
                    </div>



                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src=""></a>
                            <h5 class="secFive_title2">
                                <a href="">
                                </a>
                            </h5>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=" "> INTERNATIONAL </a> <span> <a href=" ">More <i
                                class="las la-arrow-circle-right"></i> </a></span> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">How important are box office numbers</a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">How important are box office numbers</a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">How important are box office numbers</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=" "> SPORTS </a> <span> <a href=" "> More <i
                                class="las la-arrow-circle-right"></i> </a></span> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Britney Spears says "I don't believe in God anymore" </a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Britney Spears says "I don't believe in God anymore" </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Britney Spears says "I don't believe in God anymore" </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="section-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=" "> EDUCATION </a> <span> <a href=" "> More <i
                                class="las la-arrow-circle-right"></i> </a></span> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=" "> SCI-TECH </a> <span> <a href=" "> More <i
                                class="las la-arrow-circle-right"></i> </a></span> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Nora Fatehi questioned in Rs 200cr extortion case </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=" "> SCI-TECH </a> <span> <a href=" ">More <i
                                class="las la-arrow-circle-right"></i> </a></span> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Gazi Mazharul Anwar buried in mother's grave </a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Gazi Mazharul Anwar buried in mother's grave </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Gazi Mazharul Anwar buried in mother's grave </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Gazi Mazharul Anwar buried in mother's grave </a>
                            </h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-seven">
    <div class="container">

        <h2 class="themesBazar_cat01"> <a href=" "> </a> <span> <a
                    href=""> More <i
                        class="las la-arrow-circle-right"></i> </a></span> </h2>

        <div class="secSecven-color">
            <div class="row">


                <div class="col-lg-5 col-md-5">

                            <div class="black-bg">

                                <div class="secSeven-image">
                                    <a href=" "><img class="lazyload" src=""></a> <a
                                        href=" " class="video-icon6"><i class="la la-play"></i></a>
                                </div>
                                <h6 class="secSeven-title">
                                    <a href="">
                                    </a>
                                </h6>
                                <div class="secSeven-details">


                                    <a href="">
                                        More..</a>
                                </div>

                            </div>

                </div>


                <div class="col-lg-7 col-md-7">
                    <div class="row">

                                <div class="themesBazar-2 themesBazar-m2">
                                    <div class="secSeven-wrpp ">
                                        <div class="secSeven-image2">
                                            <a href=" "><img class="lazyload"
                                                    src=""></a>
                                            <h5 class="secSeven-title2">
                                                <a
                                                    href="">
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="themesBazar_widget">
                <div class="textwidget">
                    <p><img loading="lazy" class="aligncenter size-full wp-image-74"
                            src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat04"> <a href=" "> <i class="las la-align-justify"></i> ENTERTAINMENT
                    </a> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Dowry case: Cricketer Al-Amin gets anticipatory bail</a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Dowry case: Cricketer Al-Amin gets anticipatory bail</a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Dowry case: Cricketer Al-Amin gets anticipatory bail</a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Dowry case: Cricketer Al-Amin gets anticipatory bail</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat04"> <a href=" "> <i class="las la-align-justify"></i> FEATURE </a>
                </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Liverpool thrashed by Napoli in Champions League </a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Liverpool thrashed by Napoli in Champions League </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Liverpool thrashed by Napoli in Champions League </a>
                            </h5>
                        </div>
                    </div>

                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Liverpool thrashed by Napoli in Champions League </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat04"> <a href=" "> <i class="las la-align-justify"></i> FACEBOOK NEWS
                    </a> </h2>

                <div class="white-bg">
                    <div class="secFive-image">
                        <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                        <div class="secFive-title">
                            <a href=" ">Lewandowski hits Barca hit-trick before Bayern return </a>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Lewandowski hits Barca hit-trick before Bayern return </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Lewandowski hits Barca hit-trick before Bayern return </a>
                            </h5>
                        </div>
                    </div>
                    <div class="secFive-smallItem">
                        <div class="secFive-smallImg">
                            <a href=" "><img class="lazyload" src="assets/images/lazy.jpg"></a>
                            <h5 class="secFive_title2">
                                <a href=" ">Lewandowski hits Barca hit-trick before Bayern return </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="section-ten">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">

                <h2 class="themesBazar_cat01"> <a href=" "> <i class="las la-camera"></i> PHOTO GALLERY </a>
                </h2>

                <div class="homeGallery owl-carousel owl-loaded owl-drag">







                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-4764px, 0px, 0px); transition: all 1s ease 0s; width: 5558px;">


                                <div class="owl-item" style="width: 784px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="photo">
                                            <a class="themeGallery" href="">
                                                <img src="" alt="PHOTO"></a>
                                            <h3 class="photoCaption">
                                                <a href=" "> </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>




                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                class="las la-angle-left"></i></button><button type="button" role="presentation"
                            class="owl-next disabled"><i class="las la-angle-right"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
                <div class="homeGallery1 owl-carousel owl-loaded owl-drag">







                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transition: all 1s ease 0s; width: 2515px; transform: translate3d(-463px, 0px, 0px);">



                                <div class="owl-item " style="width: 122.333px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="phtot2">
                                            <a class="themeGallery" href="">
                                                <img src="" alt="PHOTO"></a>
                                        </div>
                                    </div>
                                </div>




                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">

                <h2 class="themesBazar_cat01"> <a href=" "> <i class="las la-video"></i> VIDEO GALLERY </a>
                </h2>

                <div class="white-bg">




                        <div class="secFive-smallItem">
                            <div class="secFive-smallImg">
                                <img src="">
                                <a href="" class="home-video-icon popup"><i
                                        class="las la-video"></i></a>
                                <h5 class="secFive_title2">
                                    <a href="" class="popup">  </a>
                                </h5>
                            </div>
                        </div>



                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection