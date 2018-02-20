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

<style type="text/css">

#section_one {
	background: url(<?php the_field( 'sec_one_desktop_image' ); ?>) top center no-repeat;
	background-size: cover;
}


.contact_right {
	background: url(<?php the_field( 'contact_page_image' ); ?>) top right no-repeat;
	background-size:cover;
}


.banner_wrapper {
	background: url(<?php the_field( 'banner_background','option'); ?>) top center no-repeat;
	background-size:cover;
}


@media screen and (max-width: 1060px) {
	
	
	#section_one {
		background: url(<?php the_field( 'sec_one_tablet_image' ); ?>) top right no-repeat;
		background-size: 1060px auto;
		background-position-y: -200px;
	}
	
	
} /* Media Query */


@media screen and (max-width: 767px) {
	


#section_one {
	background: url(<?php the_field( 'sec_one_mobile_image' ); ?>) top right no-repeat;
	background-size:767px auto;
}



} /* Media Query */

</style>



</head>

<body <?php body_class(); ?>>
	

<a class="mobile_logo" href="<?php bloginfo('url');?>">
		
	<img src="<?php bloginfo('template_directory');?>/images/murphy-law-logo.svg"/>
		
</a><!-- logo -->
		
<header id="sticky_header">
	
	<div class="header_left">
		
	<div class="menu_wrapper">
		
		<span class="menu_bars"></span><!-- menu_bars -->
		<span class="menu_bars"></span><!-- menu_bars -->
		<span class="menu_bars"></span><!-- menu_bars -->
		
		<span class="menu_title">Menu</span><!-- menu_title -->
		
	</div><!-- menu_wrapper -->
		
		
		
	</div><!-- header_left -->
	
	<div class="header_center" href="<?php bloginfo('url');?>">
			
		<a class="logo" href="<?php bloginfo('url');?>">
		
			<img src="<?php bloginfo('template_directory');?>/images/murphy-law-logo.svg"/>
		
		</a><!-- logo -->
		
		<div class="phone">
			
			<a class="tel" href="tel:<?php the_field( 'phone',139); ?>"><?php the_field( 'phone',139); ?></a><!-- tel -->
			
			<span class="espanol"><?php the_field( 'se_habla_espanol','option'); ?></span><!-- espanol -->
			
		</div><!-- phone -->
			
	</div><!-- header_center -->
	
	<div class="header_right">
		
		<div class="email_wrapper">
			
			<a href="#scroll">
			
				<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-email.svg"); ?>
			
				<span class="free_consultation" href="#scroll">Free Consultation</span><!-- free_consultation -->
			
			</a>
			
		</div><!-- email_wrapper -->
		
	</div><!-- header_right -->
	
</header>

<div id="sticky_mobile_header">
	
	<div class="menu_wrapper sticky_menu">
			
		<span class="menu_bars"></span><!-- menu_bars -->
		<span class="menu_bars"></span><!-- menu_bars -->
		<span class="menu_bars"></span><!-- menu_bars -->
			
		<span class="menu_title">Menu</span><!-- menu_title -->
			
	</div><!-- menu_wrapper -->
	
	
	<div class="mobile_phone_wrapper">
		
		<a class="mobile_phone" href="tel:(225) 928-8800">
			
			<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-phone2.svg"); ?>
			
		</a>
		
	</div><!-- mobile_phone -->
	
	
	<div class="mobile_email_wrapper">
		
		<a class="" href="#footer_section">
		
			<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-email.svg"); ?>
		
		</a>
			
	</div><!-- mobile_email_wrapper -->
	
	
</div><!-- mobile_header -->

<div class="nav_wrapper">
	
	<div class="close">
		
		<div class="close_inner">
		
			<span class="close_left"></span><!-- close_left -->
		
			<span class="close_right"></span><!-- close_right -->
		
		</div><!-- close_inner -->
		
	</div><!-- close -->
	
	<div class="nav_col_one nav_col">
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
		
	</div><!-- nav_col_one -->
	
	<div class="nav_col_two nav_col">
		
		<div class="sub_menu_container">
			
			
			
		</div><!-- sub_container -->
		
		
		
	</div><!-- nav_col_two -->
	
	<div class="nav_col_three">
		
		
		<div class="form_inner">
		
			<span class="large_header">Free Case Consultation</span><!-- large_header -->
		
			<?php gravity_form(2, false, false, false, '', true, 312); ?>
			
			<span class="nav_required">*Required</span><!-- nav_required -->
		
		</div><!-- form_inner -->
		
		
	</div><!-- nav_col_three -->
	
	
	
</div><!-- nav_wrapper -->
				


			