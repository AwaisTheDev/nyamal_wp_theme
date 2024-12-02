
<?php 

/**
 * Template Name: Homepage
 */
?>

<?php get_header() ?>

<main>
    <?php echo get_template_part('template-parts/homepage/section', "home") ?>
    <?php echo get_template_part('template-parts/global/section', "updatesandnewsletter") ?>
</main>
<?php   ?>
<?php the_content() ?>
<?php get_footer() ?>