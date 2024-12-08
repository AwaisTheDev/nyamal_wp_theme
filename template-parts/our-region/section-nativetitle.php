<?php
$description_1 =  get_field('description_1');
$heading =  get_field('heading');
$description_2 =  get_field('description_2');
$description_3 =  get_field('description_3');
?>
<section class="ourngura-section1 padding-vertical native-title">
    <div class="nyamal-container">
        <div class="inner">
            <div class="description body24">
                <?php echo $description_1?>
            </div>
            <h2 class="heading30">
                <?php echo $heading ?>
            </h2>
            <div class="two-cols">
               <div class="left">
                <blockquote>
                    <?php echo $description_2  ?>
                </blockquote>
               </div>

               <div class="right">
                <blockquote>
                    <?php echo $description_3  ?>
                </blockquote>
               </div>
                
            </div>
        </div>
    </div>
</div>

</section>



<?php
$deternimation_video_title =  get_field('deternimation_video_title');
$determination_video_thumbnail =  get_field('determination_video_thumbnail');
$deternimation_video_url =  get_field('deternimation_video_url');
?>

<section class="story-nyamal-people">
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
               <h2>
                <?php echo $deternimation_video_title ?>
               </h2>
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
                            </div>
        </a>
            
        </div>
    </div>
</section>

<?php
$determination_area_title =  get_field('determination_area_title');
$determination_area_description =  get_field('determination_area_description');
$determination_area_image =  get_field('determination_area_image');
?>

<section class="section-determination-area padding-vertical">
    <div class="nyamal-container">
        <div class="two-cols">
            <div class="left">
                <h2 class="heading30"><?php echo $determination_area_title;?></h2>
                <div class="content body18"><?php echo $determination_area_description;?></div>
            </div>
            <div class="right">
                <img src="<?php echo $determination_area_image;?>" alt="<?php echo $determination_area_title;?>">
            </div>
        </div>
        </div>
    </div>
</section>