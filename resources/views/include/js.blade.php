	<!-- Template core JavaScript's
    ================================================== -->
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/retina.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script> --}}

	{{-- Single.html --}}
    <script src="{{ asset('js/jquery.fitvids.js') }}"></script>
    <script>
    (function($) {
    "use strict";
    /* ==============================================
    VIDEO FIX -->
    =============================================== */
        // Target your .container, .wrapper, .post, etc.
        $("body").fitVids();
    })(jQuery);
    </script>

    {{-- index.html --}}
    <script src="{{ asset('js/parallax.js') }}"></script>
    <!-- SLIDER REV -->
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:620,
            hideThumbs:200,
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",
            keyboardNavigation:"off",
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
            spinner:"spinner4",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            forceFullWidth:"off",
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""
            });
        });
    </script>

    {{-- Contact --}}
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script type="text/javascript">
    (function($) {
    "use strict";
    /* ==============================================
    MAP -->
    =============================================== */
        var locations = [
            ['<div class="infobox"><h3 class="title"><a href="about1.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -37.801578, 145.060508, 2]
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 13,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: true,
                center: new google.maps.LatLng(-37.801578, 145.060508),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {

                marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map ,
                icon: 'images/marker.png'
                });


              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
            })(marker, i));
        }
    })(jQuery);
    </script>

    {{-- Blog.html --}}
    <script src="{{ asset('js/jquery.fitvids.js') }}"></script>
    <script>
    (function($) {
    "use strict";
    /* ==============================================
    VIDEO FIX -->
    =============================================== */
        // Target your .container, .wrapper, .post, etc.
        $("body").fitVids();
    })(jQuery);
    </script>