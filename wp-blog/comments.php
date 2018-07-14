<?php
if ( post_password_required() ){
  return;
}
?>
<div class="row">
  <div class="col-md-12">
    <hr />
    
    <ul class="commentlist-container">
    <?php wp_list_comments();?>
    </ul>
    <?php comment_form();?>
  </div>
</div>