<?php
/**
 * @package Rocked
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-content">
		<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
			<div class="entry-thumb">
				<?php the_post_thumbnail('rocked-full-thumb'); ?>
			</div>
		<?php endif; ?>
		
<div class="post-single-postinfo">
<?php rocked_posted_on(); ?><span class="post-author"><i class="fa fa-user"></i><?php the_author() ?></span> - <?php the_author_meta('company-role'); ?>
</div>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rocked' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
		<footer class="entry-footer">
			<?php rocked_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article><!-- #post-## -->

<script>
jQuery( document ).ready(function() {
jQuery('.post-navigation .nav-previous').prepend('<i class="fa fa-arrow-left"></i>');
jQuery('.post-navigation .nav-next').append('<i class="fa fa-arrow-right"></i>');
jQuery('.post-navigation .nav-next a').text('NEXT');
jQuery('.post-navigation .nav-previous a').text('PREVIOUS');
});
</script>
