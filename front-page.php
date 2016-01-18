<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage DBR_Parallax
 * @since DeepBlue Revenue Parallax 0.8
 */

get_header(); 

while ( have_posts() ) :

    the_post();

    get_template_part( 'content', 'page' );

    the_content();

endwhile;

get_footer();

?>