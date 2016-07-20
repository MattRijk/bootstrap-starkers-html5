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

      <!-- Example row of columns -->
      <div id="image-wells" class="row">
        <div class="col-md-4">
            <?php
        	// A second sidebar for widgets, just because.
        	if ( is_active_sidebar( 'box-one-area' ) ) : ?>
        
        			<ul>
        				<?php dynamic_sidebar( 'box-one-area' ); ?>
        			</ul>
        
        <?php endif; ?>
        </div>
        <div class="col-md-4">
          <h2>Feature 2</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Feature 3</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
 

<div class="container-fluid">
    <div class="row">
    <div id="post-area" class="col-sm-8">
 
    <?php get_template_part( 'loop', 'index' ); ?>
    
    </div>

 
<?php get_sidebar(); ?>
<?php get_footer(); ?>