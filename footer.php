<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nyamal
 */

$newsletters_title = get_field('newsletters_title', 'options');
$newsletter_shortcode = get_field('newsletter_shortcode', 'options');
$locations = get_field('locations', 'options');
$contact_email = get_field('contact_email', 'options');
$social_links = get_field('social_links', 'options');
$acknowledgement_title = get_field('acknowledgement_title', 'options');
$acknowledgement_description = get_field('acknowledgement_description', 'options');
$copyright = get_field('copyright', 'options');




?>

	<footer id="colophon" class="site-footer">
		<div class="footer-main">
			<div class="nyamal-container">

			<div class="footer-main-inner">
				<div class="footer-col col1">
					<?php the_custom_logo(); ?>
					<div class="newsletter-form-wapper">
						<h4><?php echo $newsletters_title ?></h4>
						<?php do_shortcode($newsletter_shortcode)?>
					</div>
					<div class="footer-locations">
						<?php if($locations) : ?>
							<ul class="grid">
								<?php foreach ($locations as $location) :?>
								<li class="card">
									<h4><?php echo $location['title']?></h4>
									<ul class="icon-list">
										<li>
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/phone.svg">
											<a href="tel:<?php echo $location['phone_number']?>"><?php echo $location['phone_number']?></a>
										</li>
										<li>
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/location.svg">
											<?php echo $location['address']?>
										</li>
									</ul>
								</li>
								<?php endforeach;?>

								<li class="card">
									<h4>Contact</h4>
									<ul class="icon-list">
										<li>
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/email.svg">
											<a href="mailto:<?php echo $contact_email?>"><?php echo $contact_email?></a>
										</li>
									</ul>
								</li>

								<li class="card">
									<h4>Social Links</h4>
									<?php if($social_links) :?>
										<ul class="social-icons-list">
										<?php foreach ($social_links as $link) :?>
											<li>
                                                <a href="<?php echo $link['social_link']?>" target="_blank">
                                                    <img src="<?php echo $link['icon']?>">
                                                </a>
                                            </li>
										<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</li>
							</ul>
						<?php endif; ?>
                    </div>

				</div>
				<div class="footer-col col2">

				<ul class="footer-menus-grid">
					<?php
					$total_menus = 6;
					for ($i = 1; $i <= $total_menus; $i++) {
						
						$menu_id = 'footer-menu-'. $i;
                        if (has_nav_menu($menu_id)) {
                            ?>
                            <li class="card">
                                <h4><?php echo wp_get_nav_menu_name($menu_id)?></h4>
								<?php
								 wp_nav_menu(array(
                                'theme_location' => $menu_id
                            ));
								?>
                            </li>
                            <?php
                        }
					}
					?>
				</ul>
				<div class="acknowledgement">
					<h4><?php echo $acknowledgement_title?></h4>
                    <div><?php echo $acknowledgement_description?></div>
                </div>
				</div>
			</div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="nyamal-container">
				<div class="footer-bottom-inner">
					<div class="footer-bottom-left">
						<?php echo $copyright?>
					</div>

					<div class="footer-bottom-right">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-bottom',
								'menu_id'        => 'footer-bottom-menu',
							)
						);
						?>
					</div>
				</div>
            </div>
        </div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
