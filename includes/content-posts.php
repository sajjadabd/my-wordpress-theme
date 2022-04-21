
<?php  if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="postWrapper">
      <div class="imageSumbnail">
        <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('small-thumbnail'); ?>
          </a>
        <?php endif; ?>
      </div>
      <div class="textDescription">
        <a href="<?php the_permalink(); ?>">
          <h2><?php the_title() ?></h2>
        </a>
        <div>
          <?php the_excerpt() ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <div class="postWrapper">
    <p><?php _e( 'Sorry, Nothing Found !' ); ?></p>
  </div>
<?php endif; ?>