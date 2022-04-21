<div class="tags">
  <?php $tags = get_the_tags(); ?>
  <?php if ($tags) : ?>
    <div>Tags : </div>
    <?php foreach($tags as $tag) : ?>
      <div class="eachTag">
        <a href="<?php echo get_tag_link($tag->term_id) ?>">
        <?php echo $tag->name ?></a>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>