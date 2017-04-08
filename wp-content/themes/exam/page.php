<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package delivery
 */

get_header(); ?>
	<section class="blog">
		<div class="page-title">
			<div class="container">
				<h2 class="title-big"><?php echo get_theme_mod('title'); ?></h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
							<!--							--><?php //query_posts('&cat=-4'); ?>
							<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>

									<?php
								endif;

								/* Start the Loop */

								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content');
									//


								endwhile; ?>

								<div class="pagination">
									<?php global $wp_query;

									$big = 999999999; // need an unlikely integer

									echo paginate_links(array(
										'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
										'format' => '?paged=%#%',
										'total' => $wp_query->max_num_pages,
										'prev_text' => '',
										'next_text' => ''
									));
									?>
								</div>



							<?php else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
				<div class="col-sm-12 col-md-4">
					<?php get_sidebar();?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer();