@extends('layouts.app-default')

@section('content-body')
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-warning">{{$service->title}}</h2>
                    <p>Single Project Subtitle</p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li>Lorem Ipsum</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="project-page row">

                <!-- Start Single Project Slider -->
                <div class="project-media col-md-6">
                    <div class="touch-slider project-slider">
                        <div class="item">
                            <a class="lightbox" title="This is an image title" href="{{url('assets/images/services/'.$service->cover)}}" data-lightbox-gallery="gallery2">
                                <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                <img alt=""style="width: 300px" src="{{url('assets/images/services/'.$service->cover)}}">
                            </a>
                        </div>
                        {{--<div class="item">--}}
                            {{--<a class="lightbox" title="This is an image title" href="{{url('assets/images/project-big-03.jpg')}}" data-lightbox-gallery="gallery2">--}}
                                {{--<div class="thumb-overlay"><i class="icon-resize-full"></i></div>--}}
                                {{--<img alt="" src="{{url('assets/images/logo.png')}}">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <!-- End Single Project Slider -->

                <!-- Start Project Content -->
                <div class="project-content col-md-6">
                    <h4><span>Service Description</span></h4>
                    <p>{{$service->description}}</p>
                    {{--<h4><span>Project Details</span></h4>--}}
                    {{--<ul>--}}
                        {{--<li><strong>Client:</strong> Envato</li>--}}
                        {{--<li><strong>Status:</strong> Finish on 30 Dec, 2013</li>--}}
                        {{--<li><strong>Skills:</strong> creative, web design</li>--}}
                    {{--</ul>--}}
                    {{--<div class="post-share">--}}
                        {{--<span>Share This:</span>--}}
                        {{--<a class="facebook" href="#"><i class="icon-facebook"></i></a>--}}
                        {{--<a class="twitter" href="#"><i class="icon-twitter"></i></a>--}}
                        {{--<a class="gplus" href="#"><i class="icon-gplus"></i></a>--}}
                        {{--<a class="linkedin" href="#"><i class="icon-linkedin-1"></i></a>--}}
                        {{--<a class="mail" href="#"><i class="icon-mail-4"></i></a>--}}
                    {{--</div>--}}
                </div>
                <!-- End Project Content -->

            </div>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:45px;"></div>

            <div class="row">

                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>What we offer you in this service</span></h4>

                    <!-- Accordion -->
                    <div class="panel-group" id="accordion">

                        <!-- Start Accordion 1 -->

                        @foreach($sub_services as $service)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" class="collapsed">
                                            <i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-gift-1"></i> {{$service->title}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-tow" class="panel-collapse collapse">
                                    <div class="panel-body">{{$service->description}}</div>
                                </div>
                            </div>

                        @endforeach

                        <!-- End Accordion 1 -->

                    </div>
                    <!-- End Accordion -->

                </div>

                <div class="col-md-8">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Illustrations</span></h4>

                    <div class="row">

                        <!-- Start Service Icon 1 -->
                        @foreach($sub_services as $service)
                            <a href=""> <div class="col-md-3 image-service-box">
                                    <img class="img-thumbnail" src="{{url('assets/images/services/'.$service->cover)}}" alt="" />
                                </div></a>
                        @endforeach

                    </div>
                </div>

            </div>

            <hr>
            <!-- Start Recent Projects Carousel -->
            <div class="recent-projects">
                <h4 class="title"><span>realised Projects({{$service->title}})</span></h4>
                <div class="projects-carousel touch-carousel">

                    @foreach($project as $pro)
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb">
                                    <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                                        <div class="thumb-overlay"><i class="icon-video-1"></i></div>
                                        <img alt="" src="{{url('assets/images/projects/'.$pro->cover)}}" />
                                    </a>
                                </div>
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>{{$pro->title}}</h4>
                                        <span>{{$pro->description}}</span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- End Recent Projects Carousel -->

        </div>
    </div>
    <!-- End Content -->
@endsection