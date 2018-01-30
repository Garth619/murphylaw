<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
<header>
	
	<div class="header_left">
		
		<div class="menu_wrapper">
			
			<span class="menu_bars"></span><!-- menu_bars -->
			<span class="menu_bars"></span><!-- menu_bars -->
			<span class="menu_bars"></span><!-- menu_bars -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
		
		
		
	</div><!-- header_left -->
	
	<div class="header_center" href="<?php bloginfo('url');?>">
			
		<a class="logo" href="">
		
			<img src="<?php bloginfo('template_directory');?>/images/murphy-law-logo.svg"/>
		
		</a><!-- logo -->
		
		<div class="phone">
			
			<a class="tel" href="">(225) 928-8800</a><!-- tel -->
			
			<span class="espanol">Se Habla Espanol</span><!-- espanol -->
			
		</div><!-- phone -->
			
	</div><!-- header_center -->
	
	<div class="header_right">
		
		<div class="email_wrapper">
			
			<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-email.svg"); ?>
			
			<span class="free_consultation">Free Consultation</span><!-- free_consultation -->
			
		</div><!-- email_wrapper -->
		
	</div><!-- header_right -->
	
</header>
				

<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			