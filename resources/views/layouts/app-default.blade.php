<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Basic -->
    <title>@yield('title')</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Vella - Responsive HTML5 Template">
    <meta name="author" content="ZoOm Arts">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/ficon.png')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/ficon.png')}}">


    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}" type="text/css" media="screen">

    <!-- Revolution Banner CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/settings.css')}}" media="screen" />

    <!-- Vella CSS Styles  -->

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/responsive.css')}}" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/animate.css')}}" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/blue.css')}}" title="blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/beige.css')}}" title="beige" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/cyan.css')}}" title="cyan" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/green.css')}}" title="green" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/jade.css')}}" title="jade" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/orange.css')}}" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/peach.css')}}" title="peach" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/pink.css')}}" title="pink" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/purple.css')}}" title="purple" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/red.css')}}" title="red" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/sky-blue.css')}}" title="sky-blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/colors/yellow.css')}}" title="yellow" media="screen" />

    <!-- Fontello Icons CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/fontello.css')}}" media="screen">
    <!--[if IE 7]><link rel="stylesheet" href="{{url('assets/css/fontello-ie7.css')}}"><![endif]-->


    <!-- Vella JS  -->
    <script type="text/javascript" src="{{url('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.migrate.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/modernizrr.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.fitvids.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/nivo-lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/count-to.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.textillate.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.lettering.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.easypiechart.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/script.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/contact.form.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>

