<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/devstyles.css" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php $header =  get_header_textcolor();
	if ( $header !== "blank" ) : ?>
	<header class="site-header" <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) : ?> style="background:url('<?php echo esc_url( $header_image ); ?>');" <?php endif; ?>>
		<div class="row">
			<div class="large-4 hide-for-small columns wrapper" id="bannerwrap">
				<img src="<?php echo get_template_directory_uri(); ?>/img/wpbanner.png" />
			</div>
			<div class="large-4 small-12 columns" id="logowrap">
				<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
			</div>
			<div class="large-4 small-12 columns" id="navwrap">
				<div class="row">
					<a href="#">
						<div id="navhome" class="navitem small-12 large-4 columns">
							Home
						</div>
					</a>
					<a href="#">
						<div id="navstore" class="navitem small-12 large-4 columns">
							Store
						</div>
					</a>
					<a href="#">
						<div id="navblog" class="navitem small-12 large-4 columns">
							Blog
						</div>
					</a>
				</div>
			</div>
			<div class="large-4 hide-for-small columns large-centered">
				<h2 class="subtitle">We specialise in</h2>
			</div>
		</div>
	</header>
	<?php endif; ?>

<!-- Begin Page -->
<div class="row">