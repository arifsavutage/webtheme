<?php
	get_header();
?>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<?php if ( have_posts() ) : ?>
				<?php if ( is_home() && ! is_front_page() ) : ?>

					<div class="row">
						<div class="col-md-12">
							<div class="post-image" style="border:0.1em solid #CCC;">
								<?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive'));?>
							</div>
							<div style="padding: 10 15;border-left:0.1em solid #CCC;border-right:0.1em solid #CCC;">
								<?php single_post_title(); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<div class="row">
				<?php
					$x=1;
					while ( have_posts() ) :
				
					if( $x > 2 ) : $x=1;
				?>
					</div>
					<div class="row">
				<?php
					endif;
				?>	
					<div class="col-md-6">
				<?php 
						the_post();
						get_template_part( 'content', get_post_format() );
						$x++;
				?>
					</div>
				<?php
					endwhile;
				?>
				</div>	
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
				else :
					get_template_part( 'content', 'none' );
				endif;
				?>

				</div>

				<?php get_sidebar();?>

		</div>
	</div>
</div>
<?php get_footer(); ?>