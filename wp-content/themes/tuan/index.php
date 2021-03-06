<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
    <?php get_template_part("part/slider")?>

    <?php get_template_part('part/block/intro')?>
    <?php get_template_part('part/block/project')?>
    <?php get_template_part('part/block/service')?>
    <?php get_template_part('part/block/step')?>
    <?php get_template_part('part/block/blog')?>

<?php
get_footer();
