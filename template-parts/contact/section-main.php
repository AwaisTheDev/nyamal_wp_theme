<?php
$description = get_field('description');
$get_in_touch_heading = get_field('get_in_touch_heading');
$contact_list = get_field('contact_list');
$contact_us_heading = get_field('contact_us_heading');
$contact_us_description = get_field('contact_us_description');
$form_heading = get_field('form_heading');
$contact_form_shortcode = get_field('contact_form_shortcode');
$map = get_field('map');
?>

<section class="contact-us-main padding-vertical">
        <img class="graphic" src="<?php echo get_template_directory_uri()."/assets/images/contact/form-left.svg" ?>">

    <div class="nyamal-container">
        <div class="inner">
            <div class="main-description body24">
                <?php echo $description ?>
            </div>
            <div class="divider">
                <svg xmlns="http://www.w3.org/2000/svg" width="1170" height="7" viewBox="0 0 1170 7" fill="none">
                <path opacity="0.2" d="M1 6C20.5657 3.16968 41.8759 5.57151 61.9662 4.63112C115.333 2.13103 169.444 1.2889 223.27 1.09351C288.967 0.8547 419.261 1.0638 485.137 1.83051C824.931 3.53304 971.536 0.920972 1117.84 3.4005C1135.41 3.69758 1152.1 1.90592 1170 2.04075" stroke="black"/>
                </svg>
            </div>
            <div class="two-cols">
                <div>
                    <h2 class="heading30"><?php echo $get_in_touch_heading;?></h2>
                      <ul class="icon-list">
                        <?php foreach ($contact_list as $contact) {?>
                          
                                <li class="body20">
                                    <img src="<?php echo $contact['icon'] ?>">
                                    
                                    <?php if($contact['link']){ ?>
                                        <a class="icon-list-text" href="<?php echo $contact['link'];?>"><?php echo $contact['title'];?></a>

                                    <?php } else{ ?>
                                        <p class="icon-list-text"><?php echo $contact['title'];?></p>
                                    <?php }?>
                                </li>
                            
                        <?php }?>
                        </ul>
                </div>

                <div class="form-col">
                    <h2 class="heading30"><?php echo $contact_us_heading;?></h2>
                    <p class="body18"><?php echo $contact_us_description;?></p>
                    <div class="contact-form">
                        <?php echo do_shortcode($contact_form_shortcode);?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="padding-vertical map-section">
    <img class="graphic" src="<?php echo get_template_directory_uri()."/assets/images/contact/map-bottom-left.svg" ?>">
    <div class="nyamal-container">
       <div >
            <img src="<?php echo $map ?>" alt="nyamal-address">
        </div>
    </div></div>
</section>