
@extends('layouts.app-default')

<!-- Start Full Width Section 1 -->
@section('content-body')
    <!-- Start Home Slider -->
    <div id="slider">

        <!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner" >
                <ul>

                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <!-- MAIN IMAGE -->
                        <img src="{{url('assets/images/sliders/3.png')}}" data-fullwidthcentering="on" alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfl start"
                             data-x="left"
                             data-y="110"

                             data-speed="300"
                             data-start="1600"
                             data-easing="easeInOutExpo"> Supply and repair of different types of pumps
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfr start"
                             data-x="left"
                             data-y="190"

                             data-speed="300"
                             data-start="1900"
                             data-easing="easeInOutExpo">Industrial and domestic drilling.

                        </div>

                    </li>

                    <!-- SLIDE 2  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <!-- MAIN IMAGE -->
                        <img src="{{url('assets/images/sliders/1.png')}}" data-fullwidthcentering="on" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfl start"
                             data-x="center"
                             data-y="110"

                             data-speed="300"
                             data-start="2200"
                             data-easing="easeInOutExpo">Civil engineering.

                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption  mini_font_size bold_font_weight dark_font_color gray_bg sfr start"
                             data-x="center"
                             data-y="190"

                             data-speed="300"
                             data-start="2500"
                             data-easing="easeInOutExpo"> Supply of equipment and petroleum products

                        </div>


                    </li>

                    <!-- SLIDE 3  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <!-- MAIN IMAGE -->
                        <img src="{{url('assets/images/sliders/4.png')}}" data-fullwidthcentering="on" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfl start"
                             data-x="right"
                             data-y="110"

                             data-speed="300"
                             data-start="2800"
                             data-easing="easeInOutExpo">We also have expertise in the management of industrial.

                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfr start"
                             data-x="right"
                             data-y="190"

                             data-speed="300"
                             data-start="3100"
                             data-easing="easeInOutExpo">domestic waste and the treatment of used oils
                        </div>

                    </li>

                <!-- SLIDE 4  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                    <!-- MAIN IMAGE -->
                    <img src="{{url('assets/images/sliders/5.png')}}" data-fullwidthcentering="on" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfr start"
                         data-x="left"
                         data-y="150"

                         data-speed="300"
                         data-start="3100"
                         data-easing="easeInOutExpo">domestic waste and the treatment of used oils
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption sfr start"
                         data-x="center"
                         data-y="60"
                         data-hoffset="100"

                         data-speed="600"
                         data-start="1000"
                         data-easing="easeOutBack"
                    {{--style="z-index: 2"><img src="{{url('assets/images/slider-11.png')}}" alt="" />--}}
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption sfl start"
                         data-x="right"
                         data-y="70"
                         data-hoffset="-100"

                         data-speed="600"
                         data-start="1300"
                         data-easing="easeOutBack"
                         style="z-index: 1"><img src="{{url('assets/images/sliders/5.png')}}" alt="" style="height: 300px" />
                    </div>

                </li>

                </ul>
                <div class="tp-bannertimer" style="visibility:hidden;"></div>
            </div>
        </div>

        <!-- THE SCRIPT INITIALISATION -->
        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
            var revapi;
            jQuery(document).ready(function() {
                revapi = jQuery('.fullwidthbanner').revolution({

                    delay:9000,
                    startwidth:1140,
                    startheight:450,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:3,

                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"round",

                    touchenabled:"on",
                    onHoverStop:"on",

                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:"on",
                    fullScreen:"off",
                    lazyLoad:"on",

                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:"off",

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0,
                });
            });
        </script>

    </div>
    <!-- End Home Slider -->
