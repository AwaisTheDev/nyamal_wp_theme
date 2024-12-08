<?php
$section_1_description_top =  get_field('section_1_description_top');
$section_description_right =  get_field('section_description_right');
$section_1_image =  get_field('section_1_image');
?>
<section class="ourngura-section1 padding-vertical cultural-significance">
    <div class="nyamal-container">
        <div class="inner">
            <div class="description body24">
                <?php echo $section_1_description_top?>
            </div>
            <div class="two-cols">
                <img src="<?php echo $section_1_image ?>">
                <div class="description">
                    <?php echo $section_description_right?>
                </div>
                
            </div>
        </div>
    </div>
</div>

</section>



<?php
$section_2_description_top =  get_field('section_2_description_top');
$quotes =  get_field('quotes');
$section_2_image =  get_field('section_2_image');
$section_2_text_bottom =  get_field('section_2_text_bottom');
?>

<section class="story-nyamal-people cultural-significance">
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
            <div class="two-cols">
                <div class="description">
                    <?php echo $section_2_description_top?>
                </div>
                <div class="quotes">
                    <?php foreach($quotes as $quote):?>
                        <blockquote>
                            <div>
                                <?php echo $quote['quote']?>
                            </div>
                            <div class="author">
                                <?php echo $quote['author']?>
                            </div>
                       </blockquote>
                    <?php endforeach;?>
    
                </div>
            </div>

            <div class="image">
                <img src="<?php echo $section_2_image?>">
            </div>

            <div class="description body22">
                <?php echo $section_2_text_bottom?>
            </div>
    
            
        </div>
    </div>
</section>