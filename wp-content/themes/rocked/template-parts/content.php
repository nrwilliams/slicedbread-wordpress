<?php
/**
 * @package Rocked
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-content">

		<header class="blog-title">
                <?php if ( has_post_thumbnail() && ( get_theme_mod( 'index_feat_image' ) != 1 ) ) : ?>
			<div class="entry-thumb">
			<?php rocked_post_formats(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-list-image"><?php the_post_thumbnail('medium_large'); ?></a>
			</div>
		<?php endif; ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() && get_theme_mod('hide_meta_index') != 1 ) : ?>
			<div class="post-meta">
				<?php rocked_posted_on(); ?>
				<span class="post-author"><i class="fa fa-user"></i><?php the_author() ?></span> - <?php the_author_meta('company-role'); ?>
				
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php if ( (get_theme_mod('full_content_home') == 1 && is_home() ) || (get_theme_mod('full_content_archives') == 1 && is_archive() ) ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
			
			<a href="<?php the_permalink(); ?>" class="roll-button">READ MORE</a>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rocked' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</div>
</article><!-- #post-## -->