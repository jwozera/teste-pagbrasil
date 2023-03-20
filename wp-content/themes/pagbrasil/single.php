<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PagBrasil
 */

get_header();
?>

<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PagBrasil
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<div class="container pt-5">

			<!-- Three columns of text below the carousel -->
			
			<div class="row">
				<div class="col-lg-12">
					<?php if ( have_posts() ) : the_post() ?>
					
					<h1><?php the_title();?></h1>
					<?php the_post_thumbnail('full', array('class' => 'news-image img-fluid')); ?>

					<?php the_content();
					endif; // End of the loop.
					?>
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->
		</div>
<?php
get_footer();
