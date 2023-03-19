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

		<div id="carousel" class="carousel slide" data-ride="carousel">
			<?php 
				$i = 0;
				$slide_query = new WP_Query('post_type=slideshow'); 
			?>
			<ol class="carousel-indicators">
				<?php while($slide_query->have_posts()) : $slide_query->the_post(); ?>
					<li data-target="#carousel" data-slide-to="<?php echo $i ?>"></li>
				<?php
					$i++;
					endwhile;
				?>
			</ol>
			<div class="carousel-inner">
			<?php 
				$j = 0;
				while($slide_query->have_posts()) : $slide_query->the_post();
				$link = get_post_meta($post->ID, 'Link do Slide', true); 
				$label = get_post_meta($post->ID, 'Texto do Botão', true);
			?>		
				<div class="carousel-item <?php echo $j== 0 ? "active" : "" ?>">
					<?php the_post_thumbnail();?>
					<div class="container">
						<div class="carousel-caption text-left mx-auto">
							<h1><?php the_title();?></h1>
							<?php if ($link && $label): ?>
							<a class="btn btn-lg btn-primary" href="<?php echo $link;  ?>">
								<?php echo $label;  ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php
				$j++;
				endwhile;
			?>
			</div>
			<button class="carousel-control-prev" type="button" data-target="#carousel" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-target="#carousel" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</button>
		</div>

		<?php wp_reset_postdata(); // reset the query ?>
		
		
		<div class="container">

			<!-- Three columns of text below the carousel -->
			<div class="row">
			<div class="col-lg-12">
				<?php if ( have_posts() ) : the_post() ?>
				<h1><?php the_title();?></h1>

				<?php the_content();
				endif; // End of the loop.
				?>
			</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->


			<!-- START THE NEWS -->

			<h1>Últimas Notícias</h1>
			<?php  
				$news_query = new WP_Query('post_type=post&showposts=3'); 
				while($news_query->have_posts()) : $news_query->the_post();
			?>
			<a href="<?php the_permalink() ?>" class="row news">

				<header class="col-md-12">
					<?php
					$posttags = get_the_tags();
						if ($posttags) {
						foreach($posttags as $tag) {
							echo '<span class="badge badge-light">'.$tag->name . '</span>'; 
						}
					}
					?>
				</header>
				<div class="col-md-3">
					<?php the_post_thumbnail('thumbnail', array('class' => 'news-image img-fluid')); ?>
				</div>
				<div class="col-md-9">
					<h2 class="news-heading"><?php the_title();?></h2>
					<p class="excerpt"><?php the_excerpt();?>.</p>
				</div>
			</a>
			<?php endwhile;?>
			
			<!-- /END THE FEATURETTES -->

		</div><!-- /.container -->

<?php
get_footer();
