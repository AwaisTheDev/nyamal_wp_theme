<?php  
$newsletter_title = get_field('newsletter_title', "options");
$newsletter_cta_text = get_field('newsletter_cta_text', "options");
$newsletter_cta_link = get_field('newsletter_cta_link', "options");
$blog_category = get_field('blog_category', "options");


$category_query = new WP_Query(array(
    'category_name' => $blog_category, 
    'posts_per_page' => -1, 
    'orderby' => 'date', 
    'order' => 'DESC' 
));


?>

<section class="updates-newsletter">
  <div class="nyamal-container">
    <div class="inner">
      <div class="left">
        <h2><?php echo $newsletter_title ?></h2>
      <a class="button secondary" href="<?php echo $newsletter_cta_link ?>"><?php echo $newsletter_cta_text ?></a>
    </div>

      <div class="post-slider-wrapper">
        <div class="custom-prev-button nav-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24" fill="none">
            <path d="M14.5 1C14.5 1 10.5 4.5 7.5 7C4.5 9.5 2 13.5 2 13.5L14.5 23" stroke="#DA2128" stroke-width="2"/>
          </svg>
          </div>
          <div class="custom-next-button nav-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24" fill="none">
            <path d="M1.5 1C1.5 1 5.5 4.5 8.5 7C11.5 9.5 14 13.5 14 13.5L1.5 23" stroke="#DA2128" stroke-width="2"/>
          </svg>
          </div>
        <?php
              // The Loop
        if ($category_query->have_posts()) :?>
        <div class='swiper-posts-container'>
          
          <div class="swiper-wrapper">

        <?php
            while ($category_query->have_posts()) : $category_query->the_post();
                // Your post display logic here
                ?>
                <div class="swiper-slide">
                <article>
                  <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail() ?>
                    <div>
                      <p class="date"><?php echo get_the_date(); ?></p>
                      <h4>
                        <?php the_title(); ?>
                      </h4>
                    </div>
                    </a>
                </article>
                </div>
                <?php
            endwhile;?>
            </div>
            <?php // Reset post data
            wp_reset_postdata();
        else :
            echo 'No posts found in this category.';
        echo "</div>";
        endif; ?>
      </div>
    </div>
  </div>
</section>