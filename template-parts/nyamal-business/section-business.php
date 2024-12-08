<?php 
$title = get_field('title');
$description = get_field('description');
?>


<section class="title-section-only padding-vertical">
    <div class="nyamal-container">
        <div class="title-section-only-inner">
            <h2 class="title-section-only-title"><?php echo $title;?></h2>
            <p class="title-section-only-description body22"><?php echo $description;?></p>
        </div>
    </div>
</section>


<?php 
$image_1 = get_field('image_1');
$title_1 = get_field('title_1');
$description_1 = get_field('description_1');
$cta_1_text = get_field('cta_1_text');
$cta_1_url = get_field('cta_1_url');
$cta_1_text = get_field('cta_1_text');
$image_2 = get_field('image_2');
$title_2 = get_field('title_2');
$description_2 = get_field('description_2');
$cta_2_text = get_field('cta_2_text');
$cta_2_url = get_field('cta_2_url');
?>

<section class="story-nyamal-people business">
    <div class="shape-divider top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 45" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1920 0H0V27.1364C86.3435 22.2736 178.491 20.3572 266.593 22.9172C308.319 24.1338 346.055 28.4921 383.842 32.8562L383.847 32.8569C416.197 36.5934 448.584 40.334 483.542 42.111C572.39 46.6271 660.361 42.6804 744.685 34.8712C810.081 28.8151 879.343 25.2843 949.144 25.2595C1004.27 25.2391 1059.05 28.0872 1113.8 30.9335H1113.81C1151.91 32.9143 1189.99 34.8943 1228.17 35.9062C1460.23 42.0515 1697.4 35.4011 1920 18V0Z" fill="white"/>
        </svg>
    </div>
    <div class="shape-divider bottom">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1920 36" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 11.4648V36H1920V0C1697.4 21.8359 1460.23 30.1814 1228.17 22.4698C1189.99 21.2 1151.91 18.7153 1113.81 16.2297C1059.06 12.658 1004.27 9.08398 949.144 9.10974C879.342 9.14075 810.081 13.5714 744.685 21.171C660.361 30.9706 572.39 35.9231 483.542 30.256C448.584 28.0261 416.197 23.3322 383.847 18.6436C346.059 13.1667 308.321 7.69714 266.593 6.17053C178.491 2.95789 86.3435 5.36267 0 11.4648Z" fill="white"/>
        </svg>
    </div>
    <div class="nyamal-container">
        <div class="inner">
            <div class="content">
                <div class="story-nyamal-people-image-wrapper">
                    <img src="<?php echo $image_1;?>">
                </div>
                <div class="story-nyamal-people-text">
                    <h2 class="story-nyamal-people-title"><?php echo $title_1;?></h2>
                    <div class="story-nyamal-people-description body19"><?php echo $description_1;?></div>
                    <a href="<?php echo $cta_1_url;?>" class="button secondary"><?php echo $cta_1_text;?></a>
                </div>
            </div>

            <div class="content">
                <div class="story-nyamal-people-image-wrapper">
                    <img src="<?php echo $image_2;?>">
                </div>
                <div class="story-nyamal-people-text">
                    <h2 class="story-nyamal-people-title"><?php echo $title_2;?></h2>
                    <div class="story-nyamal-people-description body19"><?php echo $description_2;?></div>
                    <a href="<?php echo $cta_2_url;?>" class="button secondary"><?php echo $cta_2_text;?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$endorsed_businesses_title = get_field('endorsed_businesses_title');
$endorsed_businesses_description = get_field('endorsed_businesses_description');
$nyamal_businesses_cards = get_field('nyamal_businesses_cards');
?>

<section class="nyamal-endorsed-businesses padding-vertical">
    <div class="nyamal-container">
        <div class="inner">
            <h2><?php echo $endorsed_businesses_title;?></h2>
            <p class="title-section-only-description body22"><?php echo $endorsed_businesses_description;?></p>

            <div class="business-grid">
                <?php foreach ($nyamal_businesses_cards as $card) :?>
                    <div class="business-card">
                        <img class="bg" src="<?php echo get_stylesheet_directory_uri()."/assets/images/business/card-bg.png" ?>">
                        <div class="business-card-image">
                            <img src="<?php echo $card['image'];?>">
                        </div>
                        <div class="business-card-content">
                            <h3 class="business-card-title sunbright30"><?php echo $card['title'];?></h3>
                            <div class="business-card-description"><?php echo $card['description'];?></div>
                            <ul class="icon-list">
                                <li> 
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/name2.svg">
                                    <?php echo $card['name_text'] ?>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/email2.svg">
                                    <a href="mailto:<?php echo $card['email_text'] ?>" ><?php echo $card['email_text'] ?></a>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/phone2.svg">
                                    <a href="tel:<?php echo $card['phone_text'] ?>" ><?php echo $card['phone_text'] ?></a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <?php foreach($card['social_links_repeater'] as $link): ?>
                                     <li><a href="<?php echo $link['social_icon_url'];?>" target="_blank"><img src="<?php echo $link['social_icon'];?>"></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            </div>
        </div>
    </div>
</section>