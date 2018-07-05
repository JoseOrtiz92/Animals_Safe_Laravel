$(document).ready(function() {
"use strict";

  // FlexSlider
  $('.slider .container').flexslider({
    animation: 'slide',
    selector: '.slides > li',
    controlNav: true,
    directionNav: false,
    slideshowSpeed: 3600,
    animationSpeed: 1200,
    prevText: '',
    nextText: ''
  });

  // FlexSlider
  $('.success-story .container').flexslider({
    animation: 'slide',
    selector: 'ul > li',
    controlNav: true,
    directionNav: false,
    slideshowSpeed: 3600,
    animationSpeed: 1200,
    prevText: '',
    nextText: ''
  });

  // FlexSlider
  $('.volunteers').flexslider({
    slideshow: false,
    animation: 'slide',
    selector: 'ul > li',
    controlNav: false,
    directionNav: true,
    slideshowSpeed: 3600,
    animationSpeed: 1200,
    itemWidth: 250,
    itemMargin: 50,
    minItems: 1,
    maxItems: 3,
    prevText: '',
    nextText: '',
    move: 1
  });

  // FlexSlider
  $('.help.flexslider').flexslider({
    animation: 'slide',
    selector: 'ul > li',
    controlNav: false,
    directionNav: true,
    itemWidth: 220,
    itemMargin: 50,
    minItems: 1,
    maxItems: 3,
    prevText: '',
    nextText: '',
    move: 1
  });

  // Back to Top
  $('a[href=#top]').click(function(event) {
    $("html,body").animate({ scrollTop: 0 }, 2000);
    event.preventDefault();
  });

  // Menu Scroll
  $('.menu a').click(function(event) {
    $('.menu a').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 2000);
    event.preventDefault();
  });

  // Accordion
  $('.accordion dt').click(function(event) {
    $(this).toggleClass('active');
    $(this).next('dd').toggle(600);
    event.preventDefault();
  });
  
  // Portfolio
  $('.group a').click( function(event) {

    if ($(this).hasClass('open')) {

      $('.single').slideUp('slow');
      $('.group a').removeClass('open');

    } else {

      $('.group a').removeClass('open');
      $('.single').slideUp('slow');
      $('.single[data-group=' + $(this).data('group') + ']').slideDown('slow');
      $(this).addClass('open');

      $(window).scrollTop($('.pets').offset().top);
    }

    event.preventDefault();
  });

  $('.single .close').click( function(event) {

    $(this).parent().slideUp();
    $('.group a').removeClass('open');

    event.preventDefault();
  });

  // Imagelightbox
  var overlayOn = function() {
        $('<div id="imagelightbox-overlay"></div>').appendTo('body');
      },
      overlayOff = function() {
        $('#imagelightbox-overlay').remove();
      },
      closeButtonOn = function( instance ) {
        $('<a href="#" id="imagelightbox-close">Close</a>').appendTo('body').on('click', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
      },
      closeButtonOff = function() {
        $('#imagelightbox-close').remove();
      },
      activityIndicatorOn = function() {
        $( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
      },
      activityIndicatorOff = function() {
        $( '#imagelightbox-loading' ).remove();
      };

  var instance = $( '.single .image div a' ).imageLightbox({
    onStart: function() { overlayOn(); closeButtonOn( instance ) },
    onEnd: function() { overlayOff(); closeButtonOff(); },
    onLoadStart: function() { activityIndicatorOn(); },
    onLoadEnd: function() { activityIndicatorOff(); }
  });

});

$(window).load(function() {
"use strict";

  // Projects Isotope Setup

  // Init
  var $container = $('.group').isotope({
    itemSelector: '.group div',
    layoutMode: 'fitRows'
  });

  // Bind filter button click
  $('.button-group a').on( 'click', function(event) {
    var filterValue = $( this ).attr('data-filter');
    $container.isotope({ filter: filterValue });
    event.preventDefault();
  });

  // Change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'a', function() {
      $buttonGroup.find('.active').removeClass('active');
      $( this ).addClass('active');
    });
  });

});


// When the window has finished loading create our google map below

function initialize() {
  var myLatlng = new google.maps.LatLng(-37.817314, 144.955431);
  var map_options = {
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: myLatlng,
    scrollwheel: false,
    disableDefaultUI: true
  };

  var map = new google.maps.Map(document.getElementById('map'), map_options);
  var myIcon = new google.maps.MarkerImage('images/icon-marker-2x.png', null, null, null, new google.maps.Size(34,45));

  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    icon: myIcon
  });

  /* Remove if you dont want B/W Google Map */
  var styles = [
    {
      featureType: "all",
      stylers: [
        { saturation: -100 }
      ]
    },
    {
      featureType:"road.local",
      stylers:[
        {color: "#e16951"}, {lightness:70}, {visibility:"on"}
      ]
    },
    {
      featureType:"road.highway",
      stylers:[
        {color: "#e16951"}, {lightness:50}
      ]
    }

  ];

  map.setOptions({styles: styles});
  /* Ends here! */
}

google.maps.event.addDomListener(window, 'load', initialize);
