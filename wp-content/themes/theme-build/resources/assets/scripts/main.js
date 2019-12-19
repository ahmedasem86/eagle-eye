// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import 'lightgallery/dist/js/lightgallery-all.min';
import 'lightslider/dist/js/lightslider.min';
import 'magnific-popup/dist/jquery.magnific-popup';
import 'devbridge-autocomplete/dist/jquery.autocomplete.min';
import 'slick-carousel/slick/slick';
import 'aos/dist/aos';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());


    $('#AdvanceSearch').click(function(){
    if ($('.advanced-Search').css('visibility') =='hidden')
    {
        $('.advanced-Search').css('visibility', 'visible');
        $('#asmaa').css('color' ,'#fff')
        // $('#asmaa').css('transform' ,'rotateY(180deg)')
    }
    else{
        $('.advanced-Search').css('visibility', 'hidden');
        $('#asmaa').css('color' ,'#FFCC00')
        // $('#asmaa').css('transform' ,'rotateY(360deg)')
    }
    });
    $('.SearchTitles a:first-child').click(function(){

        $('.SearchTitles a:first-child').addClass('active');
        $('.SearchTitles a:nth-child(2)').removeClass('active');
    })
    $('.SearchTitles a:nth-child(2)').click(function(){

        $('.SearchTitles a:first-child').removeClass('active');
        $('.SearchTitles a:nth-child(2)').addClass('active');
    })

// **********************************************
    $(window).scroll(function(){
      var sticky = $('#hdr'),
      sticky2=$('.SimpleHeader-Container'),
      scroll = $(window).scrollTop(),
      logo1 = $('#Logo_1'),
      logo2 = $('#Logo_2'),
      NotActive =$('nav a:not(.active)')

      ;

  if (scroll >= 600){
        sticky.addClass('fixed');
        sticky.css('border-bottom' , '1px solid black');
        sticky.css('margin-top' , '37px');

        sticky2.css('display','block');
        sticky2.addClass('fixed-SimpleHeader');

        logo1.css('display' , 'none') ;
        logo2.css('display' , 'block') ;
        NotActive.css('color' , '#000000');
        logo2.css('width' , '30%') ;

  }
  else
  {
    sticky.removeClass('fixed');
    sticky.css('border-bottom' , 'none');
    sticky.css('margin-top' , '0');

    sticky2.css('display','none');
    sticky2.removeClass('fixed-SimpleHeader');

    logo1.css('display' , 'block') ;
    logo2.css('display' , 'none') ;
    NotActive.css('color' , '#ffffff');

  }
});
