<!DOCTYPE html>
<html>
	<head>

		<?php get_template_part('partials/head', 'meta'); ?>
		<?php get_template_part('partials/head', 'tags'); ?>
		
		<title><?php wp_title('|', true, 'right');?></title>
		<?php wp_head();?>
	</head>
	<body>
	<?php 
		$homepage_style_class = is_home() || is_front_page() ? ' homepage-header' : null;
	?>
	<nav class="navbar navbar-light bg-light secondary-navbar">
		<div class="container-fluid justify-content-lg-end justify-content-center">
			<div class="col mx-auto navbar-nav">
			<ul class="secondary-navigation-list--left">
				<?php dynamic_sidebar( 'secondary-navigation--left' );?>
			</ul>
		</div>
		<div class="col mx-auto navbar-nav">
			<ul class="secondary-navigation-list--center">
				<?php dynamic_sidebar( 'secondary-navigation--center' );?>
			</ul>
		</div>
			<div class="col mx-auto navbar-nav">
				<ul class="secondary-navigation-list--right">
					<?php dynamic_sidebar( 'secondary-navigation--right' );?>
				</ul>
			</div>
		</div>

	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light primary-navbar">

		<div class="container-fluid">
			
			<!--Brand-->
				<a class="navbar-brand  order-lg-1 order-sm-0">
					<?php if(has_custom_logo()){
						
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						
						echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
						
					}else{ ?>
						<h1><?php echo get_bloginfo('name'); ?></h1>
					<?php } ?>
					
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-left,#navbarSupportedContent-right" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
				</button>
			
			<!--Left navigation -->			
			<?php 
			
			$left_navigation_args = array(
				'menu_class'		=> 'navbar-nav', 
				'menu_id'			=> '', 
				'container'			=> 'div', 
				'container_class'	=> 'collapse navbar-collapse justify-content-lg-end order-lg-0',
				'container_id'		=> 'navbarSupportedContent-left',
				'theme_location'	=> 'primary-left',
				'walker'			=> new bootstrap_5_wp_nav_menu_walker(), 
			);
			wp_nav_menu($left_navigation_args);
			
			?>
			<!--Right Navigation-->
			
			<?php 
			
			$right_navigation_args = array(
				'menu_class'		=> 'navbar-nav', 
				'menu_id'			=> '', 
				'container'			=> 'div', 
				'container_class'	=> 'collapse navbar-collapse justify-content-lg-start order-lg-3',
				'container_id'		=> 'navbarSupportedContent-right',
				'theme_location'	=> 'primary-right',
				'walker'			=> new bootstrap_5_wp_nav_menu_walker(),  
			);
			
			wp_nav_menu($right_navigation_args);
			
			?>
			
		</div>		
		
	</nav>
	