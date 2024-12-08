<?php
    $page_title = get_the_title();
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
    if( $featured_image){
        $featured_image_url = $featured_image[0];
    }elseif(is_home()|| is_archive()){
        $featured_image_url = get_stylesheet_directory_uri().'/assets/images/default.jpg';
    }
    else{
        $featured_image_url = get_stylesheet_directory_uri().'/assets/images/default.jpg';
    }
?>

<section class="page-title" style="background:url('<?php echo $featured_image_url ?>')">
 <div class="shape-divider top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 22" fill="none">
  <path  d="M1920 0H0V20.0306C246.465 16.6777 492.93 13.4053 739.587 14.6734C863.438 15.3106 987.202 17.4139 1110.84 20.1543C1141.84 20.8428 1172.93 21.6216 1204.08 22.402C1414.47 27.6721 1627.71 33.0133 1832.91 11.1102C1862.43 7.96149 1891.37 4.18182 1920 0Z" fill="#FBF9F6"/>
</svg>
    </div>

    <div class="shape-divider bottom">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1920 50" fill="none">
  <path  d="M1919.99 0.2628C1697.4 37.5403 1460.22 51.7808 1228.17 38.6167C1189.98 36.4508 1151.88 32.2087 1113.77 27.965L1113.76 27.9642C1059.03 21.8693 1004.26 15.771 949.141 15.8147C879.34 15.8704 810.079 23.4297 744.683 36.4082C660.359 53.1354 572.388 61.5918 483.541 51.9167C448.59 48.1113 416.21 40.1005 383.867 32.0988C346.072 22.7483 308.327 13.4103 266.592 10.8102C178.496 5.3169 86.3433 9.4244 0 19.8418V63H1920V0.2628H1919.99Z" fill="#FBF9F6"/>
</svg>
    </div>

    <div class="nyamal-container">
        <div class="inner">
            <?php if(has_post_parent( get_the_ID())){
                echo "<p>";
                global $post;
                if ($post->post_parent) {
                    $parent = get_post($post->post_parent);
                    echo $parent->post_title." >";
                }
                echo "</p>";
            } ?>
            <?php if(is_archive()){
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
            } elseif(is_home()){
                echo "<h1>Latest Updates</h1>";
            }
            else{
                the_title( '<h1>', '</h1>' );
            }?>
        </div>
    </div>
</section>