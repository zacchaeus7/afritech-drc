@extends('layouts.app-default')

@section('content-body')
    <!-- Start Map -->
    <div id="map" data-position-latitude="-11.647216" data-position-longitude="27.471773" data-marker-img="{{url('assets/images/marker.png')}}"></div>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
        (function ( $ ) {
            $.fn.CustomMap = function( options ) {

                var posLatitude = $('#map').data('position-latitude'),
                    posLongitude = $('#map').data('position-longitude');

                var settings = $.extend({
                    home: { latitude: posLatitude, longitude: posLongitude },
                    text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
                    icon_url: $('#map').data('marker-img'),
                    zoom: 15
                }, options );

                var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

                return this.each(function() {
                    var element = $(this);

                    var options = {
                        zoom: settings.zoom,
                        center: coords,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,
                        scaleControl: false,
                        streetViewControl: false,
                        panControl: true,
                        disableDefaultUI: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.DEFAULT
                        },
                        overviewMapControl: true,
                    };

                    var map = new google.maps.Map(element[0], options);

                    var icon = {
                        url: settings.icon_url,
                        origin: new google.maps.Point(0, 0)
                    };

                    var marker = new google.maps.Marker({
                        position: coords,
                        map: map,
                        icon: icon,
                        draggable: false
                    });

                    var info = new google.maps.InfoWindow({
                        content: settings.text
                    });

                    google.maps.event.addListener(marker, 'click', function() {
                        info.open(map, marker);
                    });

                    var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];

                    map.setOptions({styles: styles});
                });

            };
        }( jQuery ));

        jQuery(document).ready(function() {
            jQuery('#map').CustomMap();
        });
    </script>
    <!-- End Map -->




    <!-- Start Content -->
    <div id="content">
        <div class="container">

            <div class="row">

                <div class="col-md-8">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Contact Us</span></h4>

                    <!-- Start Contact Form -->
                    <div id="contact-form" class="contatct-form">
                        <div class="loader"></div>
                        <form action="" class="contactForm" name="cform" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <span class="name-missing">Please enter your name</span>
                                    <input id="name" name="name" type="text" value="" size="30">
                                </div>
                                <div class="col-md-4">
                                    <label for="e-mail">Email<span class="required">*</span></label>
                                    <span class="email-missing">Please enter a valid e-mail</span>
                                    <input id="e-mail" name="email" type="text" value="" size="30">
                                </div>
                                <div class="col-md-4">
                                    <label for="url">Website</label>
                                    <input id="url" name="url" type="text" value="" size="30">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="message">Add Your Comment</label>
                                    <span class="message-missing">Say something!</span>
                                    <textarea id="message" name="message" cols="45" rows="10"></textarea>
                                    <input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>DRC OFFICE:</span></h4>

                    <!-- Some Info -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:10px;"></div>

                    <!-- Info - Icons List -->
                    <ul class="icons-list">
                        <li><i class="icon-location-1"></i> <strong>Address:</strong> 272, avenue Mpolo. Q/Kalubwe, C/Lubumbashi.</li>
                        <li><i class="icon-mail-1"></i> <strong>Email:</strong> <a href="" data-cfemail="f59c9b939ab58c9a8087969a9885949b8cdb969a98">info@africtech-drc.com</a></li>
                        <li><i class="icon-mobile-1"></i> <strong>Phone:</strong> +243 995 380 784/</li>
                        <li><i class="icon-mobile-1"></i> <strong>Phone:</strong> +243 853 387 170</li>
                    </ul>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:15px;"></div>

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>Working Hours</span></h4>

                    <!-- Info - List -->
                    <ul class="list-unstyled">
                        <li><i class="icon icon-time"></i> <strong>Monday - Friday</strong> - 9am to 5pm</li>
                        <li><i class="icon icon-time"></i> <strong>Saturday</strong> - 9am to 2pm</li>
                        <li><i class="icon icon-time"></i> <strong>Sunday</strong> - Closed</li>
                    </ul>

                </div>
                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span>SOUTH AFRICA OFFICE:</span></h4>

                    <!-- Some Info -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:10px;"></div>

                    <!-- Info - Icons List -->
                    <ul class="icons-list">
                        <li><i class="icon-location-1"></i> <strong>Address:</strong> 10 Lusitania Lane, Cap town.</li>
                        <li><i class="icon-mail-1"></i> <strong>Email:</strong> <a href="" >info@africtech-drc.com</a></li>
                        <li><i class="icon-mobile-1"></i> <strong>Phone:</strong> +277 697 850 79</li>
                    </ul>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:15px;"></div>

                </div>

            </div>

        </div>
    </div>
    <!-- End content -->

@endsection