<?php
/**
 * Slider section for the homepage.
 */
add_action('spiceb_spiko_slider_action','spiceb_spiko_slider_section');

function spiceb_spiko_slider_section()
{
	$theme=wp_get_theme();
	if('Spiko Dark'==$theme->name):
		$home_slider_image = get_theme_mod('home_slider_image',SPIKO_DARK_TEMPLATE_DIR_URI .'/assets/images/slider.jpg');
	else:
		$home_slider_image = get_theme_mod('home_slider_image',SPICEB_PLUGIN_URL .'inc/spiko/images/slider/slider.jpg');
	endif;
	
	$home_slider_title = get_theme_mod('home_slider_title',__('Nulla nec dolor sit amet lacus molestie','spicebox'));
	$home_slider_subtitle = get_theme_mod('home_slider_subtitle',__('Lorem Ipsum','spicebox'));		
	$home_slider_discription = get_theme_mod('home_slider_discription',__('Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim <br> mei ludus  efficiendi ei sea summo mazim ex.','spicebox'));
	$home_slider_btn_txt = get_theme_mod('home_slider_btn_txt',__('Nec Sem','spicebox'));
	$home_slider_btn_link = get_theme_mod('home_slider_btn_link',__(esc_url('#'),'spicebox'));
	$home_slider_btn_target = get_theme_mod('home_slider_btn_target',false);

	$home_slider_btn_txt2 = get_theme_mod('home_slider_btn_txt2',__('Cras Vitae','spicebox'));
	$home_slider_btn_link2 = get_theme_mod('home_slider_btn_link2',__(esc_url('#'),'spicebox'));
	$home_slider_btn_target2 = get_theme_mod('home_slider_btn_target2',false);
	$slider_align_split = get_theme_mod('slider_content_alignment','left');

	if(get_theme_mod('home_page_slider_enabled',true)==true) {
	$video_upload = get_theme_mod('slide_video_upload');
	$video_upload = wp_get_attachment_url( $video_upload);
	$video_youtub = get_theme_mod('slide_video_url');	
	// Below Script will run for only video slide		
	if((!empty($video_upload) || !empty($video_youtub) ) && (get_theme_mod('slide_variation','slide')=='video')){ ?>
		<section class="video-slider home-section home-full-height bcslider-section" id="totop" data-background="assets/images/section-5.jpg" >	
			<?php if(!empty($video_youtub)){?>
				<div class="video-player" data-property="{videoURL:'<?php echo esc_url($video_youtub);?>', containment:'.home-section', mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
			<?php } 
			else if(!empty($video_upload)){?>
			<video autoplay="" muted="" loop="" id="video_slider">
	            <source src="<?php echo esc_url($video_upload); ?>" type="video/mp4">
	         </video>
	     	<?php }?>
	     	<div class="container slider-caption">
				<div class="caption-content <?php echo 'text-'.esc_attr($slider_align_split);?>">
                    <?php
                    if($home_slider_subtitle!='')
                    {
                    ?>
                    <p class="heading"><span class="sub"><?php echo  esc_html($home_slider_subtitle); ?></span></p>
                    <?php
                    }
					if($home_slider_title!=''){ ?>
						<div class="inner-title">
						<h2 class="title"><?php echo  esc_html($home_slider_title); ?></h2>
						</div>
					<?php } 
					if($home_slider_discription!=''){ ?>
						<p class="description"><?php echo  wp_kses_post($home_slider_discription); ?></p>
					<?php } ?>
					<?php if(($home_slider_btn_txt !=null) || ($home_slider_btn_txt2 !=null)) { ?>
					<div class="btn-combo mt-5">
						<?php if($home_slider_btn_txt !=null): ?>
							<a href="<?php echo esc_url($home_slider_btn_link); ?>" <?php if($home_slider_btn_target) { ?> target="_blank" <?php } ?> class="btn-small btn-default"> <?php echo  esc_html($home_slider_btn_txt); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
						<?php endif; ?>											
						<?php if($home_slider_btn_txt2 !=null): ?>
								<a href="<?php echo esc_url($home_slider_btn_link2); ?>" <?php if($home_slider_btn_target2) { ?> target="_blank" <?php } ?> class="btn-small btn-light"><?php echo  esc_html($home_slider_btn_txt2); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						<?php endif;?>
					</div>
					<?php } ?>						
				</div>
			</div>
			<?php $slider_image_overlay = get_theme_mod('slider_image_overlay',true);
						$slider_overlay_section_color = get_theme_mod('slider_overlay_section_color','rgba(0,0,0,0.6)');
					if($slider_image_overlay != false) { ?>
						<div class="overlay" style="background-color:<?php echo esc_attr($slider_overlay_section_color);?>"></div>
					<?php } ?>    							
	</section>
	<?php }
	else{ ?>
	<!-- Slider Section -->	
	<!-- default
	<section class="bcslider-section">
		<div class="home-section back-img" <?php if($home_slider_image!='') { ?>style="background-image:url( <?php echo esc_url($home_slider_image); ?> );" <?php } ?>>
			<div class="container slider-caption">
				<div class="caption-content <?php echo 'text-'.esc_attr($slider_align_split);?>">
                    <?php
                    if($home_slider_subtitle!='')
                    {
                    ?>
                    <p class="heading"><span class="sub"><?php echo  esc_html($home_slider_subtitle); ?></span></p>
                    <?php
                    }
					if($home_slider_title!=''){ ?>
						<div class="inner-title">
						<h2 class="title"><?php echo  esc_html($home_slider_title); ?></h2>
					</div>
					<?php } 
					if($home_slider_discription!=''){ ?>
						<p class="description"><?php echo  wp_kses_post($home_slider_discription); ?></p>
					<?php } ?>
					<?php if(($home_slider_btn_txt !=null) || ($home_slider_btn_txt2 !=null)) { ?>
					<div class="btn-combo mt-5">
						<?php if($home_slider_btn_txt !=null): ?>
							<a href="<?php echo esc_url($home_slider_btn_link); ?>" <?php if($home_slider_btn_target) { ?> target="_blank" <?php } ?> class="btn-small btn-default"> <?php echo  esc_html($home_slider_btn_txt); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						<?php endif; ?>											
						<?php if($home_slider_btn_txt2 !=null): ?>
								<a href="<?php echo esc_url($home_slider_btn_link2); ?>" <?php if($home_slider_btn_target2) { ?> target="_blank" <?php } ?> class="btn-small btn-light"><?php echo  esc_html($home_slider_btn_txt2); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						<?php endif;?>
					</div>
					<?php } ?>						
				</div>
			</div>

			
			<?php $slider_image_overlay = get_theme_mod('slider_image_overlay',true);
				$slider_overlay_section_color = get_theme_mod('slider_overlay_section_color','rgba(0,0,0,0.6)');
			if($slider_image_overlay != false) { ?>
				<div class="overlay" style="background-color:<?php echo esc_attr($slider_overlay_section_color);?>"></div>
			<?php } ?>
    	</div>						
	</section>  --->
	<!------------------->
	<section class="bcslider-section " >
		<div class="home-section back-img" >
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="z-index:1">
		<ol class="carousel-indicators" style="margin-bottom:130px !important">
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
 		 </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active" data-interval="10000">
	<div class="home-section back-img" <?php if($home_slider_image!='') { ?> id="banner_inplay_web"  <?php } ?>></div>
	<div class="carousel-caption d-md-block text-center">
	<div class="caption-content text-center">
                    <?php
                    if($home_slider_subtitle!='')
                    {
                    ?>
                    <p class="heading"><span class="sub"><?php echo  esc_html($home_slider_subtitle); ?></span></p>
                    <?php
                    }
					if($home_slider_title!=''){ ?>
						<div class="inner-title">
						<h2 class="title"><?php echo  esc_html($home_slider_title); ?></h2>
					</div>
					<?php } 
					if($home_slider_discription!=''){ ?>
						<p class="description"><?php echo  wp_kses_post($home_slider_discription); ?></p>
					<?php } ?>
					<?php if(($home_slider_btn_txt !=null) || ($home_slider_btn_txt2 !=null)) { ?>
					<div class="btn-combo mt-4">
						<?php if($home_slider_btn_txt !=null): ?>
							<a href="<?php echo esc_url($home_slider_btn_link); ?>" <?php if($home_slider_btn_target) { ?> target="_blank" <?php } ?> class="btn-small btn-default mt-2"> <?php echo  esc_html($home_slider_btn_txt); ?></a>
						<?php endif; ?>											
						<?php if($home_slider_btn_txt2 !=null): ?>
								<a href="<?php echo esc_url($home_slider_btn_link2); ?>" <?php if($home_slider_btn_target2) { ?> target="_blank" <?php } ?> class="btn-small btn-light mt-2"><?php echo  esc_html($home_slider_btn_txt2); ?></a>
						<?php endif;?>
					</div>
					<?php } ?>						
				</div>	
											
				</div>

    </div>
    <div class="carousel-item" data-interval="2000">
	<div class="home-section back-img" id="banner_fastwin_web"></div>
    <div class="carousel-caption d-md-block">
	<div class="caption-content text-center">
        <div class="inner-title">
			
		</div>
		<div class="btn-combo mt-4">
			<a href="https://go.fastwin.com.ph/lobby/Login.aspx?isfp=0" target="_blank" class="btn-small btn-default mt-2">Fastwin Login </a>
			<a href="https://go.fastwin.com.ph/s/?o=rooseveltIIbravo" target="_blank" class="btn-small btn-light mt-2">Fastwin Register</a>
		</div>
	</div>	
  </div>

	</div>


    <!-- <div class="carousel-item">
	<div class="home-section back-img" style="background-image:url( http://210.14.26.241/wp-content/uploads/2022/08/lubataan5.png );"></div>
	<div class="carousel-caption d-md-block" style="text-align:center">
	<div class="caption-content" >
        <div class="inner-title">
			<h2 class="title">Outlet Name</h2>
		</div>
	</div>	
  </div>
	
    </div> -->
  </div>


  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			<!------>
					
			<!------>
			<?php $slider_image_overlay = get_theme_mod('slider_image_overlay',true);
				$slider_overlay_section_color = get_theme_mod('slider_overlay_section_color','rgba(0,0,0,0.6)');
			if($slider_image_overlay != false) { ?>
				<div class="overlay" style="background-color:<?php echo esc_attr($slider_overlay_section_color);?>"></div>
			<?php } ?>
			
    	</div>						
	</section>


	<?php } ?>
	<div class="clearfix"></div>
<?php 
}
} ?>