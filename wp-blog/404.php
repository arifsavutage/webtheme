<?php get_header();?>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div id="notfound">
				<h1>
					<?php _e('404', 'wp-blog');?>
				</h1>
				<small><?php _e('Oops, page not found', 'wp-blog');?></small>
				<br />
				<a href="index.php" class="btn btn-primary">Back to home</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>