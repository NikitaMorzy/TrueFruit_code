<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TrueFruit</title>
	<meta name="description" content="TrueFruit - премиум доставка фруктов , овощей и ягод! По СПб и ЛО"> 
    <meta name="keywords" content="Доставка фрукто,доставка овощей,доставка ягод">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<meta name="color-scheme" content="only light">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="0rF2ZE2PTxFfKh6CrfCPhJ9QyO0T9oT1DT2K0SSo_N4" />
	<meta name="yandex-verification" content="379dafb1f07d636b" />
  
	<title>Fixed Menu</title>
    <?php wp_head(); ?>
</head>
<body>
    
        <div class="preloader">
          <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
          </div>
        </div>
    
                <script>
              window.onload = function () {
                document.body.classList.add('loaded_hiding');
                window.setTimeout(function () {
                  document.body.classList.add('loaded');
                  document.body.classList.remove('loaded_hiding');
                }, 400);
              }
            </script>
            
		<header id="header" class="header">
			<div class="container">
				<div class="nav">
				    
				<button class="menu-open" data-popup-menu="menu2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu2.svg" alt="Open menu">
				</button>
				
				    <div class="logo">
                <?php if (is_front_page()) : ?>
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt="TrueFruit" >
                 <?php else : ?>
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt="TrueFruit" >
                    </a>
                <?php endif; ?>
                </div>

                    <?php
                          wp_nav_menu( [
                            'theme_location'  => 'menu_main_header',
                            'container'       => null, 
                            'menu_class'      => 'nav menu',
                            'add_a_class'  => 'change-text underline-one',
                         ] );
                    ?>
					<ul>
						<a href="#" class="man" data-popup="popup-menu">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/man.png" alt="man" class="man">
						</a>
					</ul>

					<ul>
						<div>
							<a href="truefruit/korzina/" class="korz">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/korzina.svg" alt="basket" class="basket">
							</a>
							<span class="cart-btn__counter js-cart-total-count-items">0</span>
						</div>
					</ul>
				</div>
			</div>
			
		</header>