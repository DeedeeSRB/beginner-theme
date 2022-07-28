<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beginner_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
	<div class="site-header container-fluid p-0 sticky-top" style="background-color: #D0D3D4;">
		<nav class="navbar container navbar-expand">
			<div class="container-fluid justify-content-center">
				<a class="navbar-brand" href="#">
					<img src="<?= $image[0] ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
					<?= bloginfo( 'name' ); ?>
				</a>
				<?php
					wp_nav_menu( array(
						'container' => false,
						'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu',
						'menu_class' => 'navbar-nav'
					) );	
				?>
			</div>
		</nav>
	</div> <!-- .site-header -->
