<?php get_header(); ?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
      <?php
      // Start the loop.
      while ( have_posts() ) : 
        the_post();

        // Include the page content template.
        get_template_part( 'content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      // End the loop.
      endwhile;
      ?>
      </div>

      <?php get_sidebar();?>

    </div>
  </div>
</div>
<?php get_footer();?>