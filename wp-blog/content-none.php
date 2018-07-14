<?php
if ( is_search() ) :
?>
	<div class="page-header">
	  <h1>
	  	<?php _e( 'Sorry, but nothing matched your search terms.', 'wp-blog' );?>
	  	<small>
	  	<?php _e( 'Please try again with some different keywords', 'wp-blog' );?>
	  	</small>
	  </h1>
	</div>
	<?php get_search_form(); ?>
<?php else : ?>
	<div class="page-header">
	  <h1>
	  	<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-blog' );?>
	  </h1>
	</div>
	<?php get_search_form(); ?>
<?php endif; ?>