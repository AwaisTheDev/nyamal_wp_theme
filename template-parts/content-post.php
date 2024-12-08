<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nyamal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php nyamal_post_thumbnail(); ?>
    <div class="entry-content">
        <div class="date"><?php  echo get_the_date() ?></div>
        <a href="<?php echo get_the_permalink(); ?>"><h3><?php echo get_the_title() ?></h3></a>
    </div>
</article>