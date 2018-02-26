<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Rocked
 */

if ( ! is_active_sidebar( 'custom-side-bar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-3" role="complementary">
	<?php dynamic_sidebar( 'custom-side-bar' ); ?>
</div><!-- #secondary -->
