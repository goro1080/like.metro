<?php 
?><!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php	if (is_WP()): ?>
<meta name="viewport" content="width=480, initial-scale=1.0" />
<?php	else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php	endif; ?>
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
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/gpl/twentyeleven.css' ; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/ms-pl/metroblog.css' ; ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
<?php 
wp_head();
?>
<body <?php 
if (! is_WP()):
	body_class('');
else:
	body_class('wp-single');
endif; ?>>
<div id="header" role="banner">
<?php	if (is_WP()): ?>
	<div id="wp-headerimg">
<?php 	else: ?>
	<div id="headerimg">
<?php	endif; ?>
		<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>
<hr />
