/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */

(function ($) {
    "use strict";
    
    
    
    var mainApp = {
    	menu : function() {
    		alert("test");
    	},	

        plusMain: function () {
        	//this.menu();
            //FUNCTION TO SCROLL BETWEEN LEFT MENU LINKS
            $(function () {
                $('nav a').bind('click', function (event) {
                    var $anchor = $(this);

                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 2500, 'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });


            // MAIN FUNTION FOR TRIGGER LEFT MENU
            var MENU_OFFSET = '-200px';
            $('.Icon-trigger span').click(function () {
                if (
            $('.left-panel').css('left') == MENU_OFFSET) {
                    $('.left-panel').animate({ left: '0px' }, 500, 'easeInOutExpo');
                }
                else
                    $('.left-panel').animate({ left: MENU_OFFSET }, 1500, 'easeOutBounce');
            });

            // MAIN FUNTION FOR COMM PANEL
            var COMM_OFFSET = '-400px';
            $('#comm').click(function () {
            	
                if (
            $('.comm-panel').css('top') == COMM_OFFSET) {
                    $('.comm-panel').animate({ top: '0px' });
                }
                else
                    $('.comm-panel').animate({ top: COMM_OFFSET });
            });
           
            
            
            
            /** VEGAS SLIDESHOW IMAGES  **/
            $(function () {
                $.vegas('slideshow', {
                    backgrounds: [
                      { src: 'assets/img/coc2.jpg', fade: 2000, delay: 15000 }, //CHANGE THESE IMAGES WITH YOUR ORIGINAL IMAGES
                      { src: 'assets/img/coc1.jpg', fade: 2000, delay: 15000 }, //THESE IMAGES ARE FOR DEMO PURPOSE ONLY YOU, CAN NOT USE THEM WITHOUT AUTHORS PERMISSION
                      { src: 'assets/img/coc3.jpg', fade: 2000, delay: 15000 }, //SEE DOCUMENTATION FOR ORIGINAL URLs/LINKs OF IMAGES
                      { src: 'assets/img/coc4.jpg', fade: 2000, delay: 15000 },
                      { src: 'assets/img/coc5.jpg', fade: 2000, delay: 15000 },
                      { src: 'assets/img/coc6.jpg', fade: 2000, delay: 15000 },
                      { src: 'assets/img/coc7.jpg', fade: 2000, delay: 15000 },
                      { src: 'assets/img/coc8.jpg', fade: 2000, delay: 15000 },
                      
                    ]
                })('overlay', {
                    /** SLIDESHOW OVERLAY IMAGE **/
                    src: 'assets/plugins/vegas/overlays/01.png' // THERE ARE TOTAL 01 TO 15 .png IMAGES AT THE PATH GIVEN, WHICH YOU CAN USE HERE
                });


            });

            



        },

        initialization: function () {
            mainApp.plusMain();

        }


    }
    // INITIALIZING ///

    $(document).ready(function () {
        mainApp.plusMain();
    
        $('.carousel').carousel({
          interval: 2500
        });
    
    });


}(jQuery));


