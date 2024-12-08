<?php 
/**
 * Template Name: Our Programs
 */
?>


<?php get_header() ?>

<main>
    <?php echo get_template_part('template-parts/global/section', "pagetitle") ?>
    <?php echo get_template_part('template-parts/our-programs/section', "programs") ?>
    <?php echo get_template_part('template-parts/global/section', "updatesandnewsletter") ?>
</main>


<?php get_footer() ?>