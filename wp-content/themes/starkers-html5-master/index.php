<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>


<div class="row">
    <div class="col-lg-12 text-center">
        <?php
        	// First image widget.
        	if ( is_active_sidebar( 'main-image-area' ) ) : ?>
        
        			<ul>
        				<?php dynamic_sidebar( 'main-image-area' ); ?>
        			</ul>
        
        <?php endif; ?>
        </div>

    
</div>



      <!-- Example row of columns -->
      <div id="image-wells" class="row">
        <div class="col-md-4">
        <?php
        	// First image widget.
        	if ( is_active_sidebar( 'box-one-area' ) ) : ?>
        
        			<ul>
        				<?php dynamic_sidebar( 'box-one-area' ); ?>
        			</ul>
        
        <?php endif; ?>
        </div>
        
        <div class="col-md-4">
        <?php
        	// Second image widget.
        	if ( is_active_sidebar( 'box-two-area' ) ) : ?>
        
        			<ul>
        				<?php dynamic_sidebar( 'box-two-area' ); ?>
        			</ul>
        
        <?php endif; ?>
       </div>
        <div class="col-md-4">
           <?php
        	// Third image widget.
        	if ( is_active_sidebar( 'box-three-area' ) ) : ?>
        
        			<ul>
        				<?php dynamic_sidebar( 'box-three-area' ); ?>
        			</ul>
        
        <?php endif; ?>
        </div>
      </div>
 

<div class="container-fluid">
    <div class="row">
    <div id="post-area" class="col-sm-8">
 
    <?php get_template_part( 'loop', 'index' ); ?>
    
    </div>

 
<?php get_sidebar(); ?>
<?php get_footer(); ?>