<?php
/*
	display search result
*/

get_header();
?>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
				if( have_posts() ) :
				?>
				<div class="page-header">
				  <h1><?php printf( __( 'Search Results for:<small> %s </small>', 'wp-blog' ), get_search_query() ); ?></h1>
				</div>
				<?php
					while( have_posts() ) : the_post();
						get_template_part( 'content', 'search');
					endwhile;
				?>

					<ul class="pager">
		              <li>
		                <!--<a href="#">←  New Post</a>-->
		                <?php previous_posts_link( '←  New Post' );?>
		              </li>
		              <li>
		                <!--<a href="#">Older Post  →</a>-->
		                <?php next_posts_link( 'Older Post  →' );?>
		              </li>
		            </ul>

				<?php
				else:
					get_template_part( 'content', 'none' );
				endif;
				?>
			</div>

			<?php get_sidebar();?>

		</div>
	</div>
</div>

<?php
get_footer();
?>