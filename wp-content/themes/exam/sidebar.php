<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */


if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
return;
}

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
return;
}
?>


<aside id="secondary" class="widget-area" role="complementary">
	<div class="aside-block">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<div class="aside-block">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
	<div class="aside-block"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>

</aside><!-- #secondary -->
