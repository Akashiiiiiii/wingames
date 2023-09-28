(function (jQuery){

  // remove box on click 
    jQuery("a").keypress(function() {
     this.blur();
     this.hideFocus = false;
     this.style.outline = null;
      });
      jQuery("a").mousedown(function() {
           this.blur();
           this.hideFocus = true;
           this.style.outline = 'none';
      });
      
	  jQuery.fn.counter = function() {
	    const jQuerythis = jQuery(this),
	    numberFrom = parseInt(jQuerythis.attr('data-from')),
	    numberTo = parseInt(jQuerythis.attr('data-to')),
	    delta = numberTo - numberFrom,
	    deltaPositive = delta > 0 ? 1 : 0,
	    time = parseInt(jQuerythis.attr('data-time')),
	    changeTime = 10;
	    
	    let currentNumber = numberFrom,
	    value = delta*changeTime/time;
	    var interval1;
	    const changeNumber = () => {
	      currentNumber += value;
	      //checks if currentNumber reached numberTo
	      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
	      this.text(parseInt(currentNumber));
	      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
	    }

	    interval1 = setInterval(changeNumber,changeTime);
	  }

    // remove # on URL
        jQuery(".search-icon").click(function(e){
            e.preventDefault();
            console.log();
         });
        
	  jQuery(document).ready(function(){

        jQuery(function(){
      jQuery(".video-player").mb_YTPlayer();
    });

    jQuery('#video-play').click(function(event) {
      event.preventDefault();
      if (jQuery(this).hasClass('fa-play')) {
      jQuery('.video-player').playYTP();
      } else {
      jQuery('.video-player').pauseYTP();
      }
      jQuery(this).toggleClass('fa-play fa-pause');
      return false;
    });

    jQuery('#video-volume').click(function(event) {
      event.preventDefault();
      if (jQuery(this).hasClass('fa-volume-off')) {
      jQuery('.video-player').YTPUnmute();
      } else {
      jQuery('.video-player').YTPMute();
      }
      jQuery(this).toggleClass('fa-volume-off fa-volume-up');
      return false;
    });

	  jQuery('.count-up').counter();
	  
	  /*new WOW().init();*/
	  
	  setTimeout(function () {
	    jQuery('.count5').counter();
	  }, 3000);
	});

  //Sticky Header
       jQuery(window).bind('scroll', function () {
          if (jQuery(window).scrollTop() > 100)
          {
                jQuery('.header-sticky').addClass('stickymenu');
                jQuery('.header-sidebar').css('display','none');
          } else {
                jQuery('.header-sticky').removeClass('stickymenu');
                jQuery('.header-sidebar').css('display','');
          }
       });

         // scroll
  jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scroll-up').fadeIn();
        } else {
            jQuery('.scroll-up').fadeOut();
        }
    }); 

  
    jQuery('a[href="#totop"]').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });

	}(jQuery));


  jQuery(document).ready(function(){

    if(jQuery('.brands_slider').length)
         {
             var brandsSlider = jQuery('.brands_slider');
 
             brandsSlider.owlCarousel(
             {
                 loop:true,
                 autoplay:true,
                 autoplayTimeout:3000,
                 nav:false,
                 dots:false,
                 autoWidth:true,
                 items:8,
                 margin:42
             });
 
             if(jQuery('.brands_prev').length)
             {
                 var prev = jQuery('.brands_prev');
                 prev.on('click', function()
                 {
                     brandsSlider.trigger('prev.owl.carousel');
                 });
             }
 
             if(jQuery('.brands_next').length)
             {
                 var next = jQuery('.brands_next');
                 next.on('click', function()
                 {
                     brandsSlider.trigger('next.owl.carousel');
                 });
             }
         }
 
 
     });