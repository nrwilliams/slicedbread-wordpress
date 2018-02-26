<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rocked
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,600,700" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="preloader-inner">
    	<?php $preloader = get_theme_mod('preloader_text', __('Loading&hellip;','rocked')); ?>
    	<?php echo esc_html($preloader); ?>
    </div>
</div>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rocked' ); ?></a>

	<header id="header" class="header">
		<div class="header-wrap">
			<div class="container">
				<div class="row">
					<div class="site-branding col-md-3 col-sm-3 col-xs-3">
						<?php rocked_branding(); ?>
					</div><!-- /.col-md-2 -->
					<div class="menu-wrapper col-md-9 col-sm-9 col-xs-9">
						<div class="btn-menu"><i class="fa fa-bars"></i></div>
						<nav id="mainnav" class="mainnav">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div><!-- /.col-md-10 -->
				</div><!-- /.row -->
			</div><!-- /container -->
		</div>
	</header>
	
	<?php if ( get_header_image() && ( get_theme_mod('front_header_type' ,'image') == 'image' && is_front_page() || get_theme_mod('site_header_type', 'image') == 'image' && !is_front_page() ) ) : ?>
	<div class="header-image parallax">
		<?php rocked_header_text(); ?>		
	</div>
	<?php endif; ?>

	<div class="main-content">


<?php if (is_home()): ?>
<div class="page-title-main">

   	<div class="panel-grid panel-has-style">
		<div class="page-title siteorigin-panels-stretch rocked-stretch" style="background: <?php if (is_home() && get_option('page_for_posts') ) {
    $blog_home_id = get_option( 'page_for_posts' );
    echo 'url('.get_the_post_thumbnail_url($blog_home_id, 'full').')'; 
} else { 
echo 'url('.get_the_post_thumbnail_url($post->ID, 'full').')';
}
?>;">

		
		
		<div class="page-title-overlay"></div>
		<h1>Blog</h1>
		</div>
	</div>
</div>
<?php else: ?>

<div class="page-title-main <?php if (is_archive()): ?>article-hide<?php endif ?>">

		<?php while ( have_posts() ) : the_post(); ?>
		
					<?php if (has_post_thumbnail( $post->ID )): ?>
					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
					
					<div class="panel-grid panel-has-style">
						<div class="page-title siteorigin-panels-stretch rocked-stretch" style="background: url('<?php echo $image[0]; ?>');" data-stretch-type="full">
							<div class="page-title-overlay"></div>
						<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<?php else : ?>
					<div class="noimage-pagetitle"><h1><?php the_title(); ?></h1></div>
					<?php endif; ?>
		
		<?php endwhile; // end of the loop. ?>

		</div>
<?php endif ?>

<?php if (is_archive()): ?>

				<?php
					the_archive_title( '<h1 class="page-title article-page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>


<?php endif ?>

		<div class="container">
			<div class="row">