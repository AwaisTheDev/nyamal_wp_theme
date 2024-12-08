<?php
$overview_title = get_field('overview_title');
$overview_description = get_field('overview_description');
$overview_image = get_field('overview_image');
?>

<section class="story-overview">
    <div class="nyamal-container">
        <div class="inner">
            <div class="content">
            <h2>
                <?php echo $overview_title; ?>
            </h2>
            <div class="body19">
                <?php echo $overview_description; ?>
            </div>
            </div>
            <div class="image">
                <img src="<?php echo $overview_image;?>">
            </div>
        </div>
    </div>
</section>

<?php
$people_heading = get_field('people_heading');
$people_description = get_field('people_description');
$people_quote = get_field('people_quote');
$people_quote_author = get_field('people_quote_author');
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
            <div class="title-quote">
                <h2>
                    <?php echo $people_heading;?>
                </h2>
                <blockquote>
                        <?php echo $people_quote;?>
                    <p class="author">
                         <?php echo $people_quote_author;?>
                    </span>
                </blockquote>
            </div>
            <div class="description body19">
                <?php echo $people_description;?>
            </div>
        </div>
    </div>
</section>


<?php
$history_title = get_field('history_title');
$history = get_field('history');
$history_quote = get_field('history_quote');
$history_quote_author = get_field('history_quote_author');
$history_image = get_field('history_image');
?>

<section class="story-history">
    <div class="nyamal-container">
        <div class="inner">
            <h2>
                <?php echo $history_title ?>
            </h2>
            <div class="history-list">
                <?php foreach($history as $item) :?>
                    <div class="item">
                        <div class="year">
                            <?php echo $item['year'];?>
                        </div>
                        <div class="description body19">
                            <?php echo $item['description'];?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="title-quote">
                <blockquote>
                    <?php echo $history_quote;?>
                    <p class="author">
                         <?php echo $history_quote_author;?>
                    </span>
                </blockquote>
        </div>
        <div class="image">
            <img src="<?php echo $history_image;?>">
        </div>
    </div>
</section>

<?php
$council_title = get_field('council_title');
$council__description = get_field('council__description');
$council_title_2 = get_field('council_title_2');
$council_members = get_field('council_members');
?>

<section class="story-council">


    <div  class="nyamal-container">
        <div class="inner">
            <h2>
                <?php echo $council_title; ?>
            </h2>
            <div class="description body22">
                <?php echo $council__description;?>
            </div>
            <h3 class="council-members-title"><?php echo $council_title_2 ?></h3>
            <blockquote>
                <?php
                $council_members = get_field('council_members');
                foreach($council_members as $member) :?>
                    <div class="member">
                        <?php echo $member['members_name'];?>
                    </div>
                <?php endforeach;?>
            </blockquote>
        </div>
    </div>
</section>


<?php
$board_of_directors_title = get_field('board_of_directors_title');
$board_of_directors_description = get_field('board_of_directors_description');
$directors = get_field('directors');
?>

