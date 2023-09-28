<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spiko-dark
 */
?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<?php
                    if ( ! function_exists( 'spiko_plus_activate' ) ):
                    	do_action('spiko_dark_footer_section_hook');
                    else:
                    	do_action('spiko_plus_footer_section_hook');
                    endif;?>
                </div>
            </div>
        </div>
      
        
	<!-- <div class="icon-bar badge badge-pill" style="background-color:#df0a0a">
   <a href="#"><i class="fa fa-volume-control-phone fa-spin"></i></a>
	</div>
	
	<div class="icon-bartelegram badge badge-pill" style="background-color:#df0a0a">
   <a href="#"><i class="fa fa-telegram fa-spin"></i></a>
  
	</div>

  <div class="icon-messenger badge badge-pill" style="background-color:#df0a0a">
   <a href="#"><i class="fa fa-facebook fa-spin"></i></a>
	</div> -->
        <?php wp_footer(); ?>	
    </body>

<style>

.icon-bar {
  z-index: 1 !important;
}
.icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.icon-bartelegram {
  z-index: 1;
}
.icon-bartelegram {
  position: fixed;
  bottom: 148px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bartelegram a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.viber {
  color: white;
  border-radius:30px;
}



.icon-messenger {
  z-index: 1;
}
.icon-messenger {
  position: fixed;
  bottom: 0;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-messenger a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

@media (max-width: 786px) {
  .icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}



.viber {
  color: white;
  border-radius:30px;
}
}

@media (max-height: 500px) {
  .icon-bar {
  position: fixed;
  bottom: 60px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}



.viber {
  color: white;
  border-radius:30px;
}

}

</style>
</html>