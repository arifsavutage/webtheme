<div class="col-md-4">
<?php
	if( is_active_sidebar( 'sidebar-1' ) ) :
		dynamic_sidebar ( 'sidebar-1' );
		echo "</div>";
	endif;
?>
</div>