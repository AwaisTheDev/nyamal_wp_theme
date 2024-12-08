<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nyamal
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php echo get_template_part('template-parts/global/section', "pagetitle") ?> 
		<div class="nyamal-container">
		<?php

		while ( have_posts() ) :
			the_post();

			?>
			<div class="padding-vertical post-content-wrapper">
				<div class="post-content">
					<?php the_content();?>
				</div>
				<div class="divider">
					<svg xmlns="http://www.w3.org/2000/svg" width="1170" height="7" viewBox="0 0 1170 7" fill="none">
					<path opacity="0.2" d="M1 6C20.5657 3.16968 41.8759 5.57151 61.9662 4.63112C115.333 2.13103 169.444 1.2889 223.27 1.09351C288.967 0.8547 419.261 1.0638 485.137 1.83051C824.931 3.53304 971.536 0.920972 1117.84 3.4005C1135.41 3.69758 1152.1 1.90592 1170 2.04075" stroke="black"/>
					</svg>
				</div>
				<div class="post-meta">
					<?php
                    the_tags( '<div class="post-tags"><span class="tag-label">' . esc_html__( 'Tags:', 'nyamal' ). '</span> ', ', ', '</div>' );
                    ?>
                    <div class="post-date"><span class="date-label"><?php esc_html_e( 'Published on:', 'nyamal' );?></span> <?php the_date();?></div>
                    <div class="post-author"><span class="author-label"><?php esc_html_e( 'Author:', 'nyamal' );?></span> <?php the_author();?></div>
                    <?php edit_post_link( esc_html__( 'Edit', 'nyamal' ), '<div class="edit-link">', '</div>' );?>
                </div>

				<div class="divider">
					<svg xmlns="http://www.w3.org/2000/svg" width="1170" height="7" viewBox="0 0 1170 7" fill="none">
					<path opacity="0.2" d="M1 6C20.5657 3.16968 41.8759 5.57151 61.9662 4.63112C115.333 2.13103 169.444 1.2889 223.27 1.09351C288.967 0.8547 419.261 1.0638 485.137 1.83051C824.931 3.53304 971.536 0.920972 1117.84 3.4005C1135.41 3.69758 1152.1 1.90592 1170 2.04075" stroke="black"/>
					</svg>
				</div>

				<div class="post-pagination">
					<?php

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nyamal' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nyamal' ) . '</span> <span class="nav-title">%title</span>',
						)
					);
					?>
				</div>


				
				<?php if ( comments_open() || get_comments_number() ) { ?>
				<div class="divider">
					<svg xmlns="http://www.w3.org/2000/svg" width="1170" height="7" viewBox="0 0 1170 7" fill="none">
					<path opacity="0.2" d="M1 6C20.5657 3.16968 41.8759 5.57151 61.9662 4.63112C115.333 2.13103 169.444 1.2889 223.27 1.09351C288.967 0.8547 419.261 1.0638 485.137 1.83051C824.931 3.53304 971.536 0.920972 1117.84 3.4005C1135.41 3.69758 1152.1 1.90592 1170 2.04075" stroke="black"/>
					</svg>
				</div>
					<div class="comments-wrapper">
					<?php comments_template(); ?>
					</div>
				<?php }?>
				
				</div>
			</div>
			<?php 

			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
