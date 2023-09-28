<?php
/**
 * Template Name: Responsible Gaming Page
 *
 * @package spiko
 */
get_header();?>
<section class="page-title-section-rg">		
                                <style type="text/css">
                    .page-title-section-rg .overlay
                    {

                        background-color: rgba(0,0,0,0.6);
                    }
                </style>
                                    <!--<div class="overlay"></div>  -->   
                	
                <div class="breadcrumb-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                                           
                            <div class="page-title text-center text-white">
                                                        </div>  
                                                </div>
                    </div>	
                </div>
            </div>
            </section>
 <div id="content">
<section class="section-space page">
	<div class="container<?php echo esc_html(spiko_container());?>">
	   	<div class="row">
	     	<div class="col-lg-12 col-md-12 col-sm-12">
            	<?php
             	while ( have_posts()):
            	the_post();
             		get_template_part('template-parts/content','page');
             		if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
             	endwhile;
             	?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>