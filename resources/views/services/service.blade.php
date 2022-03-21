@extends('layouts.app-default')

@section('content-body')
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Lorem Ipsum</h2>
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
                <div class="project-media col-md-8">
                    <div class="touch-slider project-slider">
                        <div class="item">
                            <a class="lightbox" title="This is an image title" href="{{url('assets/images/project-big-01.jpg')}}" data-lightbox-gallery="gallery2">
                                <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                <img alt="" src="{{url('assets/images/project-01.jpg')}}">
                            </a>
                        </div>
                        <div class="item">
                            <a class="lightbox" title="This is an image title" href="{{url('assets/images/project-big-02.jpg')}}" data-lightbox-gallery="gallery2">
                                <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                <img alt="" src="{{url('assets/images/project-02.jpg')}}">
                            </a>
                        </div>
                        <div class="item">
                            <a class="lightbox" title="This is an image title" href="{{url('assets/images/project-big-03.jpg')}}" data-lightbox-gallery="gallery2">
                                <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                <img alt="" src="{{url('assets/images/project-03.jpg')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Project Slider -->

                <!-- Start Project Content -->
                <div class="project-content col-md-4">
                    <h4><span>Project Description</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed facilisis purus. Donec interdum massa at ipsum vehicula tristique. Maecenas bibendum dictum tincidunt. Sed nec justo ac libero consequat tincidunt. Cras eget molestie justo.</p>
                    <h4><span>Project Details</span></h4>
                    <ul>
                        <li><strong>Client:</strong> Envato</li>
                        <li><strong>Status:</strong> Finish on 30 Dec, 2013</li>
                        <li><strong>Skills:</strong> creative, web design</li>
                    </ul>
                    <div class="post-share">
                        <span>Share This:</span>
                        <a class="facebook" href="#"><i class="icon-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-twitter"></i></a>
                        <a class="gplus" href="#"><i class="icon-gplus"></i></a>
                        <a class="linkedin" href="#"><i class="icon-linkedin-1"></i></a>
                        <a class="mail" href="#"><i class="icon-mail-4"></i></a>
                    </div>
                </div>
                <!-- End Project Content -->

            </div>

            <!-- Start Recent Projects Carousel -->
            <div class="recent-projects">
                <h4 class="title"><span>Recent Projects</span></h4>
                <div class="projects-carousel touch-carousel">

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                                    <div class="thumb-overlay"><i class="icon-video-1"></i></div>
                                    <img alt="" src="images/portfolio-01.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Website</span>
                                    <span>Drawing</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" src="images/portfolio-02.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Logo</span>
                                    <span>Animation</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a href="#">
                                    <div class="thumb-overlay"><i class="icon-link-1"></i></div>
                                    <img alt="" src="images/portfolio-03.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Drawing</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a href="#">
                                    <div class="thumb-overlay"><i class="icon-link-1"></i></div>
                                    <img alt="" src="images/portfolio-04.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Website</span>
                                    <span>Ilustration</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a class="lightbox" title="This is an image title" href="images/portfolio-big-02.jpg">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" src="images/portfolio-05.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Logo</span>
                                    <span>Drawing</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a href="#">
                                    <div class="thumb-overlay"><i class="icon-link-1"></i></div>
                                    <img alt="" src="images/portfolio-06.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Animation</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a class="lightbox" title="This is an image title" href="images/portfolio-big-03.jpg">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" src="images/portfolio-07.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Website</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a href="#">
                                    <div class="thumb-overlay"><i class="icon-link-1"></i></div>
                                    <img alt="" src="images/portfolio-08.jpg" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <span>Ilustration</span>
                                    <span>Animation</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Recent Projects Carousel -->

        </div>
    </div>
    <!-- End Content -->
@endsection