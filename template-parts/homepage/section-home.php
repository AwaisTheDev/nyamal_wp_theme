<?php
$page_heading = get_field('page_heading');
$banner_description = get_field('banner_description');
$banner_card_subheading = get_field('banner_card_subheading');
$banner_card_heading = get_field('banner_card_heading');
$banner_card_heading = get_field('banner_card_heading');
$banner_card_description = get_field('banner_card_description');
$banner_card_button_text = get_field('banner_card_button_text');
$banner_card_button_link = get_field('banner_card_button_link');
$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 

?>

<section class="homepage-banner" style="background:url('<?php echo $featured_image[0] ?>')">

    <div class="shape-divider top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 22" fill="none">
  <path  d="M1920 0H0V20.0306C246.465 16.6777 492.93 13.4053 739.587 14.6734C863.438 15.3106 987.202 17.4139 1110.84 20.1543C1141.84 20.8428 1172.93 21.6216 1204.08 22.402C1414.47 27.6721 1627.71 33.0133 1832.91 11.1102C1862.43 7.96149 1891.37 4.18182 1920 0Z" fill="#FBF9F6"/>
</svg>
    </div>

    <div class="shape-divider bottom">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1920 50" fill="none">
  <path  d="M1919.99 0.2628C1697.4 37.5403 1460.22 51.7808 1228.17 38.6167C1189.98 36.4508 1151.88 32.2087 1113.77 27.965L1113.76 27.9642C1059.03 21.8693 1004.26 15.771 949.141 15.8147C879.34 15.8704 810.079 23.4297 744.683 36.4082C660.359 53.1354 572.388 61.5918 483.541 51.9167C448.59 48.1113 416.21 40.1005 383.867 32.0988C346.072 22.7483 308.327 13.4103 266.592 10.8102C178.496 5.3169 86.3433 9.4244 0 19.8418V63H1920V0.2628H1919.99Z" fill="#F8EDE6"/>
</svg>
    </div>

    <div class="nyamal-container">
        <div class="inner">
            <div>
                <h1><?php echo $page_heading ?></h1>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="339" height="6" viewBox="0 0 339 6" fill="none">
                        <path d="M1 3.61163C35.8191 -2.0612 77.4322 3.4305 94.8417 2.4065C126.264 2.4065 143.249 2.92343 161.932 3.55755C178.068 4.1052 237.09 3.55755 237.09 3.55755C277.005 3.55755 334.122 5 339 5" stroke="#FCB116" stroke-width="2"/>
                    </svg>
                </div>

                <div class="description">
                    <p><?php echo $banner_description;?></p>
                </div>
            </div>

            <div class="banner-card">
                <img class="bg-element" src="<?php echo get_template_directory_uri()."/assets/images/home/banner-card.svg" ?>">
            <div class="content">
                <h3>
                <?php echo "<span class='styled'>".$banner_card_subheading."</span>". "<br>". $banner_card_heading ?>
            </h3>
                <div class="description"><?php echo $banner_card_description;?></div>
                <a class="button" href="<?php echo $banner_card_button_link ?>" class="button"><?php echo $banner_card_button_text;?></a>
            </div>
            
        </div>

        </div>
        
    </div>
</section>

<?php 
$nyamal_mean_title = get_field('nyamal_mean_title'); 
$nyamal_mean_description = get_field('nyamal_mean_description'); 
$nyamal_mean_button_title = get_field('nyamal_mean_button_title'); 
$nyamal_mean_button_link = get_field('nyamal_mean_button_link'); 
$nyamal_mean_side_content = get_field('nyamal_mean_side_content'); 

?>

<section class="nyamal-mean">
    <div class="shape-divider bottom">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1920 36" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 11.4648V36H1920V0C1697.4 21.8359 1460.23 30.1814 1228.17 22.4698C1189.99 21.2 1151.91 18.7153 1113.81 16.2297C1059.06 12.658 1004.27 9.08398 949.144 9.10974C879.342 9.14075 810.081 13.5714 744.685 21.171C660.361 30.9706 572.39 35.9231 483.542 30.256C448.584 28.0261 416.197 23.3322 383.847 18.6436C346.059 13.1667 308.321 7.69714 266.593 6.17053C178.491 2.95789 86.3435 5.36267 0 11.4648Z" fill="white"/>
        </svg>
    </div>

    <div class="nyamal-container">
        <div class="inner">
                <div class="col-left">
                    <h2>
                        <?php echo $nyamal_mean_title ?>
                    </h2>
                    <div class="description body19">
                        <?php echo $nyamal_mean_description ?>
                    </div>

                    <a class="button secondary" href="<?php echo $nyamal_mean_button_link ?>"><?php echo $nyamal_mean_button_title ?></a>
                </div>
                <div class="col-right">
                    <div class="side-content">
                        <?php echo $nyamal_mean_side_content ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php 
