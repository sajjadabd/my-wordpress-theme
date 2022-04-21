<div class="categories">
  <?php $categories = get_the_category(); ?>
  <?php if ($categories) : ?>
    <div>Categories : </div>
    <?php foreach($categories as $category) : ?>
      <div class="eachCategory">
        <a href="<?php echo get_category_link($category->term_id) ?>">
        <?php echo $category->name ?></a>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>