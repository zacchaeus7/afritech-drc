@extends('layouts.app-default')
@section('title')
    Afritech | portfolio
    @endsection
@section('content-body')

    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Projects realised</h2>
                    <p>Afritech</p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="row portfolio-page">

                {{--<!-- Start Portfolio Filter -->--}}
                {{--<div class="portfolio-filter col-md-12">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#" class="selected" data-filter="*">Show All</a></li>--}}
                        {{--<li><a href="#" data-filter=".web">Web Design</a></li>--}}
                        {{--<li><a href="#" data-filter=".logo">Logo</a></li>--}}
                        {{--<li><a href="#" data-filter=".drawing">Drawing</a></li>--}}
                        {{--<li><a href="#" data-filter=".ilustration">Ilustration</a></li>--}}
                        {{--<li><a href="#" data-filter=".animation">Animation</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!-- End Portfolio Filter -->--}}

                <!-- Start Portfolio Items -->
                <div id="portfolio" class="portfolio-3">

                    <!-- Start Portfolio Item -->
                    @foreach($portfolios as $portfolio)
                        <div class="portfolio-item web drawing col-md-4">
                            <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="" data-lightbox-type="ajax" href="">
                                        <img alt="" src="{{url('assets/images/projects/'.$portfolio->cover)}}" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4>{{$portfolio->title}}</h4>
                                        <h6> <strong>({{substr($portfolio->service->title,0,150)}})</strong> </h6>
                                        <span>{{substr($portfolio->description,0,150)}}</span>

                                    </a>
                                    {{--<a href="#" class="like-link"><i class="icon-heart-1"></i><span>8</span></a>--}}
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Portfolio Items -->

            </div>
        </div>
    </div>
    <!-- End Content -->

    @endsection