<!-- Container -->
<div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li><a href="#"><i class="icon-mobile-2"></i> +243 995 380 784/+243 995 380 784</a></li>
                            <li><a href="#"><i class="icon-mail-2"></i> <span class="__cf_email__" data-cfemail="11787f777e51687e6463727e7c61707f683f727e7c"> info@africtech-drc.com</span></a></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <div class="col-md-6">
                        <!-- Start Social Links -->
                        <ul class="social-list">
                            <li>
                                <a class="facebook sh-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="icon-facebook-2"></i></a>
                            </li>
                            <li>
                                <a class="twitter sh-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="icon-twitter-2"></i></a>
                            </li>
                            <li>
                                <a class="google sh-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="icon-gplus"></i></a>
                            </li>
                            <li>
                                <a class="dribbble sh-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="icon-dribbble-2"></i></a>
                            </li>
                            <li>
                                <a class="linkdin sh-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="icon-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="flickr sh-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="icon-flickr-1"></i></a>
                            </li>
                            <li>
                                <a class="tumblr sh-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="icon-tumblr"></i></a>
                            </li>
                            <li>
                                <a class="instgram sh-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="icon-instagramm"></i></a>
                            </li>
                            <li>
                                <a class="vimeo sh-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="icon-vimeo-1"></i></a>
                            </li>
                            <li>
                                <a class="skype sh-tooltip" data-placement="bottom" title="Skype" href="#"><i class="icon-skype-2"></i></a>
                            </li>
                        </ul>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Bar -->

        <!-- Start Header ( Logo & Naviagtion ) -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="icon-menu-1"></i>
                    </button>
                    <!-- End Toggle Nav Link For Mobiles -->
                    <a class="navbar-brand" href=""><img alt="" src="{{url('assets/images/africtech.png')}}" width="300px" height="50px"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Stat Search -->
                    <div class="search-side">
                        <a href="#" class="show-search"><i class="icon-search-1"></i></a>
                        <div class="search-form">
                            <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                            </form>
                        </div>
                    </div>
                    <!-- End Search -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="active" href="{{url('/')}}">Home</a>
                            {{--<ul class="dropdown">--}}
                                {{--<li><a href="index.html">Home Main Version</a></li>--}}
                                {{--<li><a href="index-01.html">Home Version 1</a></li>--}}
                                {{--<li><a href="index-02.html">Home Version 2</a></li>--}}
                                {{--<li><a href="index-03.html">Home Version 3</a></li>--}}
                                {{--<li><a href="index-04.html">Home Version 4</a></li>--}}
                                {{--<li><a href="index-05.html">Home Version 5</a></li>--}}
                                {{--<li><a href="index-06.html">Home Version 6</a></li>--}}
                                {{--<li><a class="active" href="index-07.html">Home Version 7</a></li>--}}
                                {{--<li><a href="index-08.html">Home Version 8</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li>
                            <a href="{{url('/our-services')}}">Services</a>
                        </li>
                        <li>
                            <a href="{{url('portfolio')}}">Portfolio</a>

                        </li>
                        <li>
                            <a href="{{url('about-us')}}">About</a>
                        </li>
                        <li><a href="{{url('/contact-us')}}">Contact</a></li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
        <!-- End Header ( Logo & Naviagtion ) -->
    </header>
    <!-- End Header -->


    <!-- Start Full Width Sections Content -->
    <div id="content" class="full-sections">
        @yield('content-body')
    </div>
        <!-- End Full Width Section 4 -->


        <!-- Start Full Width Section 5 -->
        <div class="section" style="padding-top:35px; padding-bottom:20px; border-top:0; border-bottom:0; background:#fff;">
            <div class="container">

                <!-- Start Clients Carousel -->
                <div class="our-clients">
                    <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5" data-navigation="false">

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
        <!-- End Full Width Section 5 -->

    </div>
    <!-- End Full Width Sections Content -->




    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="row footer-widgets">

                <!-- Start Contact Widget -->
                <div class="col-md-3">
                    <div class="footer-widget contact-widget">
                        <h4>Contact info<span class="head-line"></span></h4>
                        <ul>
                            <li><span>Address:</span> 272, Mpolo Street. Q/Kalubwe,</li>
                            <li><span>Phone Number:</span> +243 995 380 784/</li>
                            <li><span>Phone Number:</span> +243 995 380 784/</li>
                            <li><span>Fax Number:</span> +243 853 387 170</li>
                            <li><span>Email:</span> <a href="" class="__cf_email__" data-cfemail="">info@africtech-drc.com</a></li>
                            <li><span>Website:</span> www.africtech-drc.com</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact Widget -->

                <!-- Start Flickr Widget -->
                <div class="col-md-5">
                    <div class="footer-widget flickr-widget">
                        <h4>Our partners<span class="head-line"></span></h4>

                        <ul class="flickr-list">
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner1.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner2.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner3.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner4.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner5.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner6.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner7.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner8.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner9.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner10.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner11.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner12.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner13.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner14.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="" src="{{url('assets/images/partners/partner15.png')}}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Flickr Widget -->

                {{--<!-- Start Twitter Widget -->--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="footer-widget twitter-widget">--}}
                        {{--<h4>Twitter Feed<span class="head-line"></span></h4>--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--<p><a href="#">@RoberdKS </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>--}}
                                {{--<span>29 September 2013</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<p><a href="#">@RoberdKS </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>--}}
                                {{--<span>26 September 2013</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<p><a href="#">@RoberdKS </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>--}}
                                {{--<span>29 September 2013</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Twitter Widget -->--}}

                <!-- Start Subscribe & Social Links Widget -->
                <div class="col-md-4">
                    <div class="footer-widget mail-subscribe-widget">
                        <h4>Get in touch<span class="head-line"></span></h4>
                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                        <form class="subscribe">
                            <input type="text" placeholder="mail@example.com">
                            <input type="submit" class="main-button" value="Send">
                        </form>
                    </div>
                    <div class="footer-widget social-widget">
                        <h4>Follow Us<span class="head-line"></span></h4>
                        <ul class="social-icons">
                            <li>
                                <a class="facebook" href="#"><i class="icon-facebook-2"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="#"><i class="icon-twitter-2"></i></a>
                            </li>
                            <li>
                                <a class="google" href="#"><i class="icon-gplus-1"></i></a>
                            </li>
                            <li>
                                <a class="dribbble" href="#"><i class="icon-dribbble-2"></i></a>
                            </li>
                            <li>
                                <a class="linkdin" href="#"><i class="icon-linkedin-1"></i></a>
                            </li>
                            <li>
                                <a class="flickr" href="#"><i class="icon-flickr-1"></i></a>
                            </li>
                            <li>
                                <a class="tumblr" href="#"><i class="icon-tumblr-1"></i></a>
                            </li>
                            <li>
                                <a class="instgram" href="#"><i class="icon-instagramm"></i></a>
                            </li>
                            <li>
                                <a class="vimeo" href="#"><i class="icon-vimeo"></i></a>
                            </li>
                            <li>
                                <a class="skype" href="#"><i class="icon-skype-2"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Subscribe & Social Links Widget -->

            <!-- Start Copyright -->
            <div class="copyright-section">
                <div class="row">
                    <div class="col-md-6">
                        <p>© {{date('Y')}} Africtech -  All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-nav">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- End Footer -->
</div>
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="icon-up-open-1"></i></a>

<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
        <div class="dot3"></div>
        <div class="dot4"></div>
        <div class="dot5"></div>
    </div>
</div>

{{--<!-- Style Switcher -->--}}
{{--<div class="switcher-box">--}}
    {{--<a href="#" class="open-switcher show-switcher"><i class="icon-cog-1"></i></a>--}}
    {{--<h4>Style Switcher</h4>--}}
    {{--<span>12 Predefined Color Skins</span>--}}
    {{--<ul class="colors-list">--}}
        {{--<li><a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a></li>--}}
        {{--<li><a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a></li>--}}
    {{--</ul>--}}
    {{--<span>Top Bar Color</span>--}}
    {{--<select id="topbar-style" class="topbar-style">--}}
        {{--<option value="1">Light (Default)</option>--}}
        {{--<option value="2">Dark</option>--}}
        {{--<option value="3">Color</option>--}}
    {{--</select>--}}
    {{--<span>Layout Style</span>--}}
    {{--<select id="layout-style" class="layout-style">--}}
        {{--<option value="1">Wide</option>--}}
        {{--<option value="2">Boxed</option>--}}
    {{--</select>--}}
    {{--<span>Patterns for Boxed Version</span>--}}
    {{--<ul class="bg-list">--}}
        {{--<li><a href="#" class="bg1"></a></li>--}}
        {{--<li><a href="#" class="bg2"></a></li>--}}
        {{--<li><a href="#" class="bg3"></a></li>--}}
        {{--<li><a href="#" class="bg4"></a></li>--}}
        {{--<li><a href="#" class="bg5"></a></li>--}}
        {{--<li><a href="#" class="bg6"></a></li>--}}
        {{--<li><a href="#" class="bg7"></a></li>--}}
        {{--<li><a href="#" class="bg8"></a></li>--}}
        {{--<li><a href="#" class="bg9"></a></li>--}}
        {{--<li><a href="#" class="bg10"></a></li>--}}
        {{--<li><a href="#" class="bg11"></a></li>--}}
        {{--<li><a href="#" class="bg12"></a></li>--}}
        {{--<li><a href="#" class="bg13"></a></li>--}}
        {{--<li><a href="#" class="bg14"></a></li>--}}
    {{--</ul>--}}
{{--</div>--}}

<!-- Histats.com  START (hidden counter)-->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com/" target="_blank" title="" ><script  type="text/javascript" >

        try {Histats.start(1,2633271,4,0,0,0,"");
            Histats.track_hits();} catch(err){};

    </script></a>
<noscript><a href="http://www.histats.com/" target="_blank"><img  src="../../../sstatic1.histats.com/0266b.gif?2633271&amp;101" alt="" border="0"></a></noscript>

<!-- Histats.com  END  -->

</body>

<!-- Mirrored from zoomarts.works/html/vella/index-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 10:22:58 GMT -->
</html>
