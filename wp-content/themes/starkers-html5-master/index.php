<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>

<div id="slideshow"></div>

<div id="NewAdditions"></div>

<div class="container-fluid">
    <div class="row">
    <div id="post-area" class="col-sm-8">
 
    <?php get_template_part( 'loop', 'index' ); ?>
    
    </div>

 
<?php get_sidebar(); ?>
<?php get_footer(); ?>