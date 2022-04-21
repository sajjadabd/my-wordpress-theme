<?php 
  $firstName = get_the_author_meta('first_name');
  $user_id = get_the_author_meta('ID');
?>

<div class="userInfo">
  <div class="profilePicture">
  <?php echo get_avatar($user_id, 60); ?>
  </div>
  <div class="displayName">
  Written by : <?php echo $firstName ?>
  </div>
  <div class="dotSeperator">
    .
  </div>
  <div class="date">
    <?php echo get_the_date('l jS F, Y') ?>
  </div>
</div>