<section class="story-board-directors">

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
                <?php echo $board_of_directors_title;?>
            </h2>
            <div class="description body22">
                <?php echo $board_of_directors_description;?>
            </div>
            <div class="board-directors-list">
                <?php
                foreach($directors as $key=>$director) :?>
                    <div class="director">
                        <div class="thumbnail">
                            <svg width="345" height="345" viewBox="0 0 345 345" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <mask id="bod-mask<?php echo $key ?>">
                                    <path d="M345 72.0481C344.838 56.8769 344.676 41.7028 344.514 26.5316C342.929 24.9361 343.348 22.4572 343.601 20.0501C343.149 14.6204 343.259 7.42121 338.879 8.11132C331.908 9.2072 325.426 4.48137 318.522 4.60007C291.755 5.05277 264.984 4.79329 238.213 4.77397C235.051 4.77397 231.833 5.26809 228.737 4.43168C205.24 -1.89796 181.608 2.58496 158.373 6.02168C134.205 9.59642 110.463 5.37022 86.6205 3.41033C72.3025 2.23439 57.9828 1.03913 43.7801 2.72022C35.256 3.73053 27.0575 5.7898 18.5458 2.1571C5.41836 -3.44655 1.74067 1.29032 0.581261 23.2025C0.735537 24.246 0.599961 25.1569 0.172974 25.927C0.973963 45.5729 1.21395 255.869 0 275.496C0.219726 294.637 0.439453 313.777 0.659179 332.921C7.63277 339.758 15.2281 333.956 22.3887 336.228C41.4099 342.268 60.6959 344.302 79.8807 344.774C103.296 345.351 126.735 344.846 150.215 342.994C202.324 338.881 254.577 345.191 306.724 339.201C312.984 338.483 318.934 342.811 325.314 342.486C341.899 341.635 341.908 342.165 343.978 314.443C344.277 297.193 343.328 89.2124 344.997 72.0481H345Z" fill="#FBF9F6"/>

                                </mask>
                            </defs>   
                            <image width="345" height="345" href="<?php echo $director['image'] ?>" mask="url(#bod-mask<?php echo $key ?>)"/>                       
                        </svg>
                        </div>
                        <div class="name">
                            <?php echo $director['name'];?>
                        </div>
                        <div class="designation body22">
                            <?php echo $director['designation'];?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>

<?php
$team_title = get_field('team_title');
$team_description = get_field('team_description');
$management_team = get_field('management_team');
?>


<section class="story-management-team">
    <div class="nyamal-container">
        <div class="inner">
            <h2>
                <?php echo $team_title;?>
            </h2>
            <div class="description body22">
                <?php echo $team_description;?>
            </div>
            <div class="board-directors-list">
                <?php
                foreach($management_team as $key=>$member) :?>
                    <div class="member">
                        <div class="thumbnail">
                            <svg width="345" height="345" viewBox="0 0 345 345" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <mask id="bod-mask<?php echo $key ?>">
                                    <path d="M345 72.0481C344.838 56.8769 344.676 41.7028 344.514 26.5316C342.929 24.9361 343.348 22.4572 343.601 20.0501C343.149 14.6204 343.259 7.42121 338.879 8.11132C331.908 9.2072 325.426 4.48137 318.522 4.60007C291.755 5.05277 264.984 4.79329 238.213 4.77397C235.051 4.77397 231.833 5.26809 228.737 4.43168C205.24 -1.89796 181.608 2.58496 158.373 6.02168C134.205 9.59642 110.463 5.37022 86.6205 3.41033C72.3025 2.23439 57.9828 1.03913 43.7801 2.72022C35.256 3.73053 27.0575 5.7898 18.5458 2.1571C5.41836 -3.44655 1.74067 1.29032 0.581261 23.2025C0.735537 24.246 0.599961 25.1569 0.172974 25.927C0.973963 45.5729 1.21395 255.869 0 275.496C0.219726 294.637 0.439453 313.777 0.659179 332.921C7.63277 339.758 15.2281 333.956 22.3887 336.228C41.4099 342.268 60.6959 344.302 79.8807 344.774C103.296 345.351 126.735 344.846 150.215 342.994C202.324 338.881 254.577 345.191 306.724 339.201C312.984 338.483 318.934 342.811 325.314 342.486C341.899 341.635 341.908 342.165 343.978 314.443C344.277 297.193 343.328 89.2124 344.997 72.0481H345Z" fill="#FBF9F6"/>

                                </mask>
                            </defs>   
                            <image width="345" height="345" href="<?php echo $member['image'] ?>" mask="url(#bod-mask<?php echo $key ?>)"/>                       
                        </svg>
                        </div>
                        <div class="name">
                            <?php echo $member['name'];?>
                        </div>
                        <div class="designation body22">
                            <?php echo $member['designation'];?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>