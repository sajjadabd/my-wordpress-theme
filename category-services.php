<?php get_header() ?>

<div class="wrapper">

  <?php get_search_form(); ?>

  <?php get_template_part('includes/content' , 'posts') ?>

  <div class="verticalSpace"></div>

  <?php get_template_part('includes/content' , 'pagination') ?>
  
</div>

<?php #previous_posts_link(); ?>
<?php #next_posts_link(); ?> 

<?php get_footer(); ?>


