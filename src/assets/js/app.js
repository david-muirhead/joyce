import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';
import '../../../node_modules/waypoints/lib/jquery.waypoints.min.js';
import slick from 'slick-carousel';

import { isMobileView } from 'mdetect';

import fluidvids from 'fluidvids.js';


fluidvids.init({
  selector: ['.str8vimeo iframe'], // runs querySelectorAll()
  players: ['www.youtube.com', 'player.vimeo.com'] // players to support
});
// import barba from '@barba/core'; // Or nothing if loaded via the browser
//
//  // Basic default transition, with no rules and minimal hooks…
//  barba.init({
//    transitions: [
//      {
//        leave({ current }) {
//            $(".site-header div:nth-child(2) a, .featured-hero").addClass("load");
//            $(".site-header div:nth-child(2) a, .featured-hero").removeClass("loaded");
//        },
//        enter({current}) {
//          $(document).foundation();
//          $('html,body').scrollTop(0);
//          indexPage();
//          singlePage();
//          general();
//          videos();
//          $(".site-header div:nth-child(2) a, .featured-hero").removeClass("load");
//          $(".site-header div:nth-child(2) a, .featured-hero").addClass("loaded");
//        }
//      },
//    ],
//  });

$(document).foundation();

function general() {
  var lazyLoadInstance = new LazyLoad({
      elements_selector: ".noclick"
      // ... more custom settings?
  });
  if (lazyLoadInstance) {
      lazyLoadInstance.update();
  }
};

function videos() {
  if ($("video").not('.cta, #player').length > 0){
    var promise = $('video').get(0).play();
    if (promise !== undefined) {
      promise.then(_ => {
        $('.message').append('Autoplay was successfull.')
      }).catch(error => {
        console.log('   // Autoplay was prevented.');
        $('.nope').attr('src', '');
        $('video').attr('controls',true);
        $('.hide-on-low').remove();
        $('.message').append('Autoplay was prevented. LOW POWER MODE')
      });
    }
  }
};

function indexPage() {
  // hover function
  $('#list li a').hover(function (ev) {
    var attachmentA = $( this ).attr( 'hover-data' );
    $(".images .active").css("display", "none");
    $(".item p a.active").addClass('clear');
    $( '#' + attachmentA ).addClass('hover');
    $( '#' + attachmentA ).get(0).play();
  }, function (ev) {
    var attachmentA = $( this ).attr( 'hover-data' );
    $(".images .active").css("display", "block");
    $(".item p a.active").removeClass('clear');
    $( '#' + attachmentA ).removeClass('hover');
    $( '#' + attachmentA ).get(0).pause();
    $( '#' + attachmentA ).get(0).currentTime = 0;
  });
};

var $document = $(document),
    $element = $('#some-element'),
    className = 'hasScrolled';
var prevScrollpos = window.pageYOffset;
$document.scroll(function() {
  if(! isMobileView()){
    if ($document.scrollTop() >= 500) {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.opacity = "1";
      } else {
        document.getElementById("navbar").style.opacity = "0";
      }
      prevScrollpos = currentScrollPos;
    }
  } else {
    if ($document.scrollTop() >= 0) {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.opacity = "1";
      } else {
        document.getElementById("navbar").style.opacity = "0";
      }
      prevScrollpos = currentScrollPos;
    }
  }
});

function singlePage() {
  $('.anims, .left-gif, .left-post, .right-gif, .right-post').each(function() {
      var $this = $(this);
      $this.waypoint(function() {
          $this.addClass('view');
      }, { offset: '85%' });
  });
  if(! isMobileView()){
    $('.carousel').flickity({
      pageDots: false,
      imagesLoaded: true,
      adaptiveHeight: true
    });
    $('.lightbox-true').each(function(){
        $(this).slickLightbox({
          itemSelector: '> li > a',
          slick: {
            infinite: false,
            navigateByKeyboard: true,
            slidesToShow: 1
          }
        });
    });
  }
  $(function() {
     var timer;
     var fadeInBuffer = false;
     $(document).mousemove(function() {
         if (!fadeInBuffer) {
             if (timer) {
                 console.log("clearTimer");
                 clearTimeout(timer);
                 timer = 0;
             }

             console.log("fadeIn");
             $('html').css({
                 cursor: ''
             });
         } else {
             $('.plyr__video-embed, .plyr, .vp-target, .vp-nudge-shade, .player').css({
                 cursor: 'default'
             });
             fadeInBuffer = false;
         }


         timer = setTimeout(function() {
             console.log("fadeout");
             $('.plyr__video-embed, .plyr, .vp-target, .vp-nudge-shade, .player').css({
                 cursor: 'none'
             });
             fadeInBuffer = true;
         }, 2000)
     });
     $('.plyr__video-embed, .plyr, .vp-target, .vp-nudge-shade, .player').css({
         cursor: 'default'
     });
     $('.plyr__video-embed, .plyr').mouseenter(function() {
          $('.site-header').css({
              opacity: '0'
          });
    }).mouseleave(function() {
          $('.site-header').css({
              display: '1'
          });
    });
 });

 var stopVideo = function ( element ) {
 	var iframe = element.querySelector( 'iframe');
 	var video = element.querySelector( 'video' );
 	if ( iframe ) {
 		var iframeSrc = iframe.src;
 		iframe.src = iframeSrc;
 	}
 	if ( video ) {
 		video.pause();
 	}
};

 if (document.getElementById('extrl')){
   var iframe = document.getElementById('extrl');
   // $f == Froogaloop
   var player = $f(iframe);
   // bind events
   var playButton = document.getElementById("play-iframe");
      playButton.addEventListener("click", function() {
      player.api("play");
   });
 };

 $("#play-iframe").click(function(){
   $(this).fadeOut();
 });
  const players = Plyr.setup('#player', {
      controls: ['play-large', 'play', 'progress']
  });
};

if(! isMobileView()){
  document.write(
    '<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"><\/script>'+
    '<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">'
  )
};
$(document).ready(function(){
  indexPage();
  singlePage();
  general();
  videos();
  ShowPageContent();
});

function ShowPageContent() {
    $(".site-header div:nth-child(2) a, #barbadook .featured-hero").addClass("loaded");
   	$('#featured-hero div video,#target_video, #featured-hero video, #player-loop').each(function() {
      $(this).get(0).play();
  	});
};
