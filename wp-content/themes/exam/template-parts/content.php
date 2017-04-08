<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package exam
 */

?>

<article class=" col-sm-12 col-md-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) : ?>

		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content row">
			<div class="post">
				<a class="" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full', 'class=img-responsive');?>
				</a>
				<div class="post-text">
					<a href="<?php the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
					<p><?php the_excerpt(); ?></p>
					<div class="date-wrap"><span class="date"><?php the_time('j, m, Y'); ?></span></div>
				</div>

			</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
