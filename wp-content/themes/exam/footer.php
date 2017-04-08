<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package delivery
 */

?>

</div><!-- #content -->

<section class="featured-clients">
	<div class="container">
		<h2 class="title"><?php echo get_theme_mod('clients_title'); ?></h2>
		<?php
		$query = new WP_Query( array('post_type' => 'slides-clients', 'posts_per_page' => 100 ) );
		if ($query->have_posts()):?>
			<div class="owl-carousel clients owl-theme">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="slider-item">
						<?php the_post_thumbnail('full'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</section>

<section class="contact-us">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>

					<?php dynamic_sidebar( 'footer-2'); ?>

				<?php endif; ?>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d41535.29088895768!2d32.08136771691893!3d49.409743801823616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1491639170155" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-sm-12 col-md-6">
				<?php echo do_shortcode("[cform-nd id=\"140\"]"); ?>
			</div>
		</div>
	</div>
</section>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="top-footer">
		<div class="container">
			<h2><?php the_custom_logo(); ?></h2>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

				<?php dynamic_sidebar( 'footer-1'); ?>

			<?php endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
