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
                        <h4 class="classic-title"><span>Welcome To Our Compagny</span></h4>

                        <!-- Some Text -->
                        <p>AFRICTECH, present for more than 20 years in the DRC, with the objective of rebuilding our great country, has its head office in Kinshasa and other representative offices in the DRCongo and abroad.

                            AFRICTECH SPRL holds an exceptional position in the field of construction and Civil Engineering thanks to its many specialists and Technicians in the fields of African Building and Public Works and engineering in general.

                            The firm currently employs 272 contracted agents including 35 engineers and technicians and nearly 500 temporary agents on various worksites.
                            Since 2009, the MW Africtech Company has experienced an extension in its activities in the field of agriculture and livestock as well as in the field of transport.</p>
                    </div>

                    <div class="col-md-5">

                        <!-- Start Touch Slider -->
                        <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                            @foreach($services as $service)
                                <div class="item"><img alt="" style="width: 400px" src="{{url('assets/images/services/'.$service->cover)}}"></div>
                                <div class="item"><img alt="" style="width: 400px"  src="{{url('assets/images/services/'.$service->cover)}}"></div>

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
                        <h4 class="classic-title"><span>Our Vision</span></h4>

                      <p>
                          *Satisfying you is our goal * this is our slogan. As a
                          company governed by Congolese law, our vision is to
                          promote skilled and unskilled local labor. Produce quality
                          work in accordance with international standards. To
                          support motivated, talented, flexible young people; our
                          employees, our customers, our suppliers and partners in
                          compliance with social and environmental legislation.
                          Continue to expand our leadership role in the mining,
                          petroleum and environmental market. Being competitive
                          with new technology, having high productivity, profitable
                          techniques by building relationships with our customers
                          and employees based on performance, skills and trust</p>

                    </div>

                    <div class="col-md-6">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Our Solutions</span></h4>

                        <!-- Accordion -->
                        <div class="panel-group" id="accordion">


                            <!-- Start Accordion 1 -->
                            @foreach($services as $service)

                                <div class="panel panel-default">
                                    <!-- Toggle Heading -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse" class="collapsed">
                                                {{--<i class="icon-down-open-1 control-icon"></i>--}}
                                                {{--<i class="icon-down-open-1 control-icon"></i>--}}
                                                <i class="icon-gift-1"></i> {{$service->title}}
                                                {{--<i class="icon-gift-1"></i> {{$service->title}}--}}
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Toggle Content -->
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body"> {{$service->description}} </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- End Accordion 1 -->


                        </div>
                    </div>

                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:50px;"></div>

                <!-- Classic Heading -->
                {{--<h4 class="classic-title"><span>Our Partners</span></h4>--}}

                {{--<!-- Start Team Members -->--}}
                {{--<div class="row">--}}

                    {{--@foreach($partners as $partner)--}}

                        {{--<!-- Start Memebr 1 -->--}}
                            {{--<div class="col-md-3">--}}
                                {{--<div class="team-member">--}}
                                    {{--<!-- Memebr Photo, Name & Position -->--}}
                                    {{--<div class="member-photo">--}}
                                        {{--<img alt="" src="{{url('assets/images/partners/',$partner->cover)}}" />--}}
                                        {{--<div class="member-name">{{$partner->title}}</div>--}}
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
                    {{--@endforeach--}}

                {{--</div>--}}
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