$people_heading = get_field('people_heading');
$people_description = get_field('people_description');
$people_cta_text = get_field('people_cta_text');
$people_cta_link = get_field('people_cta_link');
$people_quote = get_field('people_quote');
$people_quote_author = get_field('people_quote_author');
$people_image = get_field('people_image');
?>

<section class="nyamal-people">
    <div class="nyamal-container">
        <div class="inner">
            <h2><?php echo $people_heading?> </h2>
            <div class="description body19">
            <?php echo $people_description?>
            </div>
            <blockquote>
                <p><?php echo $people_quote?></p>
                <p class="author"> - <?php echo $people_quote_author?></p>
            </blockquote>
            <a class="button secondary" href="<?php echo $people_cta_link ?>"><?php echo $people_cta_text ?></a>
        </div>
        <img class="map" src="<?php echo $people_image ?>">
    </div>
</section>

<?php 
$determination_area_image = get_field('determination_area_image');
$determination_title = get_field('determination_title');
$determination_description = get_field('determination_description');
$determination_video_thumbnail = get_field('determination_video_thumbnail');
$deternimation_video_url = get_field('deternimation_video_url');
?>
<section class="determination">
    <div class="nyamal-container">
        <img src="<?php echo $determination_area_image; ?>">
    </div>
</section>

<section class="determination-content">
    <div class="nyamal-container">
        <div class="inner">
            <h2><?php echo $determination_title;?></h2>
            <div class="content body19"><?php echo $determination_description;?></div>
        </div>
    </div>

    <div class="nyamal-container">
        <a class="deternimation-video-trigger" data-video-url="<?php echo $deternimation_video_url; ?>">
            <img src="<?php echo $determination_video_thumbnail;?>" alt="Video Thumbnail">
            <div class="video-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
  <g filter="url(#filter0_b_2290_90)">
    <path d="M96.7425 29.9025C94.1333 22.2941 81.4855 9.35022 73.8453 6.49109L62.6834 2.11265C56.5408 -0.36367 56.1664 -0.555077 41.4593 0.976177C32.5204 1.93321 28.2499 5.73742 20.6097 10.1159C16.5146 12.4008 11.3081 16.7792 8.69894 22.4855C7.58742 24.9618 2.74357 29.5317 2.74357 31.4338C2.74357 32.1994 2.18196 35.238 1.25765 38.2885C-0.228268 40.7649 0.146137 43.4326 0.146137 53.8882C0.146137 66.4492 -0.965376 64.93 2.94247 72.9212C7.78633 82.2403 12.9929 88.3414 18.7611 90.6144L30.1102 95.3756C31.5961 96.1412 37.7387 97.4691 43.5068 98.6056C60.6358 101.836 69.3759 99.7421 82.0354 89.2865C88.178 84.3338 95.4321 74.2491 96.1809 71.9642C98.0412 65.875 103.435 57.501 96.7425 29.9025Z" fill="white" fill-opacity="0.85"/>
    <path d="M73.4801 7.42202L73.4874 7.4249L73.4948 7.42765C77.1033 8.77803 82.0495 12.5983 86.4655 17.1149C90.8652 21.6149 94.5372 26.6003 95.7817 30.184C99.0981 43.8769 99.4019 52.7337 98.6759 58.8821C98.1319 63.4892 97.0252 66.5564 96.0927 69.1409C95.7744 70.0231 95.4763 70.8491 95.2279 71.6609C95.084 72.0921 94.5656 73.0428 93.6823 74.3899C92.8183 75.7075 91.666 77.3146 90.3426 79.0095C87.6868 82.4108 84.3923 86.1016 81.4077 88.508L81.4077 88.5079L81.3986 88.5154C75.1279 93.6945 69.9146 96.7293 64.2125 98.1061C58.504 99.4843 52.1991 99.2267 43.6964 97.6237C40.8177 97.0565 37.8546 96.4433 35.4298 95.8777C34.2163 95.5946 33.1465 95.3255 32.2938 95.0819C31.4162 94.8313 30.8415 94.6275 30.5682 94.4867L30.5333 94.4687L30.497 94.4535L19.1479 89.6922L19.1378 89.688L19.1277 89.684C13.7135 87.5505 8.6521 81.7346 3.83539 72.4708C1.87504 68.4617 1.26469 67.0021 1.07427 65.0226C0.975714 63.9982 0.989819 62.8214 1.03322 61.0622C1.03862 60.8432 1.04445 60.6159 1.0505 60.3795C1.09271 58.7326 1.14614 56.6474 1.14614 53.8882C1.14614 51.8682 1.13244 50.1497 1.12065 48.6711C1.10166 46.289 1.08764 44.5297 1.14386 43.1364C1.23337 40.9181 1.49905 39.8298 2.11512 38.8031L2.1788 38.6969L2.21468 38.5785C2.68654 37.0212 3.06518 35.4695 3.32647 34.207C3.57964 32.9837 3.74357 31.9348 3.74357 31.4338C3.74357 31.3908 3.762 31.2558 3.87197 31.0011C3.97707 30.7577 4.13966 30.4639 4.35936 30.1215C4.79991 29.4351 5.41063 28.6442 6.08573 27.7991C6.2646 27.5752 6.44832 27.3471 6.63345 27.1173C7.13342 26.4966 7.64371 25.863 8.09681 25.2645C8.70968 24.4548 9.28134 23.6286 9.60972 22.8984C12.1034 17.4469 17.1212 13.2075 21.0969 10.9891L21.097 10.9892L21.1069 10.9835C22.7438 10.0454 24.2137 9.14436 25.5949 8.29764C30.7825 5.1176 34.7204 2.70366 41.5644 1.97065C48.9506 1.20163 52.624 0.879986 55.2217 1.03969C57.7299 1.1939 59.2172 1.79351 62.2775 3.02723L62.3095 3.04012L62.3095 3.04016L62.3182 3.04359L73.4801 7.42202Z" stroke="white" stroke-width="2"/>
  </g>
  <path d="M63.8646 49.321C57.2268 43.6957 50.6662 37.9412 43.771 32.6263C41.3912 30.79 38.3939 33.3375 38.2524 35.8075C37.7507 45.1699 37.9308 54.4807 39.3973 63.7526C39.4359 64.0371 39.5131 64.2957 39.6031 64.5285C39.7832 66.2743 41.3912 67.7872 43.3337 66.5458C43.3594 66.5329 43.398 66.507 43.4237 66.4812C44.53 66.2613 45.5977 65.6147 46.2795 64.6319C51.4251 61.2568 56.455 57.8946 62.2438 55.5023C64.5336 54.5582 66.2187 51.3124 63.8646 49.321Z" fill="#FCB116"/>
  <defs>
    <filter id="filter0_b_2290_90" x="-4" y="-4" width="108" height="108" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feGaussianBlur in="BackgroundImageFix" stdDeviation="2"/>
      <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2290_90"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2290_90" result="shape"/>
    </filter>
  </defs>
