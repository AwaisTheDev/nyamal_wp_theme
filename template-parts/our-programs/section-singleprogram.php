<?php
$image_1 = get_field('image_1');
$description_right = get_field('description_1');
$description_main = get_field('description_main');
?>

<section class="program-section-main padding-vertical">
    <div class="nyamal-container">
        <div class="inner">
            <div class="two-cols">
                <img src="<?php echo $image_1?>">
                <div class="description body22">
                    <?php echo $description_right?>
                </div>
            </div>
            <div class="description-main description body22">
                <?php echo $description_main?>
            </div>
        </div>
    </div>
</section>



<?php
$extra_content = get_field('extra_content');

if($extra_content):

    $heading =  get_field('heading');
    $description =  get_field('description');
    $image =  get_field('image');
    $quotes =  get_field('quote');
    $download_title =  get_field('download_title');
    $download_files =  get_field('download_files');
?>
<section class="program-extra padding-vertical">
    <div class="nyamal-container">
        <div class="inner">
            <div class="two-cols">
                <div class="content">
                    <h3 class="heading30"><?php echo $heading; ?></h3>
                    <div class="description body18">
                    <?php echo $description?>
                </div>
                </div>
                 <img src="<?php echo $image?>">
            </div>   
                <?php if($quotes): ?>
                    <div class="quotes">
                    <?php foreach($quotes as $index=>$quote):?>
                        <?php if($index==0) echo "<div class='left'>" ?>

                    <div class="quote">
                        <h3><?php echo $quote['title'] ?></h3>
                        <blockquote>
                            <?php echo $quote['quote'];?>
                            <div class="author">
                                <?php echo $quote['quote_author'];?>
                            </div>
                        </blockquote>
                    </div>
                    <?php if($index==1) echo "</div><div class='right'>" ?>
                    <?php if($index==4) echo "</div>" ?>
                    <?php endforeach;?>
                    </div> 
                <?php endif;?>

                <?php if($download_files): ?>
                    <div class="download-files">
                    <h2 class="heading30"><?php echo $download_title ?></h2>
                    <div class="grid">
                    <?php foreach($download_files as $file): ?>
                        <?php
                        $filesize = size_format($file['file']['filesize'], 2);
                        $title = $file['title'];             
                        ?>
                        <a href="<?php echo $file['file']['url'];?>" target="_blank">
                            <div>
                                <h4><?php echo $title ?></h4>
                                <p><?php echo $filesize;?></p>
                            </div>
                            <img class="download-icon" src="<?php echo get_template_directory_uri()."/assets/images/icons/download-icon.svg" ?>">
                        </a>
                    <?php endforeach;?>
                </div>
                    </div>
                <?php endif;?>
        </div>
        </div>
    </div>
</section>


<?php endif; ?>