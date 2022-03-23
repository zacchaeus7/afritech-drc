@extends('layouts.app-default')

@section('content-body')

    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>We Are Professional</p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="page-content">


                <div class="row">

                    <div class="col-md-7">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Welcome To Our Agency</span></h4>

                        <!-- Some Text -->
                        <p>MW AFRITEC, present for more than 20 years in the DRC, with the objective of rebuilding our great country, has its head office in Kinshasa and other representative offices in the DRCongo and abroad.

                            MW AFRITEC SPRL holds an exceptional position in the field of construction and Civil Engineering thanks to its many specialists and Technicians in the fields of African Building and Public Works and engineering in general.

                            The firm currently employs 272 contracted agents including 35 engineers and technicians and nearly 500 temporary agents on various worksites.
                            Since 2009, the MW Afritec Company has experienced an extension in its activities in the field of agriculture and livestock as well as in the field of transport.</p>
                    </div>

                    <div class="col-md-5">

                        <!-- Start Touch Slider -->
                        <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                            @foreach($services as $service)
                                <div class="item"><img alt="" src="{{url('assets/images/services/'.$service->cover)}}"></div>
                                <div class="item"><img alt="" src="{{url('assets/images/services/'.$service->cover)}}"></div>

                            @endforeach
                        </div>
                        <!-- End Touch Slider -->

                    </div>

                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:50px;"></div>

                <div class="row">

                    <div class="col-md-6">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Our Skills</span></h4>

                        <!-- Start Progress Bar 1 -->
                        <div class="progress-label">HTML/CSS</div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="98%">
                                <span class="percentage">98%</span>
                            </div>
                        </div>

                        <!-- Start Progress Bar 2 -->
                        <div class="progress-label">Web Developing</div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                                <span class="percentage">96%</span>
                            </div>
                        </div>

                        <!-- Start Progress Bar 3 -->
                        <div class="progress-label">Video marketing</div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="94%" data-appear-animation-delay="800">
                                <span class="percentage">94%</span>
                            </div>
                        </div>

                        <!-- Start Progress Bar 4 -->
                        <div class="progress-label">Support</div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                <span class="percentage">100%</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Our Solutions</span></h4>

                        <!-- Accordion -->
                        <div class="panel-group" id="accordion">

                            <!-- Start Accordion 1 -->
                            <div class="panel panel-default">
                                <!-- Toggle Heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                            <i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-laptop-1"></i> Fully Responsive Theme
                                        </a>
                                    </h4>
                                </div>
                                <!-- Toggle Content -->
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src="images/bussniss-pic.jpg" /> <strong class="accent-color">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <strong>printer</strong> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                                </div>
                            </div>
                            <!-- End Accordion 1 -->

                            <!-- Start Accordion 2 -->
                            <div class="panel panel-default">
                                <!-- Toggle Heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                                            <i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-gift-1"></i> Touchable Slider
                                        </a>
                                    </h4>
                                </div>
                                <!-- Toggle Content -->
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                            </div>
                            <!-- End Accordion 2 -->

                        </div>
                    </div>

                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:50px;"></div>

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Our Partners</span></h4>

                <!-- Start Team Members -->
                <div class="row">

                    @foreach($partners as $partner)

                        <!-- Start Memebr 1 -->
                            <div class="col-md-3">
                                <div class="team-member">
                                    <!-- Memebr Photo, Name & Position -->
                                    <div class="member-photo">
                                        <img alt="" src="{{url('assets/images/partners/',$partner->cover)}}" />
                                        <div class="member-name">{{$partner->title}}</div>
                                    </div>
                                    <!-- Memebr Words -->
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
                                </div>
                            </div>
                            <!-- End Memebr 1 -->
                    @endforeach

                </div>
                <!-- End Team Members -->

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:50px;"></div>

                <!-- Start Clients Carousel -->
                <div class="our-clients">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Our Happy Clients</span></h4>

                    <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

                        <!-- Client 1 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c1.png" alt="" /></a>
                        </div>

                        <!-- Client 2 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c2.png" alt="" /></a>
                        </div>

                        <!-- Client 3 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c3.png" alt="" /></a>
                        </div>

                        <!-- Client 4 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c4.png" alt="" /></a>
                        </div>

                        <!-- Client 5 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c5.png" alt="" /></a>
                        </div>

                        <!-- Client 6 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c6.png" alt="" /></a>
                        </div>

                        <!-- Client 7 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c7.png" alt="" /></a>
                        </div>

                        <!-- Client 8 -->
                        <div class="client-item item">
                            <a href="#"><img src="images/c8.png" alt="" /></a>
                        </div>

                    </div>
                </div>
                <!-- End Clients Carousel -->


            </div>
        </div>
    </div>
    <!-- End content -->


@endsection