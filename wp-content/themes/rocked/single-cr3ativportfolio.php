<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<!-- Start of page wrap -->
<div class="cr3ativeportfolio_page_wrap"> 
  
    <!-- Start of wrapper -->
    <div class="cr3ativeportfolio_wrapper"> 

        <!-- Start of one third first -->
        <div class="cr3ativeportfolio_one_third_first">
            <?php
                $portfolio_clientname = get_post_meta($post->ID, 'cr3ativportfolio_clientname', $single = true); 
                $portfolio_url = get_post_meta($post->ID, 'cr3ativportfolio_url', $single = true); 
                $portfolio_urltext = get_post_meta($post->ID, 'cr3ativportfolio_urltext', $single = true); 
                $portfolio_skills = get_post_meta($post->ID, 'cr3ativportfolio_skills', $single = true); 
                $portfolio_leftintrotext = get_post_meta($post->ID, 'cr3ativportfolio_leftintrotext', $single = true); 
                $sd = get_post_meta($post->ID, 'cr3ativportfolio_date', $single = true); 
            ?>
            
            <?php if ($portfolio_leftintrotext != ('')){ ?>
            
            <p><?php echo stripslashes($portfolio_leftintrotext); ?></p>
            
            <?php } ?>
            
            <?php if ($sd != ('')){ ?>
            
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
		<img src="<?php echo $image[0]; ?>">
		<?php endif; ?>

            <?php } ?>
            
        </div>
        <!-- End of one third first --> 

        <!-- Start of two third -->
        <div class="cr3ativeportfolio_two_third">
	<h1><?php the_title (); ?></h1>

	<div class="row portfolio-intro">
	<div class="col-md-12 portfolio-top">
	<i class="fa fa-calendar"></i><?php $dateformat = get_option('date_format'); ?><?php echo date($dateformat, $sd); ?> 
	</div>
	</div>

        <?php the_content('        '); ?>
	<div class="portfolio-footer">
	<b>CLIENT:</b> <?php echo stripslashes($portfolio_clientname); ?> | <b>SKILLS:</b> <?php echo stripslashes($portfolio_skills); ?> <br>
	</div>
	<?php if ($portfolio_url != ('')){ ?>
<a href="<?php echo ($portfolio_url); ?>" class="roll-button"><?php echo stripslashes($portfolio_urltext); ?></a>
            <?php } ?>
	


        </div>
        <!-- End of two third --> 

        <?php endwhile; ?>
        <?php else: ?>
        <p>
        <?php _e( 'There are no posts to display. Try using the search.', 'cr3atport' ); ?>
        </p>
        <?php endif; ?>
        
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('cr3ativ_portfolio_widget_area') ) : else : ?>		
        <?php endif; ?> 

    </div>
    <!-- End of wrapper --> 

    <!-- Start of clear fix -->
    <div class="cr3ativeportfolioclear"></div>
    
</div>
<!-- End of page wrap -->

<?php get_footer (); ?>
