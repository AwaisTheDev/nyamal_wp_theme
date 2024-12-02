<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nyamal
 */


 $cta_text = get_field('cta_text', 'options');
 $cta_link = get_field('cta_link', 'options');


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
<?php wp_body_open(); ?> 
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nyamal' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="nyamal-container">
			<div class="header-inner">
				<div class="site-branding">
			<?php
			the_custom_logo();
			 ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
				<path d="M1 41C3.975 41 17.8329 39.4377 22.76 40.2186C24.464 40.4887 28.2394 40.6654 32.535 40.7811M52 41C51.0036 41 46.305 40.2186 38.91 40.9089M32.535 40.7811C34.5973 40.0552 36.7795 40.878 38.91 40.9089M32.535 40.7811C35.0246 40.831 38.91 40.9089 38.91 40.9089" stroke="#DA2128" stroke-width="4"/>
				<path d="M1 27C3.975 27 17.8329 25.4377 22.76 26.2186C24.464 26.4887 28.2394 26.6654 32.535 26.7811M52 27C51.0036 27 46.305 26.2186 38.91 26.9089M32.535 26.7811C34.5973 26.0552 36.7795 26.878 38.91 26.9089M32.535 26.7811C35.0246 26.831 38.91 26.9089 38.91 26.9089" stroke="#DA2128" stroke-width="4"/>
				<path d="M1 13C3.975 13 17.8329 11.4377 22.76 12.2186C24.464 12.4887 28.2394 12.6654 32.535 12.7811M52 13C51.0036 13 46.305 12.2186 38.91 12.9089M32.535 12.7811C34.5973 12.0552 36.7795 12.878 38.91 12.9089M32.535 12.7811C35.0246 12.831 38.91 12.9089 38.91 12.9089" stroke="#DA2128" stroke-width="4"/>
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<a class="button header-cta" href="<?php echo $cta_link; ?>" class="button"><?php echo $cta_text; ?></a>
		</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