<div class="section" style="padding-top:60px; padding-bottom:30px; border-top:0; border-bottom:0; background:#fff">
    <div class="container">

        <!-- Start Services Icons -->
        <div class="row">
            <h1 class="text-center">Our services</h1>
            <hr>
            <!-- Start Service Icon 1 -->

                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Fuel Purification
                        </h4>
                        <p>{ATPC and its range of services have always been associated with quality service.... </p>
                    </div>
                </div></a>

                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Supply and repair of pumps
                        </h4>
                        <p>{ATPC and its range of services have always been associated with quality service.... </p>
                    </div>
                </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                        <div class="service-icon">
                            <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                        </div>
                        <div class="service-content">
                            <h4>Calibration of Meters And Tanks
                            </h4>
                            <p>{ATPC and its range of services have always been associated with quality service.... </p>
                        </div>
                    </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                        <div class="service-icon">
                            <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                        </div>
                        <div class="service-content">
                            <h4>Crimping Machine Services
                            </h4>
                            <p>{ATPC and its range of services have always been associated with quality service.... </p>
                        </div>
                    </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                        <div class="service-icon">
                            <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                        </div>
                        <div class="service-content">
                            <h4>Mining Work
                            </h4>
                            <p>{ATPC and its range of services have always been associated with quality service.... </p>
                        </div>
                    </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                        <div class="service-icon">
                            <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                        </div>
                        <div class="service-content">
                            <h4>Industrial And Domestic drilling
                            </h4>
                            <p>{ATPC and its range of services have always been associated with quality service.... </p>
                        </div>
                    </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                        <div class="service-icon">
                            <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                        </div>
                        <div class="service-content">
                            <h4>Repair and maintenance of service
                            </h4>
                            <p>{ATPC and its range of services have always been associated with quality service.... </p>
                        </div>
                    </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                    <div class="service-icon">
                        <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                    </div>
                    <div class="service-content">
                        <h4>Management Of Industrial And Domestic Waste
                        </h4>
                        <p>{ATPC and its range of services have always been associated with quality service.... </p>
                    </div>
                </div></a>
                <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                        <div class="service-icon">
                            <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                        </div>
                        <div class="service-content">
                            <h4>Civil Engeneers and Construction Work
                            </h4>
                            <p>{ATPC and its range of services have always been associated with quality service.... </p>
                        </div>
                    </div></a>

                </div></a>


          <a href="{{url('my-service/1')}}"><div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>Sale And Installation Of Solar Equipment
                    </h4>
                    <p>{ATPC and its range of services have always been associated with quality service.... </p>
                </div>

            <!-- End Service Icon 1 -->


        </div>
        <!-- End Services Icons -->

    </div>
</div>
<!-- End Full Width Section 1 -->


<!-- Start Full Width Section 2 -->
<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
    <div class="container">

        <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-6">

                <!-- Start Big Heading -->
                <div class="big-title">
                    <h1><strong>More</strong> About Us</h1>
                    <p class="title-desc">Some Words About Our Company</p>
                </div>
                <!-- End Big Heading -->

                <!-- Some Text -->
                <p>AFRICTECH PUMPS AND CONSTRUCTIONS CONGO CD
                    (ATPC), is a Congolese company in accordance with
                    OHADA. AFRICTECH PUMPS AND CONSTRUCTIONS
                    CONGO CD exists since 2017 and provides effective
                    solutions to many projects in different areas through the
                    below core competencies:</p>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:14px;"></div>

                <!-- Start Icons Lists -->
                <div class="row">
                    <div class="col-md-6">
                        <ul class="icons-list">
                            <li><i class="icon-check-2"></i> Supply and repair of different types of pumps,.</li>
                            <li><i class="icon-check-2"></i> Industrial and domestic drilling.</li>
                            <li><i class="icon-check-2"></i> Civil engineering.</li>
                            <li><i class="icon-check-2"></i> Supply of equipment and petroleum products.</li>
                            <li><i class="icon-check-2"></i> We also have expertise in the management of industrial.</li>
                            <li><i class="icon-check-2">domestic waste and the treatment of used oils</i></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="icons-list">
                            <li><i class="icon-check-2"></i> Duis aute irure dolor in reprehenderit.</li>
                            <li><i class="icon-check-2"></i> Calibration of meters and tanks.</li>
                            <li><i class="icon-check-2"></i> cleaning of different types of tanks and fuel purification.</li>
                            <li><i class="icon-check-2"></i> Sale and installation of solar equipment.</li>
                            <li><i class="icon-check-2"></i> crimping services.</li>
                            <li><i class="icon-check-2"></i> maintenance service.</li>

                        </ul>
                    </div>
                </div>
                <!-- End Icons Lists -->

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:20px;"></div>

                <!-- Button -->
                <a href="{{url('/about-us')}}" class="btn-system btn-small" style="background-color: #00005e">More Informations</a>
            </div>
            <!-- End Left Side -->

            <!-- Vimeo Iframe -->
            <div class="col-md-6">
                <iframe src="{{url('assets/images/video/video.mp4')}}" width="800" height="450" frameborder="0"></iframe>
            </div>

        </div>

    </div>
</div>
<!-- End Full Width Section 2 -->


<!-- Start Full Width Section 3 -->
<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:0; border-bottom:0; background:#fff;">
    <div class="container">

        <!-- Start Big Heading -->
        <div class="big-title text-center">
            <p class="title-desc">Showcase Your Work</p>
            <h1>Latest <strong>Work</strong></h1>
        </div>
        <!-- End Big Heading -->

        <!-- Some Text -->
        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:15px;"></div>

        <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
            <div class="projects-carousel touch-carousel navigation-3">

                <!-- Start Project Item -->


                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/1.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>
                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/2.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>    <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/3.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>
                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/4.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>
                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/5.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>
                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/6.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>
                <div class="portfolio-item item">
                    <div class="portfolio-border">
                        <!-- Start Project Thumb -->
                        <div class="portfolio-thumb">
                            <img alt="" src="{{url('assets/images/projects/7.png')}}" />
                        </div>
                        <!-- End Project Thumb -->
                        <!-- Start Project Details -->
                        <div class="portfolio-details">
                            <a href="#">
                                <h4>Titre Premier</h4>
                                <span>lorem ipsum</span>
                                {{--<span>Drawing</span>--}}
                            </a>
                            <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                        </div>
                        <!-- End Project Details -->
                    </div>
                </div>


                <!-- End Project Item -->

            </div>
        </div>
        <!-- End Recent Projects Carousel -->

        <!-- Divider -->
        {{--<div class="hr1" style="margin-bottom:30px;"></div>--}}

        {{--<!-- Button in Center -->--}}
        {{--<p class="text-center"><a href="{{url('portfolio')}}" class="btn-system btn-medium border-btn"><i class="icon-brush"></i> All Portfolio</a></p>--}}

    </div>
</div>
<!-- End Full Width Section 3 -->


<!-- Start Full Width Section 4 -->
<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <!-- Start Big Heading -->
                <div class="big-title">
                    <h1> <strong>PROJECT MANAGEMENT</strong></h1>
                </div>
                <!-- End Big Heading -->
                    <p>TO ACHIEVE ITS VISION, THE COMPANY:</p>
                <!-- Some Text -->
                        <ul class="icons-list">
                            <li><i class="icon-check-2"></i> Provides superior technical quality and appropriate engineering solutions on all projects;</li>
                            <li><i class="icon-check-2"></i> Offers unparalleled treatment and quality of service to all its customers, thus developing a solid relationship with them aimed at their satisfaction;</li>
                            <li><i class="icon-check-2"></i> Employs world-class, experienced and highly motivated qualified staff while continuously identifying and encouraging young, energetic and intelligent individuals to achieve their full potential;</li>
                            <li><i class="icon-check-2"></i> Creates opportunities for innovation and advancement of its staff</li>
                            <li><i class="icon-check-2"></i> Implements sound business management principles and effective strategies to ensure the long-term viability and growth of the business.</li>
                        </ul>
            </div>

            <!-- Start Progress Bars -->

            <div class="col-md-6">
                <!-- Start Progress Bar 1 -->
                <div class="progress-label">Fuel Purification</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Supply and repair of pumps</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Calibration of Meters And Tanks</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Crimping Machine Services</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Mining work</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Industrial And Domestic drilling</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Repair and maintenance of service</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>
                <div class="progress-label">Management Of Industrial And Domestic Waste</div>
                <div class="progress">
                    <div class="progress-bar" style="background-color: #00005e" data-progress-animation="98%">
                        <span class="percentage">98%</span>
                    </div>
                </div>

            </div>
            <!-- End Progress Bars -->

        </div>

        <!-- Divider -->
        <div class="hr5" style="margin-top:30px; margin-bottom:40px;"></div>

        <!-- Start Team Members -->
        {{--<div class="row">--}}

            {{--<!-- Start Memebr 1 -->--}}
            {{--<div class="col-md-3">--}}
                {{--<div class="team-member">--}}
                    {{--<!-- Memebr Photo, Name & Position -->--}}
                    {{--<div class="member-photo">--}}
                        {{--<img alt="" src="{{url('assets/images/member-01.jpg')}}" />--}}
                        {{--<div class="member-name">John Doe <span>Developer</span></div>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Words -->--}}
                    {{--<div class="member-info">--}}
                        {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Social Links -->--}}
                    {{--<div class="member-socail">--}}
                        {{--<a class="twitter" href="#"><i class="icon-twitter-2"></i></a>--}}
                        {{--<a class="gplus" href="#"><i class="icon-gplus"></i></a>--}}
                        {{--<a class="linkedin" href="#"><i class="icon-linkedin"></i></a>--}}
                        {{--<a class="flickr" href="#"><i class="icon-flickr-1"></i></a>--}}
                        {{--<a class="mail" href="#"><i class="icon-mail-2"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Memebr 1 -->--}}

            {{--<!-- Start Memebr 2 -->--}}
            {{--<div class="col-md-3">--}}
                {{--<div class="team-member">--}}
                    {{--<!-- Memebr Photo, Name & Position -->--}}
                    {{--<div class="member-photo">--}}
                        {{--<img alt="" src="{{url('assets/images/member-02.jpg')}}" />--}}
                        {{--<div class="member-name">Silly Sally <span>Developer</span></div>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Words -->--}}
                    {{--<div class="member-info">--}}
                        {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Social Links -->--}}
                    {{--<div class="member-socail">--}}
                        {{--<a class="facebook" href="#"><i class="icon-facebook"></i></a>--}}
                        {{--<a class="gplus" href="#"><i class="icon-gplus"></i></a>--}}
                        {{--<a class="dribbble" href="#"><i class="icon-dribbble-2"></i></a>--}}
                        {{--<a class="flickr" href="#"><i class="icon-flickr-1"></i></a>--}}
                        {{--<a class="instagramm" href="#"><i class="icon-instagramm"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Memebr 2 -->--}}

            {{--<!-- Start Memebr 3 -->--}}
            {{--<div class="col-md-3">--}}
                {{--<div class="team-member">--}}
                    {{--<!-- Memebr Photo, Name & Position -->--}}
                    {{--<div class="member-photo">--}}
                        {{--<img alt="" src="{{url('assets/images/member-03.jpg')}}" />--}}
                        {{--<div class="member-name">Chris John <span>Developer</span></div>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Words -->--}}
                    {{--<div class="member-info">--}}
                        {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Social Links -->--}}
                    {{--<div class="member-socail">--}}
                        {{--<a class="facebook" href="#"><i class="icon-facebook"></i></a>--}}
                        {{--<a class="twitter" href="#"><i class="icon-twitter-2"></i></a>--}}
                        {{--<a class="dribbble" href="#"><i class="icon-dribbble-2"></i></a>--}}
                        {{--<a class="linkedin" href="#"><i class="icon-linkedin"></i></a>--}}
                        {{--<a class="mail" href="#"><i class="icon-mail-2"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Memebr 3 -->--}}

            {{--<!-- Start Memebr 4 -->--}}
            {{--<div class="col-md-3">--}}
                {{--<div class="team-member">--}}
                    {{--<!-- Memebr Photo, Name & Position -->--}}
                    {{--<div class="member-photo">--}}
                        {{--<img alt="" src="{{url('assets/images/member-04.jpg')}}" />--}}
                        {{--<div class="member-name">Sara John <span>Developer</span></div>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Words -->--}}
                    {{--<div class="member-info">--}}
                        {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>--}}
                    {{--</div>--}}
                    {{--<!-- Memebr Social Links -->--}}
                    {{--<div class="member-socail">--}}
                        {{--<a class="facebook" href="#"><i class="icon-facebook"></i></a>--}}
                        {{--<a class="twitter" href="#"><i class="icon-twitter-2"></i></a>--}}
                        {{--<a class="dribbble" href="#"><i class="icon-dribbble-2"></i></a>--}}
                        {{--<a class="flickr" href="#"><i class="icon-flickr-1"></i></a>--}}
                        {{--<a class="instagramm" href="#"><i class="icon-instagramm"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- End Memebr 4 -->--}}

        {{--</div>--}}
        {{--<!-- End Team Members -->--}}

    </div>
</div>
    @endsection