</svg>
<p>Watch Native Title Determination Video</p>
            </div>
        </a>

    </div>
</section>

<?php 
$strong_culture_title = get_field('strong_culture_title');
$strong_culture_description = get_field('strong_culture_description');
$strong_culture_image = get_field('strong_culture_image');
$strong_culture_cta_link = get_field('strong_culture_cta_link');
$strong_culture_cta_text = get_field('strong_culture_cta_text');
?>

<section class="culture">
    <div class="nyamal-container">
        <div class="inner">
            <img src="<?php echo $strong_culture_image ?>">
            <div class="content-inner">
                <h2><?php echo $strong_culture_title;?></h2>
                <div class="body19"><?php echo $strong_culture_description;?></div>
                <a class="button secondary bigger" href="<?php echo $strong_culture_cta_link;?>">
                    <?php echo $strong_culture_cta_text;?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php 
$cta_section_title = get_field('cta_section_title');
$cta_section_description = get_field('cta_section_description');
$cta_cta_text = get_field('cta_cta_text');
$strong_culture_cta_link = get_field('cta_cta_link');
?>

<section class="aborginal-corporation">
    <div class="nyamal-container">
        <div class="inner">
            <img class="bg-image" src="<?php echo get_template_directory_uri()."/assets/images/home/aboriginal-corporation.png" ?>">
            <h2>
            <span class="styled">
                <?php echo $cta_section_title;?>
            </span>
            </h2>
            <div class="description body19">
                <?php echo $cta_section_description;?>
            </div>
            <a  class="button secondary bigger" href="<?php echo $strong_culture_cta_link;?>"><?php echo $cta_cta_text ?></a>
        </div>
    </div>
</section>

<?php 
$members_title = get_field('members_title');
$members_description = get_field('members_description');
$members_description_right = get_field('members_description_right');
$members_cta_text = get_field('members_cta_text');
$members_cta_link = get_field('members_cta_link');
?>

<section class="nyamal-members">
    <div class="nyamal-container">
        <div class="inner">
            <div class="col">
                <h2>
                    <?php echo $members_title ?>
                </h2>
                <div class="description body19">
                    <?php echo $members_description;?>
                </div>
                <a class="button secondary" href="<?php echo $members_cta_link;?>"><?php echo $members_cta_text;?></a>

            </div>
            <div class="col right">
                <div class="styled">
                    <?php echo $members_description_right;?>
                </div>
            </div>
        </div>
    </div>
</section>