<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nyamal
 */

get_header();
?>
<?php echo get_template_part('template-parts/global/section', "pagetitle") ?> 


<main id="primary" class="site-main blog-page">
<div class="padding-vertical">
<div class="nyamal-container">
		<?php if ( have_posts() ) : ?>
            <div>
			<?php
			/* Start the Loop */
            ?>
            <div class="post-grid">
            <?php
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;?>
                </div>
            <?php

			the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('Previous', 'textdomain'),
                'next_text' => __('Next', 'textdomain'),
                'screen_reader_text' => __('Posts navigation', 'textdomain')
            ));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </div>
</div>
    </div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
