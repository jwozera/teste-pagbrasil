<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PagBrasil
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
<?php wp_body_open(); ?>

	<header>
		<nav id="site-navigation" class="navbar navbar-expand-md navbar-light fixed-top">
			<div class="container">
				<div class="navbar-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri().'/assets/img/pagbrasil.png'; ?>" />
							</a>
						</h1>
					<?php else : ?>
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri().'/assets/img/pagbrasil.png'; ?>" />
							</a>
						</p>
						<?php
					endif; ?>
				</div><!-- .navbar-branding -->

				<button class="navbar-toggler pag"
					type="button"
					data-toggle="collapse"
					data-target="#navbarCollapse"
					aria-controls="navbarCollapse"
					aria-expanded="false"
					aria-label="Toggle navigation"
					>
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
					$menu_args = [
						'theme_location'  => 'menu-1',
						'container_id'    => 'navbarCollapse',
						'container_class' => 'collapse navbar-collapse',
						'menu_id'         => 'primary-menu',
						'menu_class'	  => 'navbar-nav ml-md-auto'
					];
					wp_nav_menu($menu_args);
				?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
