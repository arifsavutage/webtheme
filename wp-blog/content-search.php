<div class="media" id="post-<?php the_ID();?>" <?php post_class();?>>
	<div class="media-left">
		<?php the_post_thumbnail( 'thumbnail', array('class' => 'media-object') );?>
	</div>
	<div class="media-body">
		
		<?php the_title( sprintf( '<h3 class="media-heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php #the_excerpt();?>
		<?php the_content( 
          sprintf( 
            __('Read More', 'wp-blog' ), 
            the_title('<a class="btn btn-primary">', '</a>', false) 
          ) 
        );
        ?>
	</div>
</div>