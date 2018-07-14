<div class="row">
  <div class="col-md-12" id="post-<?php the_ID();?>">
    <div class="post-image post-image-border">
      <!--<a href="#"><img src="images/blog-1.jpg" class="img-responsive"></a>-->
      <?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive'));?>
    </div>
    <div class="post-content-frame">
      <?php if ( is_single() ) : ?>
        <h1><?php the_title(); ?></h1>
      <?php else : ?>
        <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
      <?php endif; ?>

      <div class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'wp-blog', '</span>' ) );?>        
      </div>

      <?php
        the_content( 
          sprintf( 
            __('Read More', 'wp-blog' ), 
            the_title('<a class="btn btn-primary">', '</a>', false) 
          ) 
        );
      ?>
    </div>
    <div class="post-info">Posted on <?php the_time('d F Y');?> by <?php the_author_posts_link();?></div>
  </div>
</div>   