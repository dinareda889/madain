 

$(function(){
    "use strict";
    
    /*=====================================================================
        03: Background image
    ======================================================================*/
   let imageTarget = $('[data-img]');
   imageTarget.css('background', function(){
       return 'url('+this.getAttribute('data-img')+') no-repeat center'
   });
   imageTarget.css('backgroundSize', 'cover');

   /*================================================================
      01. Preloader
    =================================================================*/
    $( document ).ready(function() {
        setTimeout(()=>{
            $('.preloader').fadeOut();
        }, 250)
    });

    /*=====================================================================
        05: Scroll to top button
    =======================================================================*/

    $('.top-btn').on('click',function(){
        $('html').animate({
            scrollTop: 0
        },100);
    });

    $(window).on('scroll',function(){
        var $scroll = $(this).scrollTop();

        if($scroll > 300){
            $('.top-btn').addClass('show');
        }else{
            $('.top-btn').removeClass('show');
        }
    });

    /*=====================================================================
        08: Menu
    ======================================================================*/
    $('.header-menu a[href="#"]').on("click", function (e) {
        e.preventDefault();
    });

    $(".header-menu").menumaker({ title: '<i class="fas fa-bars"></i>', format: "multitoggle" });

    /*=====================================================================
        03: Sticky menu
    ======================================================================*/
    function menuSticky (){
        var $scroll = $(window).scrollTop();
        if($scroll > 120){
            $('.menubar').addClass('sticky');
        }else{
            $('.menubar').removeClass('sticky');
        }
     }
     menuSticky ()
     $(window).on('scroll',function(){
        menuSticky ()

    });

    /*================================================
        26: parallax activation home 1
    ================================================*/
    var $parallaxLayers = $('[data-trigger="parallax_layers"]');

    if( $parallaxLayers.length ){
        $parallaxLayers.each(function () {
            new Parallax( $(this)[0], {
                selector: '[data-depth]'
            });
        });
    }

    /*=====================================================================
        16: Venobox video play
    ======================================================================*/
    $('.venobox').venobox();


    /*=====================================================================
        07: Project filtering
    ======================================================================*/
        let mixer =  document.querySelector('.filters');
        if(mixer){
            mixitup('.filters',{
                selectors: {
                    control: '[data-mixitup-control]'
                }
            })
        }


        $('.project-menu li').click(function(event){
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
        });

    /*=====================================================================
        06: client slider
    ======================================================================*/
        var swiper = new Swiper('.client-slider', {
            observer: true,
            observeParents: true,
            loop: false,
            centeredSlides: false,
            spaceBetween: 30,
            autoplay: {
    delay: 4000,
  },
            breakpoints: {
                
                792: {
                slidesPerView: 6,
                },
                620: {
                slidesPerView: 5,
                },
                592: {
                slidesPerView: 4,
                },
                468: {
                    slidesPerView: 3,
                },
                376: {
                    slidesPerView: 2,
                },
                220: {
                    slidesPerView: 1,
                }
            },
            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
              },
            
        });
    
    
 
        var swiper = new Swiper('.client-slider2', {
            observer: true,
            observeParents: true,
            loop: true,
            centeredSlides: false,
            spaceBetween: 30,
          autoplay: {
    delay: 4000,
  },
            breakpoints: {
                1920: {
                slidesPerView: 3,
                },
                992: {
                slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                576: {
                    slidesPerView: 1,
                },
                320: {
                    slidesPerView: 1,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            
        });
    
    
    
    var swiper = new Swiper('.client-slider3', {
            observer: true,
            observeParents: true,
            loop: false,
            centeredSlides: false,
            spaceBetween: 30,
                  autoplay: {
    delay: 4000,
  },
            breakpoints: {
                
                768: {
                    slidesPerView: 3,
                },
                576: {
                    slidesPerView: 2,
                },
                320: {
                    slidesPerView: 1,
                }
            },
            pagination: {
                el: '.swiper-pagination3',
                clickable: true,
            },
            
        });
    
    
    
    var swiper = new Swiper('.teamabout', {
            observer: true,
            observeParents: true,
            loop: false,
            centeredSlides: false,
            spaceBetween: 30,
                  autoplay: {
    delay: 4000,
  },
            breakpoints: {
                
                768: {
                    slidesPerView: 4,
                },
                568: {
                    slidesPerView: 3,
                },
                376: {
                    slidesPerView: 2,
                },
                220: {
                    slidesPerView: 1,
                }
            },
            pagination: {
                el: '.swiper-pagination4',
                clickable: true,
            },
            
        });
    
    
    
    var swiper = new Swiper('.features', {
            observer: true,
            observeParents: true,
            loop: false,
            centeredSlides: false,
            spaceBetween: 30,
                  autoplay: {
    delay: 4000,
  },
            breakpoints: {
               220: {
                    slidesPerView: 1,
                }
            },
            pagination: {
                el: '.swiper-pagination5',
                clickable: true,
            },
            
        });
    /*=====================================================================
        06: client slider
    ======================================================================*/
        $('.counter-up').counterUp({
            delay: 10,
            time: 2000
        });
    /*=====================================================================
        06: directional hover
    ======================================================================*/

        
	$('.home3 .single-item').directionalHover({
	  overlay: "project-detail",
	  easing: "swing",
	  speed: 400
	});

    /*=========================================================
        24. Google Map
    ==========================================================*/

    if($('#map').length !==0){
            
        var googleMapSelector = $('#map');
        var latitude = $('.google-map-wrapper').attr('data-latitude');
        var longitude = $('.google-map-wrapper').attr('data-longitude');
        var zoome = $('.google-map-wrapper').attr('data-zoom');
        var zoomtoNum = Number(zoome);
        var mapmarker = $('.google-map-wrapper').attr('data-marker');
        var myCenter = new google.maps.LatLng(latitude, longitude);
  
        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: zoomtoNum,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [
                        {
                            "featureType": "landscape.man_made",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f7f1e0"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#d0e3b4"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural.terrain",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.business",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.medical",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#fbd3da"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#bde6ab"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffe36f"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#efd151"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "black"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.airport",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#cfb2db"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#a2daf2"
                                }
                            ]
                        }
                    ]
            };
            var map = new google.maps.Map( document.getElementById('map'), mapProp );
            var marker = new google.maps.Marker({
                position: myCenter,
                icon: mapmarker,
            });
            marker.setMap(map);
  
           
        }
        if (googleMapSelector.length) {
            google.maps.event.addDomListener(window, 'load', initialize);
        }
    }
    

});