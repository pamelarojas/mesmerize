jQuery.noConflict()( function ( $ ) {
    "use strict";
    $( document ).ready( function () {

        // tooltip
        $( function () {
            $( '[data-toggle="tooltip"]' ).tooltip()
        } )

        // FlexSlider
        $( window ).load( function () {
            var animation = $( '.homepage-slider' ).data( 'animation' );
            var interval = $( '.homepage-slider' ).data( 'interval' );
            var autostart = $( '.homepage-slider' ).data( 'start' );
            $( '.homepage-slider' ).flexslider( {
                animation: animation,
                slideshow: autostart,
                slideshowSpeed: interval,
                touch: true,
                keyboard: true,
                pauseOnHover: true,
                prevText: '',
                nextText: '',
                before: function ( slider ) {
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-title' ).removeClass( "animated fadeInLeft" );
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-desc, .flexslider-heading' ).removeClass( "animated zoomIn" );
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-button' ).removeClass( "animated fadeInUp" );
                },
                after: function ( slider ) {
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-title' ).addClass( "animated fadeInLeft" );
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-desc, .flexslider-heading' ).addClass( "animated zoomIn" );
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-button' ).addClass( "animated fadeInUp" );
                },
                start: function ( slider ) {
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-title' ).addClass( "animated fadeInLeft" );
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-desc, .flexslider-heading' ).addClass( "animated zoomIn" );
                    $( slider ).find( ".flex-active-slide" ).find( '.flexslider-button' ).addClass( "animated fadeInUp" );
                },
            } );
        } );

        // FlexSlider Carousel
        $( '.home-carousel' ).each( function () {
            var id = $( this ).attr( 'data-id' ),
                columns = $( '#flex-carousel-' + id ).data( 'columns' ),
                $window = $( window ),
                flexslider = { vars: { } };
            // tiny helper function to add breakpoints
            function getGridSize() {
                return ( window.innerWidth < 520 ) ? 1 :
                    ( window.innerWidth < 768 ) ? 2 : columns;
            }
            $( window ).load( function () {
                $( '#flex-carousel-' + id ).flexslider( {
                    animation: "slide",
                    controlNav: false,
                    selector: ".products > li",
                    animationLoop: true,
                    slideshow: true,
                    itemWidth: 270,
                    itemMargin: 32,
                    pauseOnHover: true,
                    move: 1,
                    prevText: "",
                    nextText: "",
                    minItems: getGridSize(),
                    maxItems: getGridSize(),
                    start: function ( slider ) {
                        flexslider = slider;
                        slider.removeClass( 'loading-hide' );
                        slider.resize();
                    }
                } );
            } );
            $( window ).resize( function () {
                var gridSize = getGridSize();

                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;

            } );
            // set the timeout for the slider resize
            $( function () {
                var resizeEnd;
                $( window ).on( 'resize', function () {
                    clearTimeout( resizeEnd );
                    resizeEnd = setTimeout( function () {
                        flexsliderResize();
                    }, 100 );
                } );
            } );
            function flexsliderResize() {
                if ( $( '#flex-carousel-' + id ).length > 0 ) {
                    $( '#flex-carousel-' + id ).data( 'flexslider' ).resize();
                }
            }

        } );

        // Homepage bottom borders
        $( window ).on( 'resize', function (  ) {
            $( ".border-bottom-left, .border-bottom-right" ).css( { "border-right-width": window.innerWidth } );
        } ).trigger( 'resize' );

        // Isotope
        var $container = $( '#portfolio' );
        if ( $container.length ) {
            // init Isotope
            var $grid = $( '#portfolio' ).imagesLoaded( function () {
                $grid.isotope( );
            } );
            // filter items when filter link is clicked
            $( '#filter a' ).click( function () {

                var selector = $( this ).attr( 'data-filter' );
                $container.isotope( { filter: selector } );
                return false;

            } );
        }

        // Menu and sections higlight
        var sections = $( 'section' )
            , nav = $( '#fpb-main-navigation-inner .nav' )
            , nav_height = nav.outerHeight();
        if ( sections.length ) {
            $( window ).on( 'scroll', function () {
                var cur_pos = $( this ).scrollTop();

                sections.each( function () {
                    var top = $( this ).offset().top - nav_height - 60,
                        bottom = top + $( this ).outerHeight();

                    if ( cur_pos >= top && cur_pos <= bottom ) {
                        nav.find( 'a' ).removeClass( 'active' );
                        sections.removeClass( 'active' );

                        $( this ).addClass( 'active' );
                        nav.find( 'a[href="#' + $( this ).attr( 'id' ) + '"]' ).addClass( 'active' );
                    }
                } );
            } );
            nav.find( 'a[href*="#"]' ).on( 'click', function () {
                var $el = $( this )
                    , id = $el.attr( 'href' );

                $( 'html, body' ).animate( {
                    scrollTop: $( id ).offset().top - nav_height - 30
                }, 500 );

                return false;
            } );
        }
    } );
} );

// menu sticky
jQuery( document ).ready( function ( $ ) {
    var menu = $( '.fpb-main-menu' );
    if ( menu.length ) {
    $( '#fpb-main-navigation a' ).click( function () {
        $( '#fpb-main-navigation .collapse' ).removeClass( "in" );
        $( '#fpb-main-navigation .navbar-toggle' ).addClass( "collapsed" );
    } );
    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $( '.fpb-main-menu' ).offset().top;
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function () {
        var scroll_top = $( window ).scrollTop(); // our current vertical position from the top
        var $admin_bar = $( '#wpadminbar' ); // check the admin bar
        if ( $admin_bar.length ) {
            $top = 32;
        } else {
            $top = 0;
        }
        // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
        if ( scroll_top > sticky_navigation_offset_top ) {
            $( '.fpb-main-menu' ).css( { 'position': 'fixed', 'top': $top, 'z-index': '500', 'width': '100%', 'transition': 'all 0.5s linear' } );
        } else {
            $( '.fpb-main-menu' ).css( { 'position': 'absolute', 'top': 0, 'transition': 'inherit' } );
        }
    };
    // run our function on load
    sticky_navigation();
    // and run it again every time you scroll
    $( window ).scroll( function () {
        sticky_navigation();
    } );
    }
} );
