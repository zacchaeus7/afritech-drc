
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
                        <img src="{{url('assets/images/Image-13.png')}}" data-fullwidthcentering="on" alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption uppercase big_font_size boldest_font_weight dark_font_color sft start"
                             data-x="540"
                             data-y="125"

                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo"><span class="accent-color">Solutions</span><br>that you need!
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_font_size regular_font_weight dark_font_color sfl start"
                             data-x="540"
                             data-y="208"

                             data-speed="300"
                             data-start="1900"
                             {{--data-easing="easeOutExpo">The best template to get you started--}}
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption mini_font_size light_font_weight gray_font_color sfr start"
                             data-x="540"
                             data-y="250"

                             data-speed="300"
                             data-start="2200"
                             {{--data-easing="easeOutExpo">Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br/>accusantium doloremque laudantium, totam rem aperiam.--}}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfb start"
                             data-x="540"
                             data-y="314"

                             data-speed="300"
                             data-start="2500"
                             {{--data-easing="easeOutExpo"><a href="#" class="tp-caption btn-system btn-large border-btn btn-gray">Purchase This Now</a>--}}
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption sfl start"
                             data-x="180"
                             data-y="bottom"

                             data-speed="1000"
                             data-start="1000"
                             {{--data-easing="Power1.easeOut"><img src="{{url('assets/images/slide-02-image-01.png')}}" alt="" />--}}
                        </div>

                    </li>

                    <!-- SLIDE 2  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <!-- MAIN IMAGE -->
                        <img src="{{url('assets/images/slider-11.png')}}" data-fullwidthcentering="on" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

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
                             data-y="150"

                             data-speed="300"
                             data-start="1900"
                             data-easing="easeInOutExpo">Industrial and domestic drilling.

                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfl start"
                             data-x="left"
                             data-y="190"

                             data-speed="300"
                             data-start="2200"
                             data-easing="easeInOutExpo">Civil engineering.

                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption  mini_font_size bold_font_weight dark_font_color gray_bg sfr start"
                             data-x="left"
                             data-y="230"

                             data-speed="300"
                             data-start="2500"
                             data-easing="easeInOutExpo"> Supply of equipment and petroleum products

                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfl start"
                             data-x="left"
                             data-y="270"

                             data-speed="300"
                             data-start="2800"
                             data-easing="easeInOutExpo">We also have expertise in the management of industrial.

                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption mini_font_size bold_font_weight dark_font_color gray_bg sfr start"
                             data-x="left"
                             data-y="310"

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
                             style="z-index: 1"><img src="{{url('assets/images/slide-03-image-02.png')}}" alt="" />
                        </div>

                    </li>

                    <!-- SLIDE 3  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <!-- MAIN IMAGE -->
                        <img src="{{url('assets/images/Image-12.png')}}" data-fullwidthcentering="on" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption uppercase big_font_size boldest_font_weight dark_font_color sft start"
                             data-x="center"
                             data-y="140"

                             data-speed="300"
                             data-start="1000"
                             data-easing="easeOutExpo">THE BEST IN DRC
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_font_size regular_font_weight dark_font_color sfb start"
                             data-x="center"
                             data-y="182"

                             data-speed="300"
                             data-start="1300"
                             {{--data-easing="easeOutExpo">The Best to Get You Started--}}
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption small_font_size light_font_weight gray_font_color text-center sfb start"
                             data-x="center"
                             data-y="220"

                             data-speed="300"
                             data-start="1600"
                             {{--data-easing="easeOutExpo">Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br/>accusantium doloremque laudantium, totam rem aperiam.--}}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfr start"
                             data-x="center"
                             data-y="292"
                             data-hoffset="84"

                             data-speed="600"
                             data-start="2000"
                             {{--data-easing="easeOutExpo"><a href="#" class="btn-system btn-medium">Purchase This Now</a>--}}
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption sfl start"
                             data-x="center"
                             data-y="292"
                             data-hoffset="-84"

                             data-speed="600"
                             data-start="2000"
                             {{--data-easing="easeOutExpo"><a href="#" class="btn-system btn-medium btn-gray">See More Features</a>--}}
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption customin start"
                             data-x="880"
                             data-y="30"

                             data-speed="1600"
                             data-start="2100"
                             data-easing="Power1.easeOut"
                             data-customin="x:300;y:-40;z:-400;rotationX:0;rotationY:0;rotationZ:-20;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;">
                            <img src="{{url('assets/images/slide-01-image-02.png')}}" alt="" style="width:193px; height: 231px;" />
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption customin start"
                             data-x="140"
                             data-y="120"

                             data-speed="1400"
                             data-start="2600"
                             data-easing="Power1.easeOut"
                             data-customin="x:-200;y:20;z:-500;rotationX:0;rotationY:0;rotationZ:10;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;">
                            <img src="{{url('assets/images/slide-01-image-01.png')}}" alt="" style="width:80px; height: 101px;" />
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
            @foreach($services as $service)
                <a href="{{url('my-service/'.$service->id)}}"><div class="col-md-4 service-box service-icon-left">
                <div class="service-icon">
                    <i class="icon-check-2 icon-mini-effect icon-effect-2 gray-icon"></i>
                </div>
                <div class="service-content">
                    <h4>{{$service->title}}
                    </h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut <strong class="accent-color">odit aut</strong> fugit, sed quia dolores.</p>
                </div>
            </div></a>
            @endforeach
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
                <a href="{{url('/about-us')}}" class="btn-system btn-small">More Informations</a>
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
            <h1>This is Our Latest <strong>Work</strong></h1>
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

                @foreach($projects as $project)
                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <!-- Start Project Thumb -->
                            <div class="portfolio-thumb">
                                <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                                    <div class="thumb-overlay"><i class="icon-video-1"></i></div>
                                    <img alt="" src="{{url('assets/images/projects/'.$project->cover)}}" />
                                </a>
                            </div>
                            <!-- End Project Thumb -->
                            <!-- Start Project Details -->
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>{{$project->title}}</h4>
                                    <span>{{substr($project->description,0,150)}}</span>
                                    {{--<span>Drawing</span>--}}
                                </a>
                                <a href="#" class="like-link"><i class="icon-heart-1"></i><span>12</span></a>
                            </div>
                            <!-- End Project Details -->
                        </div>
                    </div>
                @endforeach

                <!-- End Project Item -->

            </div>
        </div>
        <!-- End Recent Projects Carousel -->

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:30px;"></div>

        <!-- Button in Center -->
        <p class="text-center"><a href="{{url('portfolio')}}" class="btn-system btn-medium border-btn"><i class="icon-brush"></i> All Portfolio</a></p>

    </div>
</div>
<!-- End Full Width Section 3 -->


<!-- Start Full Width Section 4 -->
<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <!-- Start Big Heading -->
                <div class="big-title">
                    <h1>Our Great <strong>Team</strong></h1>
                </div>
                <!-- End Big Heading -->

                <!-- Some Text -->
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cent, but also the leap into electronic typesetting, remaining essentially unchanged. It was popular in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, more recently with desktop publishing software like Aldus PageMaker including versions.</p>
            </div>

            <!-- Start Progress Bars -->

            <div class="col-md-12">
                <!-- Start Progress Bar 1 -->
                @foreach($services as $service)
                    <div class="progress-label">{{$service->title}}</div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" data-progress-animation="98%">
                            <span class="percentage">98%</span>
                        </div>
                    </div>
                @endforeach

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

