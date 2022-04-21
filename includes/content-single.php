<?php  if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <div class="postInformation">
      <div class="textInformation">
        <h1><?php the_title() ?></h1>
        <?php get_template_part('includes/user', 'information') ?>
        <div class="verticalSpace"></div>
        <?php get_template_part('includes/listof', 'tags'); ?>
        <div class="verticalSpace"></div>
        <?php get_template_part('includes/listof', 'categories'); ?>
      </div>

      <div class="bannerImage"> 
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('large-thumbnail'); ?>
        <?php endif; ?>
      </div>
    </div>

    

    
    <div class="postContent">
      <?php the_content() ?>
    </div>
    

    
    <div class="verticalSpace"></div>
    
    <?php if ( comments_open() ) : ?>
      <?php comments_template(); ?>
    <?php endif; ?>
    

  <?php endwhile; ?>
<?php endif; ?>