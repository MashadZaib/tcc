<?php


?>
<!DOCTYPE html>
<html class="" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />


	
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>

</head>

<body>
	<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			$classs = !is_front_page() ? "header-custom" : "";

		?>
		

    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->
    <!--header section start-->
    <header id="header" class="header-main">
     

        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                    <!--logo start-->
                    <a href="<?php echo get_home_url();?>" class="navbar-brand">
                    	<img alt="" width="120" class="img-fluid" src="<?php  echo esc_url( $custom_logo_url ); ?>">
                    </a>
                    <!--logo end-->

                    

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="fas fa-bars"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                    	<?php
                    	wp_nav_menu([

                    		'theme_location'  => 'menu-1',
                    		'container'       => '',

                    		'menu_id'         => false,
                    		'menu_class'      => 'navbar-nav ml-auto main-navbar-nav',
                    		'depth'           => 0,
                    	
                    	]);
                    	?>
                       
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->
    </header>
    <!--header section end-->