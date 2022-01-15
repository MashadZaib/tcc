<?php
/**
 * Template Name: Home Template
 */

get_header();
$home_page = get_page_by_path('home');
$home_image = wp_get_attachment_url( get_post_thumbnail_id($home_page->ID) ); 

?>

<div class="main">

        <!--hero section start-->
        <section class="hero-equal-height pt-165 pb-100" style="background: url(<?php echo $home_image; ?>)no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-12">
                        <div class="hero-content-wrap text-white">
                            <h1 class="text-white"><?php echo get_field('hero_area_title',$home_page->ID);?></h1>
                            <p class="lead"><?php echo get_field('hero_area_description',$home_page->ID);?></p>
                          
                            <div class="action-btns mt-4">
                                <a href="<?php echo get_home_url(); ?>/pricing/" class="btn solid-white-btn animated-btn mr-3">Get
                                    Started Now</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="animation-image-wrap">
                            <img src="<?php echo get_field('hero_area_image',$home_page->ID);?>" alt="wp hosting" class="img-fluid" />
                            <img src="<?php echo get_field('hero_area_image',$home_page->ID);?>" alt="wp hosting" width="100" class="animation-icon-img animation-icon-5" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->
   		<!--services section start-->
        <section class="our-services ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                            <h2><?php echo get_field('service_title',$home_page->ID);?></h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
					<?php
					$services_sections = get_field('services',$home_page->ID); 
					?>
					<?php foreach($services_sections as $service_data) { ?>	
	                    <div class="col-md-6 col-lg-4">
	                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
	                            <img src="<?php echo $service_data['service_icon']; ?>" alt="shared hosting" class="img-fluid mb-4" width="45" />
	                            <div class="service-plane-content">
	                                <h3 class="h5"><?php echo $service_data['service_heading']; ?></h3>
	                                <p><?php echo $service_data['service_description']; ?></p>
	                            </div>
	                            
	                        </div>
	                    </div>
                    
                    
                    <?php } ?>
                  
                   
                </div>
            </div>
        </section>

       <section class="pricing-section ptb-100 " id="features">
        	<div class="container">
        		<?php
					$feature_sections = get_field('features',$home_page->ID); 
					?>
					<?php foreach($feature_sections as $key => $feature_data) { ?>
						<?php if($key % 2 == 0) {?>
						<div class="row mb-5 align-items-center">
							<div class="col-lg-6 col-md-6 ">
								<h2><?php echo $feature_data['feature_title']; ?></h2>
								<div class="lead lead-custom"><?php echo $feature_data['feature_desc']; ?></div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="image-box fadein text-xl-right text-center">
									<img src="<?php echo $feature_data['feature_image']; ?>" alt="wp-hosting" class="img-fluid">
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="row mb-5 align-items-center">
							
							<div class="col-lg-6 col-md-6">
								<div class="image-box fadein text-xl-right text-center">
									<img src="<?php echo $feature_data['feature_image']; ?>" alt="wp-hosting" class="img-fluid">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<h2><?php echo $feature_data['feature_title']; ?></h2>
								<div class="lead lead-custom"><?php echo $feature_data['feature_desc']; ?></div>
							</div>
						</div>
					<?php } } ?>
        	</div>
        </section>
 

       <section class="call-to-action ptb-100 " style="background: url(<?php echo get_field('talk_background_image',$home_page->ID);?>)no-repeat bottom center / cover">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="call-to-action-content text-white text-center">
                                            <h2 class="text-black"><?php echo get_field('talk_now_title',$home_page->ID);?></h2>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="action-btns mt-md-4 text-center ">
                                            <a href="<?php echo get_field('talk_now_button',$home_page->ID);?>" class="btn primary-solid-btn animated-btn mr-3">Talk To Sales</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
					

<?php
get_footer();