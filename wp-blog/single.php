<?php
get_header();
?>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<?php
			while( have_posts() ) :
				the_post();

				get_template_part( 'content', get_post_format() );

				if( comments_open() || get_comments_number() ):
					comments_template();
				endif;
			?>

			<?php
				/**
				Styling belum bener
				the_post_navigation( array(
					'next_text' => 	__( '%title  →', 'wp-blog' ),
					'prev_text' => 	__( '← %title', 'wp-blog' ),
				) );
				**/
			?>
			
			<?php
			endwhile;
			?>

			</div>

			<?php get_sidebar();?>
		</div>
	</div>
</div>

<?php
get_footer();
?>