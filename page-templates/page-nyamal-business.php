<?php 

/**
 * Template Name: Nyamal Business
 */
?>

<?php get_header() ?>

<main>
    <?php echo get_template_part('template-parts/global/section', "pagetitle") ?>
    <?php echo get_template_part('template-parts/nyamal-business/section', "business") ?>
    <?php echo get_template_part('template-parts/global/section', "updatesandnewsletter") ?>
</main>


<?php get_footer() ?>