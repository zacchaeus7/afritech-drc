@extends('layouts.app-default')

@section('title')
    Afritech | Our Services
@endsection
@section('content-body')


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Services</h2>
                    <p>We Are Professional</p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>Services</li>
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

                    <!-- Start Image Service Box 1 -->
                    @foreach($services as $service)
                        <a href="{{url('my-service',$service->id)}}"> <div class="col-md-4 image-service-box">
                                <img class="img-thumbnail" src="{{url('assets/images/services/'.$service->cover)}}" alt="" />
                                <h4>{{$service->title}}</h4>
                                <p>{{substr($service->description,0,200)}} <strong>' ...Lire plus'</strong> </p>
                            </div></a>
                    @endforeach

                    <!-- End Image Service Box 1 -->

                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:45px;"></div>

                <div class="row">

                    <div class="col-md-4">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>We Aare Awesome</span></h4>

                        <!-- Accordion -->
                        <div class="panel-group" id="accordion">

                            <!-- Start Accordion 1 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                                            <i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-laptop-1"></i> Fully Responsive Theme
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-one" class="panel-collapse collapse in">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ea commodo consequat. Duis aute irure dolor in reprehe in voluptate velit esse cillum dolore fugiat nulla pariatur.</div>
                                </div>
                            </div>
                            <!-- End Accordion 1 -->

                            <!-- Start Accordion 2 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" class="collapsed">
                                            <i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-gift-1"></i> Touchable Slider
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-tow" class="panel-collapse collapse">
                                    <div class="panel-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a <strong>more-or-less</strong> normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                                </div>
                            </div>
                            <!-- End Accordion 2 -->

                            <!-- Start Accordion 3 -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three" class="collapsed">
                                            <i class="icon-down-open-1 control-icon"></i>
                                            <i class="icon-tint"></i> Retina Ready
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-three" class="panel-collapse collapse">
                                    <div class="panel-body"><strong>Duis</strong> aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore...</div>
                                </div>
                            </div>
                            <!-- End Accordion 3 -->

                        </div>
                        <!-- End Accordion -->

                    </div>

                    <div class="col-md-8">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Our Features</span></h4>

                        <div class="row">

                            <!-- Start Service Icon 1 -->
                            <div class="col-md-6 service-box service-icon-left-more">
                                <div class="service-icon">
                                    <i class="icon-paper-plane icon-medium"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Photoshop</h4>
                                    <p>It is a long <strong class="accent-color">established</strong> fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <!-- End Service Icon 1 -->

                            <!-- Start Service Icon 2 -->
                            <div class="col-md-6 service-box service-icon-left-more">
                                <div class="service-icon">
                                    <i class="icon-basket-1 icon-medium"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Web Marketing</h4>
                                    <p>It is a long <strong class="accent-color">established</strong> fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <!-- End Service Icon 2 -->

                            <!-- Start Service Icon 3 -->
                            <div class="col-md-6 service-box service-icon-left-more">
                                <div class="service-icon">
                                    <i class="icon-globe-1 icon-medium"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Web Hosting</h4>
                                    <p>It is a long <strong class="accent-color">established</strong> fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <!-- End Service Icon 3 -->

                            <!-- Start Service Icon 4 -->
                            <div class="col-md-6 service-box service-icon-left-more">
                                <div class="service-icon">
                                    <i class="icon-camera-alt icon-medium"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Phtography</h4>
                                    <p>It is a long <strong class="accent-color">established</strong> fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <!-- End Service Icon 4 -->

                            <!-- Start Service Icon 5 -->
                            <div class="col-md-6 service-box service-icon-left-more">
                                <div class="service-icon">
                                    <i class="icon-feather icon-medium"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Product Design</h4>
                                    <p>It is a long <strong class="accent-color">established</strong> fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <!-- End Service Icon 5 -->

                            <!-- Start Service Icon 6 -->
                            <div class="col-md-6 service-box service-icon-left-more">
                                <div class="service-icon">
                                    <i class="icon-tools icon-medium"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Supporting</h4>
                                    <p>It is a long <strong class="accent-color">established</strong> fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <!-- End Service Icon 6 -->

                        </div>
                    </div>

                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:25px;"></div>

                <div class="row">

                    <div class="col-md-8">

                        {{--<!-- Start Clients Carousel -->--}}
                        {{--<div class="our-clients">--}}

                            {{--<!-- Classic Heading -->--}}
                            {{--<h4 class="classic-title"><span>Our Clients</span></h4>--}}

                            {{--<div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="4">--}}

                                {{--<!-- Client 1 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c1.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 2 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c2.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 3 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c3.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 4 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c4.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 5 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c5.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 6 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c6.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 7 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c7.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                                {{--<!-- Client 8 -->--}}
                                {{--<div class="client-item item">--}}
                                    {{--<a href="#"><img src="{{url('assets/images/c8.png')}}" alt="" /></a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End Clients Carousel -->--}}

                    </div>

                    {{--<div class="col-md-4">--}}

                        {{--<!-- Classic Heading -->--}}
                        {{--<h4 class="classic-title"><span>Client Testimonials</span></h4>--}}

                        {{--<!-- Start Testimonials Carousel -->--}}
                        {{--<div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">--}}
                            {{--<!-- Testimonial 1 -->--}}
                            {{--<div class="classic-testimonials item">--}}
                                {{--<div class="testimonial-content">--}}
                                    {{--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum.</p>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-author"><span>John Doe</span> - Customer</div>--}}
                            {{--</div>--}}
                            {{--<!-- Testimonial 2 -->--}}
                            {{--<div class="classic-testimonials item">--}}
                                {{--<div class="testimonial-content">--}}
                                    {{--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum.</p>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-author"><span>John Doe</span> - Customer</div>--}}
                            {{--</div>--}}
                            {{--<!-- Testimonial 3 -->--}}
                            {{--<div class="classic-testimonials item">--}}
                                {{--<div class="testimonial-content">--}}
                                    {{--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum.</p>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-author"><span>John Doe</span> - Customer</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End Testimonials Carousel -->--}}

                    {{--</div>--}}

                </div>


            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection