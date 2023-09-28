<?php 

add_action('spiceb_spiko_services_action','spiceb_spiko_services_section');

function spiceb_spiko_services_section()
{   
$service_data = get_theme_mod('spiko_service_content');
if (empty($service_data)) {
    $service_data = json_encode(array(
        array(
            'icon_value' => 'fa-headphones',
            'title' => esc_html__('Suspendisse Tristique', 'spicebox'),
            'text' => esc_html__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'spicebox'),
            'choice' => 'customizer_repeater_icon',
            'link' => '#',
            'open_new_tab' => 'no',
            'id' => 'customizer_repeater_56d7ea7f40b56',
        ),
        array(
            'icon_value' => 'fa-mobile',
            'title' => esc_html__('Blandit-Gravida', 'spicebox'),
            'text' => esc_html__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'spicebox'),
            'choice' => 'customizer_repeater_icon',
            'link' => '#',
            'open_new_tab' => 'no',
            'id' => 'customizer_repeater_56d7ea7f40b66',
        ),
        array(
            'icon_value' => 'fa fa-cogs',
            'title' => esc_html__('Justo Bibendum', 'spicebox'),
            'text' => esc_html__('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'spicebox'),
            'choice' => 'customizer_repeater_icon',
            'link' => '#',
            'open_new_tab' => 'no',
            'id' => 'customizer_repeater_56d7ea7f40b86',
        ),
    ));
}
$spiko_service_section_title = get_theme_mod('home_service_section_title', __('Quisque Blandit', 'spicebox'));
$spiko_service_section_discription = get_theme_mod('home_service_section_discription', __('Fusce Sed Massa', 'spicebox'));
$spiko_service_section_enabled = get_theme_mod('home_service_section_enabled',true);

$theme=wp_get_theme();
if ('Spiko Dark' == $theme->name):
    $service_section_class = 'services2';
else:
    $service_section_class = 'services';
endif;

if($spiko_service_section_enabled ==true)
{       
?>
<section class="section-space bg-default-color <?php echo esc_attr($service_section_class); ?>" style="background-color:#1b1b1b">
    <div class="container" style="padding-bottom:0 !important">
        <?php if ($spiko_service_section_discription != '' || $spiko_service_section_title != '') {
            ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-header">
                    <?php if($spiko_service_section_discription != ''){ ?>
                    <p class="section-subtitle"><?php echo wp_kses_post($spiko_service_section_discription); ?></p>
                    <?php }?>
                    <?php if($spiko_service_section_title != ''){ ?>
                    <h2 class="section-title"><?php echo esc_html($spiko_service_section_title); ?></h2><div class="section-separator border-center"></div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row" style="margin-bottom: 9rem">
            <?php
            $service_data = json_decode($service_data);
            if (!empty($service_data)) {
                foreach ($service_data as $service_team) {
                    $service_icon = !empty($service_team->icon_value) ? apply_filters('spiko_translate_single_string', $service_team->icon_value, 'Service section') : '';
                    $service_image = !empty($service_team->image_url) ? apply_filters('spiko_translate_single_string', $service_team->image_url, 'Service section') : '';
                    $service_title = !empty($service_team->title) ? apply_filters('spiko_translate_single_string', $service_team->title, 'Service section') : '';
                    $service_desc = !empty($service_team->text) ? apply_filters('spiko_translate_single_string', $service_team->text, 'Service section') : '';
                    $service_link = !empty($service_team->link) ? apply_filters('spiko_translate_single_string', $service_team->link, 'Service section') : '';
            ?>
            <div class="col-md-4 col-sm-6 col-xs-12" style="text-align:center">  
             <?php if ('Spiko Dark' == $theme->name){ ?> 
                <article class="post" style="border-radius:10px !important;border:1px #ddc600 solid;background-color:#f5f5f5 !important">
                        <?php if ($service_team->choice == 'customizer_repeater_icon') {
                                    if ($service_icon != '') { ?>
                                        <figure class="post-thumbnail">  
                                        <?php if ($service_link != '') { ?>
                                                <a <?php if ($service_team->open_new_tab == 'yes') {
                                                        echo "target='_blank'";
                                                    } ?> href="<?php echo esc_url($service_link); ?>">
                                                        <i class="fa <?php echo esc_attr($service_icon); ?>"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <a><i class="fa <?php echo esc_attr($service_icon); ?>"></i></a>
                                            <?php } ?>
                                        </figure>  
                                        <?php
                                    }
                                } else if ($service_team->choice == 'customizer_repeater_image') {
                                        if ($service_image != '') { ?> 
                                             <figure class="post-thumbnail"  style="text-align:center !important">
                                        <?php
                                            if ($service_link != '') { ?>
                                                <a <?php if ($service_team->open_new_tab == 'yes') {
                                                            echo "target='_blank'";
                                                        } ?> href="<?php echo esc_url($service_link); ?>">
                                                <?php }
                                            ?>
                                            <img class='img-fluid' src="<?php echo esc_url($service_image); ?>" style="width:100px;height:100px">
                                            <?php if ($service_link != '') { ?>
                                                </a>
                                            <?php } 
                                        } ?>
                                    </figure>
                                 <?php  
                                 } 
                                ?>
                                <?php if ($service_title != "") { ?>
                                <div class="entry-header">
                                    <h4 class="entry-title">
                                        <?php if ($service_link != '') { ?>
                                            <a href="<?php echo esc_url($service_link); ?>" <?php if ($service_team->open_new_tab == 'yes') {
                                                    echo "target='_blank'";
                                                } ?>><?php } echo esc_html($service_title);
                                            if ($service_link != '') { ?></a>
                                        <?php } ?>
                                    </h4>
                                </div>
                                <?php
                                }
                                if ($service_desc != ""): ?>
                                <div class="entry-content">
                                    <p><?php echo wp_kses_post($service_desc); ?></p>    
                                </div>                  
                                <?php endif; ?>
                </article>
                <?php } 
                else { ?>
                <div class="card">
                    <div class="card-body">
                        <?php if ($service_team->choice == 'customizer_repeater_icon') {
                                    if ($service_icon != '') {
                                        ?>
                                        <p class="service-icon">
                                            <?php if ($service_link != '') { ?>
                                                <a <?php if ($service_team->open_new_tab == 'yes') {
                                                    echo "target='_blank'";
                                                } ?> href="<?php echo esc_url($service_link); ?>">
                                                    <i class="fa <?php echo esc_attr($service_icon); ?>"></i>
                                                </a>
                                            <?php } else { ?>
                                                <a><i class="fa <?php echo esc_attr($service_icon); ?>"></i></a>
                                        <?php } ?>
                                        </p>
                                    <?php
                                    }
                            } else if ($service_team->choice == 'customizer_repeater_image') {
                                    if ($service_image != '') {
                                        ?>
                                        <p class="service-icon"> 
                                                <?php if ($service_link != '') { ?>
                                                <a <?php if ($service_team->open_new_tab == 'yes') {
                                                        echo "target='_blank'";
                                                    } ?> href="<?php echo esc_url($service_link); ?>">
                                            <?php } ?>
                                                <img class='img-fluid' src="<?php echo esc_url($service_image); ?>">
                                        <?php if ($service_link != '') { ?>
                                                </a>
                                        <?php } ?>
                                        </p>
                                    <?php
                                    }
                                }
                            if ($service_title != "") { ?>
                                <h4 class="entry-title">
                                    <?php if ($service_link != '') { ?>
                                        <a href="<?php echo esc_url($service_link); ?>" <?php if ($service_team->open_new_tab == 'yes') {
                                                echo "target='_blank'";
                                            } ?>><?php } echo esc_html($service_title);
                                        if ($service_link != '') { ?></a>
                                    <?php } ?>
                                </h4>
                            <?php
                            }
                            if ($service_desc != ""): ?>
                               <p class="description"><?php echo wp_kses_post($service_desc); ?></p>                      
                            <?php endif; ?>
                    </div>
                </div>
                <?php
                } ?>
            </div>
        <?php
            }
        }
        ?>
        </div>
    </div>
</section>
<?php } ?>


<section class="section-space page section-bg" style="margin-top:-100px !important;padding-top:0 !important">
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


<!-- <section class="section-space page" style="background-color:#1b1b1b">
	<div class="container">
	   	<div class="row">
	     	<div class="col-lg-12 col-md-12 col-sm-12">
            	<article class="post post-22 page type-page status-publish hentry">
	<div class="post-content">
						
	<div class="entry-content">

<div class="wp-container-3 wp-block-columns"> -->



<!------------NEW IMAGE------------->



<!-- <div class="wp-container-2 wp-block-column">
<h2 style="color:black">Welcome to Big A Gaming</h2>
<p class="justify" style="font-size:15px">You have come to the right place if you want to know about the first legal and trusted online casino in the Philippines which is InPlay. 
Outlet offers various kinds of online casino games in the Philippines from InPlay. Choose from Roulette, Blackjack, Baccarat, Sic Bo, Caribbean Stud, Video Poker, Slots, 
Progressives and others plus get your chance to win more Casino Jackpots on Outlet. At Outlet you will experience our excellent customer service with fast deposit and withdrawal. 
Our dedicated customer service team at Outlet is ready to serve you 24/7 and 365 days in a year. Come join us now to experience the ultimate online gaming experience what Outlet will be able to provide to you. 
Contact us for more details. Thank you!</p>
<h2 style="color:black">PLAY RESPONSIBLY</h2>
<p class="justify" style="font-size:15px">Our Commitment to Responsible Gaming Outlet is committed to fostering the practice of Responsible Gaming among its patrons. We have created a Responsible Gaming program that goes beyond the minimum and delivers above what is expected. We have endeavored to create an environment where Responsible Gaming awareness is prevalent and where getting help is easy and private. Please enjoy gaming responsibly. Responsible Gaming, Stay in control.</p>
<h2 style="color:black">WHY US?</h2>
<p class="justify" style="font-size:15px">Outlet is the registration brand powered by InPlay, PAGCOR’s first legal online casino in the Philippines. We are also licensed land-based electronic gaming casino Operator in the Philippines for the same games regulated and audited by PAGCOR. Join us, deposit and play with the exciting games and win at the Top and Legal Online Casino in the Philippines.</p>
</div>
<div class="wp-container-1 wp-block-column"></div> -->

</div>
</div>
</div>
</article>			</div>
		</div>
	</div>
</section>




<div class="clearfix"></div>
<?php //End of service section enable condition
} 
?>