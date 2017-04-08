<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package exam
 */

get_header(); ?>

<section class="single-pages">
	<div class="blog-title">
		<div class="container">
			<h2 class="title-big"><?php echo get_theme_mod('title'); ?></h2>
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'single');

							the_post_navigation();


						endwhile; // End of the loop.
						?>
					</div>
					<div class="col-sm-12 col-md-4">
						<?php get_sidebar();?>
					</div>
				</div>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php

get_footer();
